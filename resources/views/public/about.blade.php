@extends('layouts.main_layout')

@section('title')
À propos de l'agence |
@endsection

@section('meta-description')
Redox Digital est une entreprise active dans la communication digitale, proposant des services dans les domaines du développement web et de la création de contenus vidéo, photographique et graphique.
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
                    <p>Nous concevons votre communication digitale de A à Z.</p>
                </div>
                <div class="col-md-6 col-12">
                    <h3 class="all-caps"><span class="number">03</span> - Agilité</h3>
                    <p>Pour de grands projets comme de plus modestes, notre équipe s'adapte à vos besoins.</p>
                </div>
                <div class="col-md-6 col-12">
                    <h3 class="all-caps"><span class="number">04</span> - 100% digitaux</h3>
                    <p>Nous sommes des <i lang="en">pure players</i> et pouvons intervenir tout au long de la conception d'un produit digital.</p>
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
                <div class="col-md-8 col-12 my-5">
                    <p>Les 2 cofondateurs, Mikael Ruffieux & Etienne Wildi se sont rencontrés pendant leurs études d’Ingénieur des Médias à la <a href="https://heig-vd.ch" target="_blank" title="Haute École d'Ingénierie et de Gestion du Canton de Vaud" rel="noopener">HEIG-VD</a>.</p>

                    <p>Les deux étudiants, passionnés par le domaine du digital et travaillant comme indépendant depuis plusieurs années, ont décidé de s’associer et de créer l’entreprise Redox Digital.</p>

                    <p>Plus fort à deux, cette association leur permet de travailler sur de plus gros projets digitaux et de se professionnaliser dans ce domaine.</p>

                </div>
                <div class="col-md-6">
                    <img src="{{asset('storage/about/redox-digital-fondateur-etienne.jpg')}}" alt="L'équipe Redox Digital : Etienne Wildi">
                    <h3 class="name red-dot">Etienne Wildi</h3>
                    <p>Cofondateur - Digital Project Manager<!--<br><a href="mailto:etienne@redoxdigital.ch"><span id="mail-etienne"></span></a>--></p>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('storage/about/redox-digital-fondateur-mikael.jpg')}}" alt="L'équipe Redox Digital : Mikaël Ruffieux">
                    <h3 class="name red-dot">Mikaël Ruffieux</h3>
                    <p>Cofondateur - Ingénieur des Médias<!--<br/>
                    <a href="mailto:mikael@redoxdigital.ch"><span id="mail-mikael"></span></a>--></p>

                    <!--<a href="{{route('cv.mikael')}}" class="btn btn-outline-red">CV</a>-->
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
                @foreach ($clients->shuffle() as $client)
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

    @include('layouts.cta-section')


</div>
@endsection
