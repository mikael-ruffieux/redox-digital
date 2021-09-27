@extends('layouts.main_layout')

@section('title')
Bienvenue | 
@endsection

@section("content")
<div id="home-page">

<div id="particles-cache"></div>
<div id="particles-js"></div>

{{--
<div id="animated-bg">
    <img id="layer1" src="{{asset('storage/layout/layer1.svg') }}" alt="background">
    <img id="layer2" src="{{asset('storage/layout/layer2.svg') }}" alt="background">
</div>
--}}
<section class="fullpage-section" id="home-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="color-red">Agence digitale</h1>
                <h2 class="color-red"><span class="black-dot">créatrice d’expériences <span id="typewriter"></span></span></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-12">
                <span class="dash-black"></span>
                <p>Chez Redox Digital, nous concevons votre communication digitale de A à Z en créant des produits digitaux qui vous démarquent.</p>
            </div>
            <div class="col-lg-6 col-12">
                <a href="{{route('about')}}" class="btn btn-outline-black btn-100">En savoir plus</a>
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#2b2323'])

<section id="home-services" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Ce que nous faisons</h3>
                <h2 class="red-dot">Nos services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-12">
                <p>La différenciation entre le <b>contenu</b> et le <b>contenant</b>, le <b>fond</b> et la <b>forme</b>, est pour nous très importante. C’est pourquoi nous avons séparé nous services en deux partie.</p>
                
                <p>Les services de <b>Web digital</b> ont pour but de mettre en avant votre contenu et les services de <b>Création de contenus digitaux</b> ont pour but de vous créer un contenu de qualité.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 mt-5">
                <a href="{{route('services', ['web-digital'])}}" class="btn btn-home-services"><span class="red-dot">Web digital</span></a>
            </div>
            <div class="col-12 col-lg-6 mt-5">
                <a href="{{route('services', ['creation-de-contenus-digitaux'])}}" class="btn btn-home-services"><span class="red-dot">Création de contenus digitaux</span></a>
            </div>
        </div>
    </div>
</section>

{{--
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
--}}

@include('layouts.curves.curve-small-top-right', ['color' => '#2b2323'])

<section id="home-portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Ce que nous avons fait</h3>
                <h2 class="red-dot">Nos réalisations</h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <i>Notre portfolio sera disponible prochainement.</i>
            </div>
        </div>
        {{--@foreach ($projects as $project)
        <div class="row project">
            <div class="col-6">
                <h5>{{$project->client->name}}</h5>
                <h3>{{$project->title}}</h3>

                <div class="categories">
                    @foreach ($project->services as $service)
                    <a href="#" class="category">{{$service->title}}</a>
                    @endforeach
                </div>
                <a class="btn btn-outline-dark" href="#">En savoir plus</a>
            </div>
            <div class="col-4">
                <img src="{{asset($project->images->first()->url)}}" alt="{{$project->title}}">
            </div>
        </div>
        @endforeach

        <div class="row">
            <div class="col-lg-6 col-12">
                <a href="{{route('portfolio')}}" class="btn btn-outline-red btn-100">Parcourez notre portfolio</a>
            </div>
        </div>--}}

    </div>
</section>

@include('layouts.curves.curve-small-bottom-right', ['color' => '#2b2323'])

<section id="home-about" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Qui sommes-nous ?</h3>
                <h2 class="red-dot">L'agence</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-12">   
                <p>Redox Digital est une agence dynamique qui regroupe deux jeunes entrepreneurs aux compétences variées et complémentaires.</p>

                <p>Issue du terroir neuchâtelois et fribourgeois, mais ayant grandi dans un monde toujours plus digital, l'équipe de Redox Digital se positionne dans une communication traditionnelle, mais qui sait s'affranchir des codes pour créer les siens, tout en profitant des dernières nouveautés du monde numérique.</p>             
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-12 mt-5">
                <a href="{{route('about')}}" class="btn btn-outline-white btn-100">Découvrez notre équipe</a>
            </div>
        </div>

        <div class="home-masonry">
            <div class="row two-pics">
                <div class="col-7 mt-5">
                    <img src="{{asset('storage/home/home-1.jpg')}}" alt="L'équipe de Redox Digital">
                </div>
                <div class="col-5 mt-5">
                    <img src="{{asset('storage/home/home-2.jpg')}}" alt="L'équipe de Redox Digital">
                </div>
            </div>

            <div class="row one-pic">
                <div class="col-12 mt-5">
                    <img src="{{asset('storage/home/home-3.jpg')}}" alt="L'équipe de Redox Digital">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- @include('layouts.curves.curve-small-top-right', ['color' => '#2b2323']) --}}

<section id="cta">
    @include('layouts.curves.curve-small-top-right', ['color' => '#2b2323'])
    <div class="cta-content container">
        <h2>Parlons maintenant de votre projet</h2>
        <h3>Ne soyez pas timide</h3>
        <a href="{{route('contact.intro')}}" class="btn btn-outline-white"><i class="fas fa-arrow-right"></i></a>
    </div>

    @include('layouts.curves.curve-small-bottom-left', ['color' => '#2b2323'])
</section>
</div>

<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script type="text/javascript">
    
        new Typewriter('#typewriter', {
        strings: ['web', 'vidéo'],
        autoStart: true,
        loop: true,
        });
    
</script>
@endsection


