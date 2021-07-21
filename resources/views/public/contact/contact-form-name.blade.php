@extends('template')

@section('title')
Nous contacter
@endsection

@section('content')
<form id="contact-form" action="{{route('contact.'.($chat ? 'chat' : 'start' ).'.name.post')}}" method="post">
    @csrf
    <main id="contact">
        <section class="page container" id="step1">
            <!-- Step 1 -->
            <h3>{{$chat === false ? "Débuter un projet" : "Juste discuter"}}</h3>
            <h2>Quel est <b>votre nom</b> ?</h2>

            <input type="hidden" name="type" value="{{$chat ? 'chat' : 'start'}}">

            <input type="text" name="name" id="name" placeholder="Prénom Nom" value="{{!empty(session('name')) ? session('name') : ''}}" required>
            <span class="focus-input"></span>

            {!! $errors->first('name', '<small class="contact-form-error">:message</small>') !!}

            @include('public.contact.components.navigation', [$step, $steps])
        </section>

        @include('public.contact.components.decorations')

    </main>
</form>
@endsection