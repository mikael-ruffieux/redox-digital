@extends('layouts.cv_layout')

@section('title')
Portfolio |
@endsection

@section("content")
<div id="particles-cache"></div>
<div id="particles-js"></div>

<section class="hero-section container" id="portfolio-header">
    <div class="row">
        <div class="col-12">
            <h3 class="all-caps color-red">Découvrez mon portfolio</h3>
            <h1 class="red-dot">Mes réalisations</h1>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#ffffff'])

<section id="portfolio" class="portfolio bg-white">
    <div class="container">
        @foreach ($projects as $project)
        <div class="row project">
            <div class="col-lg-7 col-md-6 col-12">
                <h5><a href="{{$project->client->link}}">{{$project->client->name}}</a></h5>
                <h3>{{$project->title}}</h3>

                <div class="categories">
                    <p class="category">{{$project->categories}}</p>
                </div>

                <p>{!! $project->desc !!}</p>
                @if (!empty($project->project_url))
                <a class="btn btn-outline-black" href="{{$project->project_url}}" target="_blank">Découvrir le projet entier</a>
                @endif
            </div>
            <div class="col-lg-5 col-md-6 col-12">
                @if (file_exists(public_path($project->image)))
                <img src="{{asset($project->image)}}" alt="{{$project->title}}">
                @endif
            </div>
        </div>
        @endforeach

    </div>
</section>
<section id="cta">
    @include('layouts.curves.curve-small-top-right', ['color' => isset($curve_color) ? $curve_color : "#ffffff"])
    <div id="particles-cta-cache"></div>
    <div id="particles-js-cta"></div>

    <div class="cta-content container">
        <h2>Vous souhaitez me contacter ?</h2>
        <h3>Ne soyez pas timide</h3>
        <a href="{{route('contact.intro')}}" class="btn btn-outline-white"><i class="fas fa-arrow-right"></i></a>
    </div>
</section>
@endsection