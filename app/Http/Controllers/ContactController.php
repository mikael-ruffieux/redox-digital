<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ContactNameRequest;
use App\Http\Requests\ContactMailRequest;
use App\Http\Requests\ContactProjectTypeRequest;
use App\Http\Requests\ContactBudgetRequest;
use App\Http\Requests\ContactMessageRequest;
use Illuminate\Support\Facades\Mail;

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

    // ######## Formulaire de maintenance !! ########
    public function returnForm() {
        return view('view_contact_form');
    }

    public function validateAndSendForm(ContactRequest $request) {
        // Les informations sont validées dans la requête

        // Envoi du mail
        Mail::send('view_mail_content', $request->all(), function($message){
            $message->to('info@redoxdigital.ch')->subject('Prise de contact | redoxdigital.ch');
        });

        // Confirmation de réception
        return view('view_form_confirmation');
    }
    // ######## .Formulaire de maintenance !! ########

    // ##### New Contact Form #####

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

        // Envoi du mail
        Mail::send('public.contact.components.mail-content', ['results' => $results], function($message) use ($results){
            $message->from($results['mail']['value'], $results['name']['value']);
            $message->to('info@redoxdigital.ch')->subject('Prise de contact | redoxdigital.ch');
     
        });

        // Vider la session
        session()->flush();

        // Confirmation de réception
        return view('public.contact.contact-form-confirmation');
    }
}
