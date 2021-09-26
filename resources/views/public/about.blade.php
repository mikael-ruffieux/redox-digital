@extends('layouts.main_layout')

@section('title')
À propos de l'agence | 
@endsection

@section("content")
<div id="about-page">
    <section id="about-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="all-caps color-red">Une agence</h3>
                    <h1 class="red-dot">Ancrée dans le digital</h1>
                </div>
            </div>
    
            <div class="row">
                <div class="col-lg-8 col-12">
                    <p>Redox Digital est une entreprise active dans la communication digitale, proposant des services dans les domaines du développement web et de la création de contenus vidéo, photographique et graphique.</p> 
                    <p>L’agence exerce son activité dans le canton de <b>Fribourg</b> et de <b>Neuchâtel</b>.</p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.curves.curve-medium-bottom-right', ['color' => '#2b2323', 'class' => 'enters-from-right'])

    <section class="bg-dark" id="about-values">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="all-caps color-red">Ce qui nous tient à cœur</h3>
                    <h2 class="red-dot">Nos valeurs</h2>
                </div>
            </div>
            <div class="row" id="about-values-list">
                <div class="col-md-6 col-12">
                    <h3 class="all-caps"><span class="number">01</span> - Communication dynamique</h3>
                    <p>Nous créons des produits digitaux qui vous démarquent.</p>
                </div>
                <div class="col-md-6 col-12">
                    <h3 class="all-caps"><span class="number">02</span> - Approche omnicanale</h3>
                    <p>Nous créons des produits digitaux qui vous démarquent.</p>
                </div>
                <div class="col-md-6 col-12">
                    <h3 class="all-caps"><span class="number">03</span> - Prix avantageux</h3>
                    <p>Nous créons des produits digitaux qui vous démarquent.</p>
                </div>
                <div class="col-md-6 col-12">
                    <h3 class="all-caps"><span class="number">04</span> - 100% digital</h3>
                    <p>Nous créons des produits digitaux qui vous démarquent.</p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.curves.curve-small-top-right', ['color' => '#2b2323'])

    <section id="about-team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="all-caps color-red">Une équipe</h3>
                    <h2 class="red-dot">Aux compétences complémentaires</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('storage/about/etienne.jpg')}}" alt="Etienne Wildi">
                    <h3 class="name red-dot">Etienne Wildi</h3>
                    <p>Photographe, vidéaste & graphiste<br><a href="mailto:etienne@redoxdigital.ch">etienne@redoxdigital.ch</a></p>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('storage/about/mikael.jpg')}}" alt="Mikaël Ruffieux">
                    <h3 class="name red-dot">Mikaël Ruffieux</h3>
                    <!--<p>Ingénieur des médias & développeur web<br/>-->
                    <p>Développeur web & vidéaste<br/>
                    <a href="mailto:mikael@redoxdigital.ch">mikael@redoxdigital.ch</a></p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.curves.curve-small-bottom-right', ['color' => '#2b2323'])

    <section class="bg-dark" id="about-clients">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="all-caps color-red">Ils nous font confiance</h3>
                    <h2 class="red-dot">Nos clients</h2>
                </div>
            </div>

            <div class="row">
                @foreach ($clients as $client)
                    @if ($client->public)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 client">
                            <a href="{{$client->link}}" target="_blank" rel="noopener noreferrer">
                                <img src="{{asset($client->logo)}}" alt="{{$client->name}}">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

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
@endsection
