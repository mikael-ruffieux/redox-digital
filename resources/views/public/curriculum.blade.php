@extends('layouts.cv_layout')

@section('title')
Mikaël Ruffieux | 
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
<section class="fullpage-section" id="intro">
    <div class="container" id="">
        <div class="row">
            <div class="col-lg-8 col-12">
                <h1 class="red-dot">Mikaël Ruffieux</h1>
                <h3 class="color-red all-caps">Développeur web & vidéaste</h3>
                <span class="dash-black"></span>
                <p>Bienvenue sur mon curriculum vitæ !</p>
                <p>Vous trouverez sur cette page mes <b>informations personnelles</b>, un aperçu de mon <b>parcours étudiant</b> et <b>professionnel</b>, ainsi que mes <b>réalisations</b> dans le domaine du digital.</p>
                <p>Bonne lecture, et n’hésitez pas à me contacter en cas de question !</p>

                <a href="#about-me" id="bouncing-arrow" style="z-index:100;"><i class="fal fa-arrow-down"></i></a>
            </div>

            <div class="col-lg-4 col-12">
                <img src="" alt="">
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#2b2323'])

<section id="about-me" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">À mon propos</h3>
                <h2 class="red-dot">Informations personnelles</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <i class="fas fa-birthday-cake"></i>05.10.1996 (25 ans)<br/>
                <i class="fas fa-map-marker-alt"></i>
                Rte de Duvillard 23<br/>
                1663 Epagny
            </div>
            <div class="col-lg-6 col-12">
                <i class="far fa-envelope"></i>ruffieux.mikael@gmail.com
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-small-top-right', ['color' => '#2b2323'])

<section id="competences">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Ce que je sais faire</h3>
                <h2 class="red-dot">Compétences</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12">
                <h3 class="all-caps"><span class="number">01</span> - Langues</h3>
                <p>Nous créons des produits digitaux qui vous démarquent.</p>
            </div>
            <div class="col-md-6 col-12">
                <h3 class="all-caps"><span class="number">02</span> - Bureautique</h3>
                <p>Nous créons des produits digitaux qui vous démarquent.</p>
            </div>
            <div class="col-md-6 col-12">
                <h3 class="all-caps"><span class="number">03</span> - Graphisme</h3>
                <p>Nous créons des produits digitaux qui vous démarquent.</p>
            </div>
            <div class="col-md-6 col-12">
                <h3 class="all-caps"><span class="number">04</span> - Informatique</h3>
                <p>Nous créons des produits digitaux qui vous démarquent.</p>
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-small-bottom-right', ['color' => '#2b2323'])

<section id="studies" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Où est-ce que j'ai appris tout ça ?</h3>
                <h2 class="red-dot">Formations</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-12">
                <img src="" alt="">
                <p>2019 - 2022</p>
            </div>
            <div class="col-lg-9 col-12">
                <h3>HEIG-VD <small>- Yverdon-les-Bains (VD)</small></h3>
                <h4>Bachelor of Science</h4>
                <p>Filière Ingénierie des Médias, à la Haute École d’Ingénierie et de Gestion du Canton de Vaud.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-12">
                <img src="" alt="">
                <p>2012 - 2016</p>
            </div>
            <div class="col-lg-9 col-12">
                <h3>Collège du Sud <small>- Bulle (FR)</small></h3>
                <h4>Maturité gymnasiale</h4>
                <p>Formation bilingue (F/D), Mathématiques renforcés, Option spécifique : Biologie / Chimie</p>
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-small-top-right', ['color' => '#2b2323'])

<section id="work">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Mon monde du travail</h3>
                <h2 class="red-dot">Expériences professionnelles</h2>
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#2b2323'])

<section id="references" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Ils m'ont fait confiance</h3>
                <h2 class="red-dot">Références</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <h3 class="name red-dot">Salvatore Pizza</h3>
                <p>
                    Cinéma “Le Prado”, gérant
                </p>
            </div>

            <div class="col-lg-4 col-12">
                <h3 class="name red-dot">Alex Herren</h3>
                <p>
                    Kesako Sàrl, président<br/>
                    <a href="mailto:alex@kesako.net">alex@kesako.net</a>
                </p>
            </div>

            <div class="col-lg-4 col-12">
                <h3 class="name red-dot">Etienne Wildi</h3>
                <p>
                    Redox Digital, associé</br>
                    <a href="mailto:etienne@redoxdigital.ch">etienne@redoxdigital.ch</a>
                </p>

                <p><i>(il vous assurera que je travaille bien)</i></p>
            </div>

            <div class="col-12 color-white"><small><i>Si vous souhaitez contacter ces personnes par téléphone, je vous transmets volontiers leurs contacts, à votre demande.</i></small></div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-small-top-right', ['color' => '#2b2323'])

<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Ce que j'ai fait</h3>
                <h2 class="red-dot">Portfolio</h2>
            </div>
        </div>

        <!-- Exemple -->
        <div class="row project">
            <div class="col-6">
                <h5>Cremo</h5>
                <h3>Vidéo d'animation pour le raclette MAZOT</h3>

                <div class="categories">
                    <a href="#" class="category">Vidéo</a>
                    <a href="#" class="category">Motion-design</a>
                </div>
            </div>
            <div class="col-4">
                <img src="" alt="">
            </div>
        </div>

        <!-- .exemple -->
        {{--
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
                <a class="btn btn-outline-dark" href="#">En savoir plus</a>
            </div>
            <div class="col-4">
                <img src="{{asset($project->images->first()->url)}}" alt="{{$project->title}}">
            </div>
        </div>
        @endforeach
        --}}

        {{--
        <div class="row">
            <div class="col-lg-6 col-12">
                <a href="{{route('portfolio')}}" class="btn btn-outline-red btn-100">Parcourez notre portfolio</a>
            </div>
        </div>
        --}}

    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#2b2323'])

<section id="hobbies" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Ce que j'aime faire de mon temps libre</h3>
                <h2 class="red-dot">Mes intérêts</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <i class="fas fa-bike"></i><br/>
                <p>VTT</p>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <i class="fas fa-mountain"></i><br/>
                <p>Randonnée</p>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <i class="fas fa-camera"></i><br/>
                <p>Photographie</p>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <i class="fas fa-music"></i><br/>
                <p>Musique</p>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <i class="fas fa-movie"></i><br/>
                <p>Cinéma</p>
            </div>
        </div>
    </div>
</section>

<section id="cta">
    @include('layouts.curves.curve-small-top-right', ['color' => '#2b2323'])
    <div class="cta-content container">
        <h2>Vous souhaitez me contacter ?</h2>
        <h3>Ne soyez pas timide</h3>
        <a href="{{route('contact.intro')}}" class="btn btn-outline-white"><i class="fas fa-arrow-right"></i></a>
    </div>
</section>
</div>
@endsection


