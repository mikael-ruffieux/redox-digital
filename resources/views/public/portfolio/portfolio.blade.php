@extends('layouts.portfolio_layout')

@section('title')
Portfolio |
@endsection

@section("content")

<section class="hero-section container" id="portfolio-header">
    <div class="row">
        <div class="col-12">
            <h3 class="all-caps color-red">Découvrez notre portfolio</h3>
            <h1 class="red-dot">Nos réalisations</h1>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#ffffff'])

<section id="portfolio" class="portfolio bg-white">
    <div class="container">
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
                <a class="btn btn-outline-black" href="{{route('portfolio.project', [$project->id])}}">En savoir plus</a>
            </div>
            <div class="col-4">
                <img src="{{--asset($project->images->first()->url)}}" alt="{{$project->title--}}">
            </div>
        </div>
        @endforeach

    </div>
</section>
@endsection