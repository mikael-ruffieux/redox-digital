@extends('template')

@section('title')
Nous contacter pour discuter
@endsection

@section('content')
<form id="contact-form" action="{{route('contact.send-chat')}}" method="post">
    @csrf
    <main id="contact">
        <section class="page container" id="step1">
            <!-- Step 1 -->
            <h4>Juste discuter</h4>
            <h2>Quel est <b>votre nom</b> ?</h2>

            <input type="text" name="name" id="name" placeholder="Prénom Nom" value="{{old('name')}}" required>
            <span class="focus-input"></span>

            <small id="name-error" class="d-none">Merci de renseigner votre nom.</small>

            <div class="navigation">
                <a class="btn btn-fa-white" href="{{url()->previous()}}"><i class="fas fa-arrow-left"></i></a>
                <a class="btn btn-fa-white" href="#step2"><i class="fas fa-arrow-right"></i></a>
                <!--<small>ou appuyez sur "Enter".</small>-->
            </div>

            <div class="slider">
                <h4>01/04</h4>
                <ul>
                    <li><a href="#step1"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step2"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step3"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step4"><i class="fal fa-circle"></i></a></li>
                </ul>
            </div>
        </section>

        <section class="page container" id="step2">
            <!-- Step 2 -->
            <h4>Juste discuter</h4>
            

            <div class="navigation">
                <a class="btn btn-fa-white" href="#step1"><i class="fas fa-arrow-left"></i></a>
                <a class="btn btn-fa-white" href="#step3"><i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="slider">
                <h4>02/04</h4>
                <ul>
                    <li><a href="#step1"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step2"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step3"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step4"><i class="fal fa-circle"></i></a></li>
                </ul>
            </div>
        </section>

        <section class="page container" id="step3">
            <!-- Step 3 -->
            <h4>Juste discuter</h4>
            <h2>Dites-nous en plus à propos de <b>votre projet</b> :</h2>

            <textarea name="message" id="message" placeholder="Votre message" required>{{old('message')}}</textarea>
            <span class="focus-input"></span>

            <small id="message-error" class="d-none">Merci de renseigner la raison de votre prise de contact.</small>

            <div class="navigation">
                <a class="btn btn-fa-white" href="#step2"><i class="fas fa-arrow-left"></i></a>
                <a class="btn btn-fa-white" href="#step4"><i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="slider">
                <h4>03/04</h4>
                <ul>
                    <li><a href="#step1"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step2"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step3"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step4"><i class="fal fa-circle"></i></a></li>
                </ul>
                
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

            <div class="navigation">
                <a class="btn btn-fa-white" href="#step3"><i class="fas fa-arrow-left"></i></a>
                <input class="btn btn-fa-white" type="submit" value="Envoyer">
            </div>

            <div class="slider">
                <h4 class="text-white">04/04</h4>
                <ul>
                    <li><a href="#step1"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step2"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step3"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step4"><i class="fas fa-circle"></i></a></li>
                </ul>
            </div>
        </section>
        <div id="curve-top">
            <svg xmlns="http://www.w3.org/2000/svg" width="100vw" height="auto" viewBox="0 0 1920 360"
                preserveAspectRatio="none">
                <path fill="#C72400" d="M0,360C624,0,1920,0,1920,0H0Z"  />
            </svg>
        </div>
        
        <div id="curve-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" width="100vw" height="auto" viewBox="0 0 1920 360" preserveAspectRatio="none">
                <path fill="#C72400" d="M1920,0C1296,360,0,360,0,360H1920Z"/>
            </svg>
        </div>

        <div id="return-button">
            <a href="{{route('contact.intro')}}"><i class="far fa-times"></i></a>
        </div>
    </main>
</form>

<script src="{{asset('js/contact-form-just-chat.js')}}"></script>
@endsection