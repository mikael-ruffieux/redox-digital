@extends('layouts.main_layout')

@section('title')
Bienvenue | 
@endsection

@section("content")
<div id="home-page">
<section class="bg-white fullpage-section" id="home-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="color-red">Agence digitale</h1>
                <h2 class="color-red"><span class="black-dot">créatrice d’expériences web & vidéo</span></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-12">
                <span class="dash-black"></span>
                <p>Chez Redox Digital, nous concevons votre communication digitale de A à Z en créant des produits digitaux qui vous démarquent.</p>
                <a href="{{route('about')}}" class="btn btn-outline-black btn-100">En savoir plus</a>
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#2b2323'])

<section id="home-services" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <h3><span class="number">01</span> - Nos services</h3>
                <p>
                    La différenciation entre le contenus et le contenant est pour nous très importante. C’est pourquoi nous avons séparé nous services en deux partie. Les services de “Web digital” ont pour but de mettre en avant votre contenu et les services de “Création de contenus digitaux” ont pour but de vous créer un contenu de qualité.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="home-services-cta" class="bg-dark">
    <div class="content-container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <a href="{{route('services', ['web-digital'])}}" class="btn btn-home-services"><span class="red-dot">Web digital</span></a>
            </div>
            <div class="col-12 col-lg-6">
                <a href="{{route('services', ['creation-de-contenus-digitaux'])}}" class="btn btn-home-services"><span class="red-dot">Création de contenus digitaux</span></a>
            </div>
        </div>
    </div>
    <div class="iframe-container">
        <iframe title="vimeo-player" src="https://player.vimeo.com/video/371218844?autoplay=1&amp;background=1&amp;muted=1&amp;controles=0&amp;loop=1&amp;title=0&amp;transparent=1" frameborder="0" allowfullscreen></iframe>
    </div>
</section>

@include('layouts.curves.curve-small-top-right', ['color' => '#2b2323'])

<section id="home-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <h3><span class="number">02</span> - L'agence</h3>
                <p></p>
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#2b2323'])

<section id="home-portfolio" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <h3><span class="number">03</span> - Nos projets</h3>
                <p></p>
            </div>
        </div>
        @foreach ($projects as $project)
        <div class="row project">
            <div class="col-6">
                <h5>{{$project->client->name}}</h5>
                <h3>{{$project->title}}</h3>

                <div class="categories">
                    @foreach ($project->services as $service)
                    <a href="#" class="category">{{$service->title}}</a>
                    @endforeach
                </div>
                <a class="btn btn-outline-white" href="#">En savoir plus</a>
            </div>
            <div class="col-4">
                <img src="{{asset($project->images->first()->url)}}" alt="{{$project->title}}">
            </div>
        </div>
        @endforeach

    </div>
</section>

@include('layouts.curves.curve-small-top-right', ['color' => '#2b2323'])

<section class="cta">

</section>
</div>

@endsection


