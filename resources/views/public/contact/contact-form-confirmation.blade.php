@extends('layouts.contact_layout')

@section('title')
Votre message a bien été envoyé |
@endsection

@section('content')
<div id="contact-form">
    @csrf
    <main id="contact">
        <section class="page container">
            <h2>Et c'est <b>envoyé</b> !</h2>
            <p>Merci pour votre intérêt, votre message nous est bien parvenu.</p>
            <p>Nous reviendrons vers vous dans les plus brefs délais !</p>

            <a class="btn btn-outline-white" href="{{route('home')}}">Retour à l'accueil</a>
        </section>
        @include('public.contact.components.decorations')
    </main>
</div>
@endsection