@extends('layouts.main_layout')

@section('title')
Photographie immobilière | 
@endsection

@section("content")
<section class="hero-section container" id="service-header">
    <div class="row">
        <div class="col-12">
            <h1 class="red-dot">Photographie immobilière</h1>
        </div>
        <div class="col-12 col-md-6" id="hero-description">
            <p>Hello dis is description.</p>

            <a href="#" id="bouncing-arrow"><i class="fal fa-arrow-down"></i></a>

        </div>
        <div class="col-12 col-md-6" id="hero-list">
            <ul>
                <li><h3 class="all-caps"><a href="#">Photographie immobilière</a></h3></li>
                <li><h3 class="all-caps"><a href="#">Photographie 360°</a></h3></li>
                <li><h3 class="all-caps"><a href="#">Visite virtuelle</a></h3></li>
            </ul>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#2b2323'])

<div class="bg-dark">

</div>
@endsection