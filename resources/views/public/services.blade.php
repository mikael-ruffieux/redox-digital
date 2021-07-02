@extends('layouts.main_layout')

@section('title')
Nos services | 
@endsection

@section("content")
<section class="hero-section">
    <div class="row">
        <div class="col-12">
            <h1 class="red-dot">{{$parent->title}}</h1>
        </div>
        <div class="col-12 col-md-6" id="hero-description">
            <p>{{$parent->description}}</p>

            

            <a class="btn btn-100 btn-secondary" href="{{route('services', [$other->getSlug()])}}">
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

@foreach ($services as $service)
<hr>
<section id="{{$service->getSlug()}}" class="service">
    <img src="{{asset($service->image)}}" alt="{{$service->title}}">
    <h2 class="red-dot">{{$service->title}}</h2>
    <p>{{$service->description}}</p>

    @if(sizeof($service->accordions))
    <div class="accordions col-6">
        @foreach ($service->accordions as $accordion)
        <h3>{{$accordion->title}}</h3>
        <p>{{$accordion->description}}</p>
        <hr>
            
        @endforeach
    </div>
    @endif

</section>
@endforeach

@endsection


