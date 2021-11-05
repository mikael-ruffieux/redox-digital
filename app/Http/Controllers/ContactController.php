<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\ContactNameRequest;
use App\Http\Requests\ContactMailRequest;
use App\Http\Requests\ContactProjectTypeRequest;
use App\Http\Requests\ContactBudgetRequest;
use App\Http\Requests\ContactMessageRequest;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    private $budgets = [
        "500 - 1'000 CHF",
        "1'000 - 2'000 CHF",
        "2'000 - 5'000 CHF",
        "+ 5'000 CHF"
    ];

    private $project_types = [
        "Web",
        "Vidéo",
        "Marketing",
        "Je ne sais pas encore trop ..."
    ];

    private $randomNamesAndMails = [
        ["name" => "Henri Guisan", "mail" => "general.guisan@armee-suisse.ch"],
        ["name" => "Guillaume Tell", "mail" => "g.tell@admin.ch"],
        ["name" => "Heidi", "mail" => "heidi@graubuenden.ch"],
    ];

    // ##### New Contact Form #####
    public function getIntro () {
        // Vider la session
        session()->flush();
        return view('public.contact.contact-form');
    }

    public function getNameChat() {
        if(!empty(session('rand'))) {
            $rand = session('rand');
        } else {
            $rand = rand(0, sizeof($this->randomNamesAndMails)-1);
        }
        session(['rand'=> $rand]);
        return view('public.contact.contact-form-name', ['step' => 1, 'steps' => 4, 'next' => 'chat.mail', 'prev' => false, 'chat' => true, 'randomName' => $this->randomNamesAndMails[$rand]['name']]);
    }

    public function getMailChat() {
        if(!empty(session('rand'))) {
            $rand = session('rand');
        } else {
            $rand = rand(0, sizeof($this->randomNamesAndMails)-1);
        }
        session(['rand'=> $rand]);
        return view('public.contact.contact-form-mail', ['step' => 2, 'steps' => 4, 'next' => 'chat.message', 'prev' => 'chat.name', 'chat' => true, 'randomMail' => $this->randomNamesAndMails[$rand]['mail']]);
    }

    public function getNameProject() {
        if(!empty(session('rand'))) {
            $rand = session('rand');
        } else {
            $rand = rand(0, sizeof($this->randomNamesAndMails)-1);
        }
        session(['rand'=> $rand]);
        return view('public.contact.contact-form-name', ['step' => 1, 'steps' => 6, 'next' => 'start.mail', 'prev' => false, 'chat' => false, 'randomName' => $this->randomNamesAndMails[$rand]['name']]);
    }

    public function getMailProject() {
        if(!empty(session('rand'))) {
            $rand = session('rand');
        } else {
            $rand = rand(0, sizeof($this->randomNamesAndMails)-1);
        }
        session(['rand'=> $rand]);
        return view('public.contact.contact-form-mail', ['step' => 2, 'steps' => 6, 'next' => 'start.project-type', 'prev' => 'start.name', 'chat' => false, 'randomMail' => $this->randomNamesAndMails[$rand]['mail']]);
    }

    public function postName(ContactNameRequest $request) {
        session(['type'=> $request->type]);
        session(['name'=> $request->name]);
        return redirect(route('contact.'.session('type').'.mail'));
    }

    public function postMail(ContactMailRequest $request) {
        session(['mail'=> $request->mail]);
        if(session('type') == 'start') {
            return redirect(route('contact.'.session('type').'.project-type'));
        } else {
            return redirect(route('contact.'.session('type').'.message'));
        }
        
    }

    public function postProjectType(ContactProjectTypeRequest $request) {
        session(['project_type'=> $request->project_type]);
        return redirect(route('contact.'.session('type').'.budget'));
    }

    public function postBudget(ContactBudgetRequest $request) {
        session(['budget'=> $request->budget]);
        return redirect(route('contact.'.session('type').'.message'));
    }

    public function postMessage(ContactMessageRequest $request) {
        session(['message'=> $request->message]);
        return redirect(route('contact.'.session('type').'.summary'));
    }

    public function showSummary() {
        // Nav infos
        $step = session('type') == 'chat' ? 4 : 6;
        $steps = $step;
        $prev = "";

        // Required infos
        $results = [
            "name" => ['label' => "Votre nom", 'value' => session('name')],
            "mail" => ['label' => "Votre e-mail", 'value' => session('mail')],
            "message" => ['label' => "Votre message", 'value' => session('message')],
        ];

        // Specific infos
        if(session('type') == 'start') {
            $results['budget'] = ['label' => "Votre budget", 'value' => $this->budgets[session('budget') - 1]];
            $results['project_type'] = ['label' => "Type de projet", 'value' => $this->project_types[session('project_type') - 1]];
        }

        return view('public.contact.contact-form-summary', compact('results', 'prev', 'step', 'steps'));
    }

    public function send() {
        // Required infos
        $results = [
            "name" => ['label' => "Nom", 'value' => session('name')],
            "mail" => ['label' => "E-mail", 'value' => session('mail')],
            "message" => ['label' => "Message", 'value' => session('message')],
        ];

        // Specific infos
        if(session('type') == 'start') {
            $results['budget'] = ['label' => " Budget", 'value' => $this->budgets[session('budget') - 1]];
            $results['project_type'] = ['label' => "Type de projet", 'value' => $this->project_types[session('project_type') - 1]];
        }

        $this->saveLog($results);

        // Envoi du mail
        Mail::send('public.contact.components.mail-content', ['results' => $results], function($message) use ($results){
            $message->from(env('MAIL_FROM_ADDRESS'), $results['name']['value']);
            $message->to('info@redoxdigital.ch')->subject('Prise de contact | redoxdigital.ch');
        });

        // Vider la session
        session()->flush();

        // Confirmation de réception
        return view('public.contact.contact-form-confirmation');
    }

    private function saveLog($mail_content) {
        try {
            $json = json_encode($mail_content);
            Storage::put('mail-log/'.time().".json", $json);
        } catch (Exception $e) {
            dd($e);
        }
    }
}
