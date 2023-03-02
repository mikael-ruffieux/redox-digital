@extends('layouts.main_layout')

@section('title')
Nos services |
@endsection

@section('meta-description')
Découvrez nos services de {!! $parent->description !!}. N'hésitez pas à nous contacter pour plus d'informations.
@endsection

@push('head')
<script src="{{ asset('js/accordion.js')}}"></script>
@endpush

@section("content")
<section class="hero-section container" id="service-header">
    <div class="row">
        <div class="col-12">
            <h1 class="red-dot">{{$parent->title}}</h1>
        </div>
        <div class="col-12 col-md-6" id="hero-description">
            <p>{!! $parent->description!!}</p>

            <p>
                Pour découvrir nos autres prestations, consultez la page <a href="{{route('services', [$other->getSlug()])}}" class="color-red">{{Illuminate\Support\Str::lower($other->title)}}</a>.
            </p>

            <a href="#{{$services->first()->getSlug()}}" id="bouncing-arrow"><i class="fal fa-arrow-down"></i></a>

        </div>
        <div class="col-12 col-md-6" id="hero-list">
            <ul>
                @foreach ($services as $service)
                <li><h3 class="all-caps"><a href="#{{$service->getSlug()}}">{{$service->title}}</a></h3></li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#2b2323'])

<div class="bg-dark">

<?php $i = 0; ?>

@foreach ($services as $service)

@if($i == ceil((sizeof($services)+1)/2))
</div> <!-- end of bg-dark -->
@include('layouts.curves.curve-medium-top-right', ['color' => '#2b2323'])
<div class="services-second-part">
    @endif
<div class="container">
    <section id="{{$service->getSlug()}}" class="service row {{$i%2 ? 'service-odd' : 'service-even' }}">
    <!-- gauche / droite -->
        <div class="col-12 col-md-5 col-lg-4 service-image">
            <div class="image-container">
                <img src="{{asset($service->image)}}" alt="{{$service->title}}">

            </div>
        </div>

        <div class="col-1 d-none d-lg-block"><!-- spacer --></div>

        <div class="col-12 col-md-7">
            <h2 class="red-dot">{{$service->title}}</h2>
            <p>{!!$service->description!!}</p>

            @if(sizeof($service->accordions))
            <div class="accordion-list" id="accordion{{$service->id}}">
                @foreach ($service->accordions as $accordion)
                <div class="accordion" id="accordion-{{$accordion->id}}">
                    <h3 class="accordion-title all-caps" id="accordion-title-{{$accordion->id}}">
                        <button data-toggle="collapse" data-target="#accordion-content-{{$accordion->id}}" aria-expanded="false" aria-controls="accordion-content-{{$accordion->id}}" onclick="toggle({{$accordion->id}})">
                            {{$accordion->title}}<span class="plus-sign"></span>
                        </button>
                    </h3>

                    <div id="accordion-content-{{$accordion->id}}" class="collapse" aria-labelledby="accordion-title-{{$accordion->id}}" data-parent="#accordion{{$service->id}}">
                        <p class="accordion-content">{!!$accordion->description!!}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>
</div>

<?php $i ++; ?>
@endforeach

<div class="container">
<div class="row">
    <div class="col-0 col-md-4"><!-- spacer --></div>
    <div class="col-md-8 col-12">
        <a class="btn btn-100 btn-primary" href="{{route('services', [$other->getSlug()])}}">
            Voir les services de {{Illuminate\Support\Str::lower($other->title)}}
        </a>
    </div>
</div>
</div>

</div>
@endsection
