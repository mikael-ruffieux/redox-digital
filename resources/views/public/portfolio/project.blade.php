@extends('layouts.main_layout')

@section('title')
{{$project->title}} |
@endsection

@section("content")
<?php $section = 1;?>

<section class="hero-section container" id="project-header">
    <div class="row">
        <div class="col-12">
            <h3 class="all-caps color-red">{{$project->client->name}}</h3>
            <h1 class="red-dot">{{$project->title}}</h1>

            <div class="categories">
                @foreach ($project->services as $service)
                <a href="{{route('portfolio')}}" class="category">{{$service->title}}</a>
                @endforeach
            </div>
        </div>
        @if($project->external_link)
        <div class="col-12">
            <a href="{{$project->external_link}}" target="_blank" class="btn btn-outline-red">voir le projet</a>
        </div>
        @endif
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#ffffff'])
<!-- Context section -->
<section id="project-context" class="project-section {{$section%2 ? 'bg-white' : 'bg-dark'}}">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="all-caps section-title"><span class="number">0{{$section}}</span> - {{ ($project->context_title ?: "Contexte")}}</h3>
                <p>{{$project->context_desc}}</p>
            </div>
        </div>

        <!-- Video -->
        @if($project->video_url)
        <div class="row project-video">
            <div class="col">
                <iframe
                    src="{{$project->video_url}}"
                    title="{{$project->title}}" 
                    frameborder="0" 
                    allow="autoplay; fullscreen; clipboard-write; encrypted-media; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        @endif
    </div>
</section>

<?php $section++; ?> 

@if ($project->design_desc)
<!-- Design section -->
<section id="project-design" class="project-section {{$section%2 ? 'bg-white' : 'bg-dark'}}">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="all-caps"><span class="number">0{{$section}}</span> - Design</h3>

                <p>{{$project->design_desc}}</p>

                GRANDES IMAGES

                @foreach ($project->images as $image)
                    @if ($image->type == "image")
                        <img src="{{asset($image->url)}}" alt="{{$project->title}}">
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
<?php $section++; ?> 
@endif

<!-- Solution section -->
<section id="project-solution" class="project-section {{$section%2 ? 'bg-white' : 'bg-dark'}}">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="all-caps"><span class="number">0{{$section}}</span> - {{$project->solution_title ?: "Solutions proposées"}}</h3>

                <p>{{$project->solution_desc}}</p>

                <div class="gallery">
                    GALERIE

                    @foreach ($project->images as $image)
                        @if ($image->type == "galery")
                            <img src="{{asset($image->url)}}" alt="{{$project->title}}">
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<?php $section++; ?>

<!-- Similar projects section -->
<section id="similar-projects" class="project-section {{$section%2 ? 'bg-white' : 'bg-dark'}}">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="all-caps"><span class="number">0{{$section}}</span> - Projets similaires</h3>
            </div>
        </div>
    </div>
</section>

<?php $curve_color = ($section%2 ? '#ffffff' : '#2b2323'); ?>

@include('layouts.cta-section', ['curve_color', $curve_color])
@endsection