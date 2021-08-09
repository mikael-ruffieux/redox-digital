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
                <h1 id="maintenance-title"><span class="red-dot">«Les cordonniers sont les plus mal chaussés</span>»</h1>
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#fafafa', 'class' => 'enters-from-right'])

<section class="maintenance-page" id="maintenance-desc">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-12">
                <h3 class="mt-0">Notre site est actuellement en construction.</h3>

                <p>Votre projet passe en priorité sur la création de notre site internet.</p>
                <p>Vous avez un projet en tête&nbsp;? Ou vous souhaitez en découvrir plus sur notre entreprise&nbsp;?</p>
                <p>N’hésitez pas à nous contacter à notre adresse e-mail, ou via notre formulaire de contact, nous sommes en permanence à la recherche de nouveaux défis&nbsp;!</p>
                <p><b>- L'équipe Redox Digital</b></p>

                <div class="buttons d-none d-md-block">
                    {{--<a class="btn btn-outline-black" href="{{route('services', ['web-digital'])}}">Découvrez nos services</a>--}}
                    <a class="btn btn-outline-black" href="{{route('contact.intro')}}">Nous contacter</a>
                </div>
            </div>

            <div class="col-md-1 col-0"><!-- spacer --></div>

            <div class="col-md-4 col-12">
                <h3>Adresse</h3>
                <p>Rte de Duvillard 23, 1663 Epagny</p>

                <h3>E-mail</h3>
                <p><a href="mailto:info@redoxdigital.ch">info@redoxdigital.ch</a></p>
            </div>

            <div class="buttons d-block d-md-none col-12">
                <a class="btn btn-outline-black" href="{{route('services', ['web-digital'])}}">Découvrez nos services</a>
                <a class="btn btn-outline-black" href="{{route('contact.intro')}}">Nous contacter</a>
            </div>
        </div>
    </div>
</section>

<section id="cta">
    @include('layouts.curves.curve-small-top-right', ['color' => '#fafafa'])
    <div class="cta-content container">
        <h2>Parlons maintenant de votre projet</h2>
        <h3>Ne soyez pas timide</h3>
        <a href="{{route('contact.intro')}}" class="btn btn-outline-white"><i class="fas fa-arrow-right"></i></a>
    </div>

    @include('layouts.curves.curve-small-bottom-left', ['color' => '#2b2323'])
</section>
@endsection