@extends('layouts.main_layout')

@section('title')
Nos services | 
@endsection

@section("content")
<section class="hero-section container" id="service-header">
    <div class="row">
        <div class="col-12">
            <h1 class="red-dot">{{$parent->title}}</h1>
        </div>
        <div class="col-12 col-md-6" id="hero-description">
            <p>{{$parent->description}}</p>

            

            <a class="btn btn-100 btn-outline-red" href="{{route('services', [$other->getSlug()])}}">
                Voir les services de {{Illuminate\Support\Str::lower($other->title)}}
            </a>

        </div>
        <div class="col-12 col-md-6" id="hero-list">
            <ul>
                @foreach ($services as $service)
                <li><h3><a href="#{{$service->getSlug()}}">{{$service->title}}</a></h3></li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-top-right-dark')

<div class="container">

<?php $i = 0; ?>

@foreach ($services as $service)

    @if($i == ceil((sizeof($services)+1)/2))
    <hr>
    <p>change color</p>
    <hr>
    @endif

    <section id="{{$service->getSlug()}}" class="service row">
    <!-- gauche / droite -->
    @if($i%2) 
        <div class="col-12 col-md-4 service-image">
            <img src="{{asset($service->image)}}" alt="{{$service->title}}">
        </div>

        <div class="col-0 col-md-1"><!-- spacer --></div>

        <div class="col-12 col-md-7">
            <h2 class="red-dot">{{$service->title}}</h2>
            <p>{{$service->description}}</p>
        
            @if(sizeof($service->accordions))
            <div class="accordion-list">
                @foreach ($service->accordions as $accordion)
                <div class="accordion">
                    <h3>{{$accordion->title}}<span class="plus-sign"><i class="fal fa-plus"></i></span></h3>
                    <p>{{$accordion->description}}</p>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    @else
        <div class="col-12 col-md-7">
            <h2 class="red-dot">{{$service->title}}</h2>
            <p>{{$service->description}}</p>
        
            @if(sizeof($service->accordions))
            <div class="accordion-list">
                @foreach ($service->accordions as $accordion)
                <div class="accordion">
                    <h3>{{$accordion->title}}<span class="plus-sign"><i class="fal fa-plus"></i></span></h3>
                    <p>{{$accordion->description}}</p>
                </div>
                @endforeach
            </div>
            @endif
        </div>
        
        <div class="col-0 col-md-1"><!-- spacer --></div>

        <div class="col-12 col-md-4 service-image">
            <img src="{{asset($service->image)}}" alt="{{$service->title}}">
        </div>

    @endif
    </section>

<?php $i ++; ?>
@endforeach

</div>

@endsection


