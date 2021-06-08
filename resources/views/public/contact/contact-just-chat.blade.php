@extends('template')

@section('title')
Nous contacter pour discuter
@endsection

@section('content')
<form action="{{route('contact.send-chat')}}" method="post">
    @csrf
    <main id="contact">
        <section class="page container" id="step1">
            <!-- Step 1 -->
            <h4>Juste discuter</h4>
            <h2>Quel est <b>votre nom</b> ?</h2>

            <input type="text" name="name" id="name" placeholder="Prénom Nom" value="{{old('name')}}" required>
            <span class="focus-input"></span>

            <small id="name-error" class="d-none">Merci de renseigner votre nom.</small>

            <div class="navigation mt-3">
                <a class="btn btn-white" href="{{url()->previous()}}"><i class="fas fa-arrow-left"></i></a>
                <a class="btn btn-white" href="#step2"><i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="slider mt-3">
                <ul>
                    <li><a href="#step1"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step2"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step3"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step4"><i class="fas fa-circle"></i></a></li>
                </ul>
                <h4>01/04</h4>
            </div>
        </section>

        <section class="page container" id="step2">
            <!-- Step 2 -->
            <h4>Juste discuter</h4>
            <h2 for="mail"><b id="greetings">Prénom</b>, quel est <b>votre adresse e-mail</b> ?</h2>

            <input type="mail" name="mail" id="mail" placeholder="Votre e-mail" value="{{old('mail')}}" required>
            <span class="focus-input"></span>

            <small id="mail-error" class="d-none">Merci de renseigner votre adresse e-mail.</small>

            <div class="navigation mt-3">
                <a class="btn btn-white" href="#step1"><i class="fas fa-arrow-left"></i></a>
                <a class="btn btn-white" href="#step3"><i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="slider mt-4">
                <h4>02/04</h4>
            </div>
        </section>

        <section class="page container" id="step3">
            <!-- Step 3 -->
            <h4>Juste discuter</h4>
            <h2>Dites-nous en plus à propos de <b>votre projet</b> :</h2>

            <textarea name="message" id="message" placeholder="Votre message" required>{{old('message')}}</textarea>
            <span class="focus-input"></span>

            <small id="message-error" class="d-none">Merci de renseigner la raison de votre prise de contact.</small>

            <div class="navigation mt-3">
                <a class="btn btn-white" href="#step2"><i class="fas fa-arrow-left"></i></a>
                <a class="btn btn-white" href="#step4"><i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="slider mt-4">
                <h4>03/04</h4>
            </div>
        </section>

        <section class="page container" id="step4">
            <!-- Step 4 -->
            <h2>Résumé de <b>votre demande</b> :</h2>

            <h4>Votre nom</h4>
            <p id="confirm-name"></p>

            <h4>Votre e-mail</h4>
            <p id="confirm-mail"></p>

            <h4>Votre message</h4>
            <p id="confirm-message"></p>

            <div class="navigation mt-3">
                <a class="btn btn-white" href="#step3"><i class="fas fa-arrow-left"></i></a>
                <input class="btn btn-white" type="submit" value="envoyer">
            </div>

            <div class="slider mt-4">
                <ul>
                    <li><a href="#step1"><i class="far fa-circle"></i></a></li>
                    <li><a href="#step2"><i class="far fa-circle"></i></a></li>
                    <li><a href="#step3"><i class="far fa-circle"></i></a></li>
                    <li><a href="#step4"><i class="far fa-circle"></i></a></li>
                </ul>
                <h4 class="text-white">04/04</h4>
            </div>
        </section>
    </main>
</form>
<script src="{{asset('js/contact-form.js')}}"></script>
@endsection