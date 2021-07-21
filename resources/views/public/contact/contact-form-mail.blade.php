@extends('template')

@section('title')
Nous contacter
@endsection

@section('content')
<form id="contact-form" action="{{route('contact.'.($chat ? 'chat' : 'start' ).'.mail.post')}}" method="post">
    @csrf
    <main id="contact">
        <section class="page container" id="step1">
            <!-- Step 2 -->
            <h3>{{$chat === false ? "Débuter un projet" : "Juste discuter"}}</h3>
            <h2 for="mail"><b>{{session('name')}}</b>, quel est <b>votre adresse e-mail</b> ?</h2>

            <input type="mail" name="mail" id="mail" placeholder="Votre e-mail" value="{{!empty(session('mail')) ? session('mail') : ''}}" required>
            <span class="focus-input"></span>

            {!! $errors->first('mail', '<small class="contact-form-error">:message</small>') !!}

            @include('public.contact.components.navigation', [$step, $steps])
        </section>

        @include('public.contact.components.decorations')

    </main>
</form>
@endsection