@extends('layouts.main_layout')

@section("title")
Nous contacter |
@endsection


@section("content")
<section class="hero-section container bg-image-contact" id="portfolio-header">
    <div class="row">
        <div class="col-12">
            <h3 class="all-caps color-red">Des questions ? Un projet en tête ?</h3>
            <h1 class="red-dot">Contactez-nous</h1>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#ffffff', 'class' => 'enters-from-right'])

<section class="contact-page bg-white pt-5" id="contact-desc">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-12">
                <h2 class="mt-0">Travaillons ensemble</h2>

                <p>Parlez-nous de vos besoins, nous serions ravis de collaborer avec vous. Nous sommes en permanence à la recherche de nouvelles expériences.</p>

                <div class="buttons d-none d-md-block">
                    <a class="btn btn-primary" href="{{route('services', ['web-digital'])}}">Découvrez nos services</a>
                    <a class="btn btn-primary ml-3" href="{{route('contact.intro')}}">Nous contacter</a>
                </div>
            </div>


            <div class="col-md-1 col-0"><!-- spacer --></div>

            <div class="col-md-4 col-12">
                <h3 class="color-red">Adresse</h3>
                <p>Redox s’installera bientôt dans des bureaux à Neuchâtel et se réjouit de vous y accueillir.</p>

                <h3 class="color-red">Siège</h3>
                <p>Rte de Duvillard 23, 1663 Epagny</p>

                <h3 class="color-red">E-mail</h3>
                <p><a href="mailto:info@redoxdigital.ch"><span id="mail-info"></span></a></p>
            </div>
        </div>
        <div class="row">
            <div class="col" id="map-container">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
<script>
    let darkTheme = false;

    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        darkTheme = true; 
    }
    
    let map = L.map('map', {zoomControl: false}).setView([46.8123, 6.9832], 10);

    let redoxIcon = L.icon({
        iconUrl: 'https://redoxdigital.ch/storage/assets/img/layout/favicon.svg',
        iconSize:     [40, 40], // size of the icon
        iconAnchor:   [20, 20], // point of the icon which will correspond to marker's location
        popupAnchor:  [0, -20] // point from which the popup should open relative to the iconAnchor
    });

    // Markers
    let markerFR = L.marker([46.58967, 7.08284], {icon: redoxIcon}).addTo(map);
    markerFR.bindPopup("<b>Notre siège: </b><br>Rte de Duvillard 23<br>1663 Epagny").openPopup();

    let markerNE = L.marker([46.98326, 6.90264], {icon: redoxIcon}).addTo(map);
    markerNE.bindPopup("<b>Notre agence: </b><br>Rue des Usines 25<br>2034 Serrière").openPopup();


    let tileURL = darkTheme ? 'https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png' : 'https://tiles.stadiamaps.com/tiles/alidade_smooth/{z}/{x}/{y}{r}.png';

    L.tileLayer(tileURL, {
        maxZoom: 20,
        attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
    }).addTo(map);
</script>
@endsection