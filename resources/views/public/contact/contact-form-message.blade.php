@extends('template')

@section('title')
Nous contacter
@endsection

@section('content')
<form id="contact-form" action="{{route('contact.start.message.post')}}" method="post">
    @csrf
    <main id="contact">
        <section class="page container" id="step1">
            <!-- Last step -->
            <h4>{{$chat === false ? "Débuter un projet" : "Juste discuter"}}</h4>
            <h2>Dites-nous en plus à propos de <b>votre projet</b> :</h2>

            <textarea name="message" id="message" placeholder="Votre message" required>{{!empty(session('message')) ? session('message') : ''}}</textarea>
            <span class="focus-input"></span>

            {!! $errors->first('message', '<small class="contact-form-error">:message</small>') !!}

            @include('public.contact.components.navigation', [$step, $steps])
        </section>

        @include('public.contact.components.decorations')

    </main>
</form>
@endsection