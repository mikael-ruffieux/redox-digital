@extends('template')

@section('title')
Nous contacter pour commencer un projet
@endsection

@section('content')
<form id="contact-form" action="{{route('contact.send-project')}}" method="post">
    <main id="contact">
        <section class="page container" id="step1">
            <!-- Step 1 -->
            <h4>Débuter un projet</h4>
            <h2>Quel est <b>votre nom</b> ?</h2>

            <input type="text" name="name" id="name" placeholder="Prénom Nom" value="{{old('name')}}" required>
            <span class="focus-input"></span>

            <small id="name-error" class="d-none">Merci de renseigner votre nom.</small>

            <div class="navigation ">
                <a class="btn btn-fa-white" href="{{url()->previous()}}"><i class="fas fa-arrow-left"></i></a>
                <a class="btn btn-fa-white" href="#step2"><i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="slider">
                <h4>01/06</h4>
                <ul>
                    <li><a href="#step1"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step2"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step3"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step4"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step5"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step6"><i class="fal fa-circle"></i></a></li>
                </ul>
            </div>
        </section>

        <section class="page container" id="step2">
            <!-- Step 2 -->
            <h4>Débuter un projet</h4>
            <h2><b id="greetings">Prénom</b>, quel est <b>votre adresse e-mail</b> ?</h2>

            <input type="mail" name="mail" id="mail" placeholder="Votre e-mail" value="{{old('mail')}}" required>
            <span class="focus-input"></span>

            <small id="mail-error" class="d-none">Merci de renseigner votre adresse e-mail.</small>

            <div class="navigation ">
                <a class="btn btn-fa-white" href="#step1"><i class="fas fa-arrow-left"></i></a>
                <a class="btn btn-fa-white" href="#step3"><i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="slider">
                <h4>02/06</h4>
                <ul>
                    <li><a href="#step1"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step2"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step3"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step4"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step5"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step6"><i class="fal fa-circle"></i></a></li>
                </ul>
            </div>
        </section>

        <section class="page container" id="step3">
            <!-- Step 3 -->
            <h4>Débuter un projet</h4>
            <h2>Quel <b>type de projet</b> souhaitez-vous entreprendre ?</h2>

            <div class="row">
                <div class="col-3 checkbox">
                    <input type="radio" name="project_type" id="project_web" value="project_web">
                    <label for="project_web">Web</label>
                </div>
                <div class="col-3 checkbox">
                    <input type="radio" name="project_type" id="project_video" value="project_video">
                    <label for="project_video">Vidéo</label>
                </div>
                <div class="col-3 checkbox">
                    <input type="radio" name="project_type" id="project_marketing" value="project_marketing">
                    <label for="project_marketing">Marketing</label>
                </div>
                <div class="col-3 checkbox">
                    <input type="radio" name="project_type" id="project_no-idea" value="project_no-idea">
                    <label for="project_no-idea">Je ne sais pas encore trop ...</label>
                </div>
            </div>

            <div class="navigation ">
                <a class="btn btn-fa-white" href="#step2"><i class="fas fa-arrow-left"></i></a>
                <a class="btn btn-fa-white" href="#step4"><i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="slider">
                <h4>03/06</h4>
                <ul>
                    <li><a href="#step1"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step2"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step3"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step4"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step5"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step6"><i class="fal fa-circle"></i></a></li>
                </ul>
            </div>
        </section>

        <section class="page container" id="step4">
            <!-- Step 4 -->
            <h4>Débuter un projet</h4>
            <h2>Quel est <b>votre budget</b> pour ce projet ?</h2>
            <div class="row">
                <div class="col-3 checkbox">
                    <input type="radio" name="budget" id="budget1" value="1">
                    <label for="budget1">500 - 1'000 CHF</label>
                </div>
                <div class="col-3 checkbox">
                    <input type="radio" name="budget" id="budget2" value="2">
                    <label for="budget2">1'000 - 2'000 CHF</label>
                </div>
                <div class="col-3 checkbox">
                    <input type="radio" name="budget" id="budget3" value="3">
                    <label for="budget3">2'000 - 5'000 CHF</label>
                </div>
                <div class="col-3 checkbox">
                    <input type="radio" name="budget" id="budget4" value="4">
                    <label for="budget4">+ 5'000 CHF</label>
                </div>
            </div>


            <div class="navigation ">
                <a class="btn btn-fa-white" href="#step3"><i class="fas fa-arrow-left"></i></a>
                <a class="btn btn-fa-white" href="#step5"><i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="slider">
                <h4>04/06</h4>
                <ul>
                    <li><a href="#step1"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step2"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step3"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step4"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step5"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step6"><i class="fal fa-circle"></i></a></li>
                </ul>
            </div>
        </section>

        <section class="page container" id="step5">
            <!-- Step 5 -->
            <h4>Débuter un projet</h4>
            <h2>Dites-nous en plus à propos de <b>votre projet</b> :</h2>

            <textarea name="message" id="message" placeholder="Votre message" required>{{old('message')}}</textarea>
            <span class="focus-input"></span>

            <small id="message-error" class="d-none">Merci de renseigner la raison de votre prise de contact.</small>

            <div class="navigation ">
                <a class="btn btn-fa-white" href="#step4"><i class="fas fa-arrow-left"></i></a>
                <a class="btn btn-fa-white" href="#step6"><i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="slider">
                <h4>05/06</h4>
                <ul>
                    <li><a href="#step1"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step2"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step3"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step4"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step5"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step6"><i class="fal fa-circle"></i></a></li>
                </ul>
            </div>
        </section>

        <section class="page container" id="step6">
            <!-- Step 6 -->
            <h2>Résumé de <b>votre demande</b> :</h2>
            <div class="navigation ">
                <a class="btn btn-fa-white" href="#step5"><i class="fas fa-arrow-left"></i></a>
                <input class="btn btn-fa-white" type="submit" value="Envoyer">
            </div>

                        <div class="slider">
                <h4>06/06</h4>
                <ul>
                    <li><a href="#step1"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step2"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step3"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step4"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step5"><i class="fal fa-circle"></i></a></li>
                    <li><a href="#step6"><i class="fas fa-circle"></i></a></li>
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
<script src="{{asset('js/contact-form-start-a-project.js')}}"></script>
@endsection