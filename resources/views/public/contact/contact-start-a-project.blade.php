@extends('template')

@section('title')
Nous contacter pour commencer un projet
@endsection

@section('content')
<form id="contact-form" action="{{route('contact.send-project')}}" method="post">
    <main id="contact">
        <section class="page container" id="step1">
            <!-- Step 1 -->
            <h4>Commencer un projet</h4>
            <h2>Quel est <b>votre nom</b> ?</h2>

            <input type="text" name="name" id="name" placeholder="Prénom Nom" value="{{old('name')}}" required>
            <span class="focus-input"></span>

            <small id="name-error" class="d-none">Merci de renseigner votre nom.</small>

            <div class="navigation mt-3">
                <a class="btn btn-white" href="{{url()->previous()}}"><i class="fas fa-arrow-left"></i></a>
                <a class="btn btn-white" href="#step2"><i class="fas fa-arrow-right"></i></a>
                <small>ou appuyez sur "Enter".</small>
            </div>

            <div class="slider mt-3">
                <ul>
                    <li><a href="#step1"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step2"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step3"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step4"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step5"><i class="fas fa-circle"></i></a></li>
                    <li><a href="#step6"><i class="fas fa-circle"></i></a></li>
                </ul>
                <h4>01/06</h4>
            </div>
        </section>

        <section class="page container" id="step2">
            <!-- Step 2 -->
            <h2><b id="name">Prénom</b>, quel est <b>votre adresse e-mail</b> ?</h2>
            <a class="btn btn-white" href="#prev"><</a>
            <a class="btn btn-white" href="#next">></a>
        </section>

        <section class="page container" id="step3">
            <!-- Step 3 -->
            <h2>Quel <b>type de projet</b> souhaitez-vous entreprendre ?</h2>
            <a class="btn btn-white" href="#prev"><</a>
            <a class="btn btn-white" href="#next">></a>
        </section>

        <section class="page container" id="step4">
            <!-- Step 4 -->
            <h2>Quel est <b>votre budget</b> pour ce projet ?</h2>
            <a class="btn btn-white" href="#prev"><</a>
            <a class="btn btn-white" href="#next">></a>
        </section>

        <section class="page container" id="step5">
            <!-- Step 5 -->
            <h2>Dites-nous en plus à propos de <b>votre projet</b> :</h2>
            <a class="btn btn-white" href="#prev"><</a>
            <a class="btn btn-white" href="#next">></a>
        </section>

        <section class="page container" id="step6">
            <!-- Step 6 -->
            <h2>Résumé de <b>votre demande</b> :</h2>
            <a class="btn btn-white" href="#prev"><</a>
            <a class="btn btn-white" href="#next">Envoyer</a>
        </section>
    </main>
</form>
<script src="{{asset('js/contact-form.js')}}"></script>
@endsection