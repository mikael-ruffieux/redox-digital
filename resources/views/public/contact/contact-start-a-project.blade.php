@extends('template')

@section('title')
Nous contacter pour commencer un projet
@endsection

@section('content')
<main id="contact">
    <section class="page container" id="step1">
        <!-- Step 1 -->
        <h2>Quel est <b>votre nom</b> ?</h2>
        <a class="btn btn-white" href="{{url()->previous()}}"><</a>
        <a class="btn btn-white" href="#next">></a>
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
@endsection