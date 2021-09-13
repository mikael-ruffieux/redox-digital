@extends('layouts.main_layout')

@section('title')
{{$project->title}} |
@endsection

@section("content")

<section class="hero-section container" id="project-header">
    <div class="row">
        <div class="col-12">
            <h3 class="all-caps color-red">{{$project->client->name}}</h3>
            <h1 class="red-dot">{{$project->title}}</h1>

            <div class="categories">
                @foreach ($project->services as $service)
                <a href="#" class="category">{{$service->title}}</a>
                @endforeach
            </div>
        </div>
        <div class="col-8">
            <h3 class="all-caps section-title"><span class="number">01</span> - Contexte</h3>
            <p>{{$project->context}}</p>
        </div>
        <div class="col-12">
            <a href="{{$project->projectable->site_url}}" target="_blank" class="btn btn-outline-red">voir le site</a>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#2b2323', 'class' => 'enters-from-right'])

<section id="project-main" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="all-caps"><span class="number">02</span> - Design</h3>

                <p>{{$project->projectable->site_desc}}</p>

                <img src="{{asset($project->projectable->site_screenshot)}}" alt="{{$project->title}}">

                <div class="gallery">
                    gallery
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-small-top-right', ['color' => '#2b2323'])

<section id="project-others">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="all-caps"><span class="number">03</span> - Nos réalisations similaires</h3>
            </div>
        </div>
    </div>
</section>
@endsection