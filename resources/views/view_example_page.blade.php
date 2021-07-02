@extends('layouts.main_layout')

@section('title')
Page exemple |
@endsection

@section('content')
<section class="hero-section">
    <div class="row">
        <div class="col-12">
            <h1 class="red-dot">Création de contenus digitaux</h1>
        </div>
        <div class="col-12 col-md-6" id="hero-description">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores ullam culpa qui consequuntur iste saepe aliquam 
                debitis ducimus aliquid voluptatibus vitae nisi
                assumenda sed, nihil facilis? Alias quia soluta culpa.
            </p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <a class="btn btn-100 btn-secondary" href="#">vers les services digitaux</a>

        </div>
        <div class="col-12 col-md-6" id="hero-list">
            <ul>
                <li><h3><a href="#">Production vidéo</a></h3></li>
                <li><h3><a href="#">Photographie</a></h3></li>
                <li><h3><a href="#">Design graphique</a></h3></li>
            </ul>
        </div>
    </div>
</section>

<hr>

<div class="row">
    <div class="col-12">
        <h2>Test h2</h2>
        <h3>Test h3</h3>
        <h4>Test h4</h4>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores ullam culpa qui consequuntur iste saepe aliquam debitis ducimus aliquid voluptatibus vitae nisi assumenda sed, nihil facilis? Alias quia soluta culpa.</p>
    </div>
</div>
@endsection