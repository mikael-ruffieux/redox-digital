<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
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
}
