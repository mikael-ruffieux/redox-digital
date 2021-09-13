@extends('layouts.main_layout')

@section('title')
{{$project->title}} |
@endsection

@section("content")

<section class="hero-section container" id="portfolio-header">
    <div class="row">
        <div class="col-12">
            <h3 class="all-caps color-red">{{$project->client->name}}</h3>
            <h1 class="red-dot">{{$project->title}}</h1>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#ffffff'])

<section id="project" class="bg-white">
    <div class="container">
        <div class="row project">
            <div class="col-6">
                <h5>{{$project->client->name}}</h5>
                <h3>{{$project->title}} VIDEO</h3>

                <div class="categories">
                    @foreach ($project->services as $service)
                    <a href="#" class="category">{{$service->title}}</a>
                    @endforeach
                </div>

                <div class="categories">
                    @foreach ($project->services as $service)
                    <a href="#" class="category">{{$service->title}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-4">
                <img src="{{asset($project->images->first()->url)}}" alt="{{$project->title}}">
            </div>
        </div>
    </div>
</section>
@endsection