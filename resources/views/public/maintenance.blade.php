@extends('layouts.main_layout')

@section('title')
Bienvenue | 
@endsection

@section("content")
<section class="maintenance-page" id="maintenance-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>comme on dit ...</h2>
                <h1><span class="red-dot">«Les cordonniers sont les plus mal chaussés</span>»</h1>
            </div>
        </div>
    </div>
</section>

<!--
<div class="curve curve-medium-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="100vw" height="auto" viewBox="0 0 1920 360" preserveAspectRatio="none">
        <path fill="#fff" d="M1920,0C1296,360,0,360,0,360H1920Z"/>
    </svg>
</div>-->
@include('layouts.curves.curve-medium-top-right-white')

<section class="bg-white maintenance-page" id="maintenance-desc">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <h3 class="no-cap">Notre site est actuellement en construction.</h3>

                <p>Votre projet passe en priorité sur la création de notre site internet.</p>
                <p>Vous avez un projet en tête&nbsp;? Ou vous souhaitez en découvrir plus sur notre entreprise&nbsp;?</p>
                <p>N’hésitez pas à nous contacter à notre adresse e-mail, ou via notre formulaire de contact.</p>
                <p>Nous sommes en permanence à la recherche de nouveaux défis&nbsp;!</p>

                <a class="btn btn-outline-black" href="#">Découvrez nos services</a>
                <a class="btn btn-outline-black" href="#">Nous contacter</a>
            </div>

            <div class="col-1"><!-- spacer --></div>

            <div class="col-4">
                <h3>Adresse</h3>
                <p>Rte de Duvillard 23, 1663 Epagny</p>

                <h3>E-mail</h3>
                <p>info@redoxdigital.ch</p>
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right-white')
    
<section id="map-container">    
    <div id="map"></div>
</section>

<script src="{{asset('js/map.js')}}"></script>
@endsection