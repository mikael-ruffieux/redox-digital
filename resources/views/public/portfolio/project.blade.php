@extends('layouts.main_layout')

@section('title')
{{$project->title}} |
@endsection

@section("content")
<?php 
$section = 1; 
$images_id = [];
?> 
<section class="hero-section container" id="project-header">
    <div class="row">
        <div class="col-12 my-5">
            <h3 class="all-caps color-red">{{$project->client->name}}</h3>
            <h1 class="red-dot">{{$project->title}}</h1>

            <div class="categories">
                @foreach ($project->services as $service)<a href="{{route('portfolio')}}" class="category">{{$service->title}}</a>@endforeach
            </div>
        </div>

        </div>
        @if($project->external_url)
        <div class="col-12">
            <a href="{{$project->external_url}}" target="_blank" class="btn btn-outline-red">voir le projet</a>
        </div>
        @endif
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#ffffff'])
<!-- Context section -->
<section id="project-context" class="project-section {{$section%2 ? 'bg-white' : 'bg-dark'}}">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12">
                <h3 class="all-caps section-title"><span class="number">0{{$section}}</span> - {{ ($project->context_title ?: "Contexte")}}</h3>
                <p class="my-5">{!!$project->context_desc!!}</p>
            </div>
        </div>

        <!-- Video -->
        @if($project->video_url)
        <div class="row project-video">
            <div class="col-12">
                <div class="iframe-container">
                    <iframe
                        src="{{$project->video_url}}"
                        title="{{$project->title}}" 
                        frameborder="0" 
                        allow="autoplay; fullscreen; clipboard-write; encrypted-media; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

@include('layouts.curves.curve-small-top-right', ['color' => '#ffffff'])

<?php $section++; ?> 

@if ($project->design_desc)
<!-- Design section -->
<section id="project-design" class="project-section {{$section%2 ? 'bg-white' : 'bg-dark'}}">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="all-caps"><span class="number">0{{$section}}</span> - Design</h3>

                <p class="my-5">{!!$project->design_desc!!}</p>
            </div>
            <div class="col-12 my-5" id="big-images-container">
                @foreach ($images as $image)
                    <img src="{{asset($image->url)}}" alt="{{$project->title}}" class="big-image">
                @endforeach
            </div>
        </div>
    </div>
</section>
<?php $section++; ?> 
@endif

@include('layouts.curves.curve-small-bottom-left', ['color' => '#ffffff'])

<!-- Solution section -->
<section id="project-solution" class="project-section {{$section%2 ? 'bg-white' : 'bg-dark'}}">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="all-caps"><span class="number">0{{$section}}</span> - {{$project->solution_title ?: "Solutions proposées"}}</h3>

                <p class="my-5">{!!$project->solution_desc!!}</p>
            </div>
        </div>

        <div class="row" id="gallery">
            @foreach ($gallery as $image)
                <div class="col-12 col-sm-6 col-md-4 pb-4"> <!--  gallery-img-container-->
                    <div class="gallery-img-container" style="background-image: url({{asset($image->url)}})" onclick="displayImg({{$image->id}})"></div>
                    <div class="full-size-img-container" data-img-full="{{$image->id}}" style="display: none;">
                        <img src="{{asset($image->url)}}" alt="{{$project->title}}" class="full-size-img">
                        <button id="prev-btn" onclick="prevImg({{$image->id}})"><i class="fal fa-angle-left"></i></button>
                        <button id="next-btn" onclick="nextImg({{$image->id}})"><i class="fal fa-angle-right"></i></button>
                        <button id="close-btn" onclick="closeImg({{$image->id}})"><i class="fal fa-times"></i></button>
                        <?php array_push($images_id, $image->id);?> 
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    

</section>
<?php $section++; ?>

@include('layouts.curves.curve-small-bottom-right', ['color' => $section%2 ? '#ffffff' : '#2B2323'])

<!-- Similar projects section -->
<section id="similar-projects" class="portfolio project-section {{$section%2 ? 'bg-white' : 'bg-dark'}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps {{$section%2 ? '' : 'color-white'}}"><span class="number">0{{$section}}</span> - Projets similaires</h3>
            </div>
        </div>
        <div class="carousel">
            @foreach ($similar_projects as $project)
            <div class="carousel-cell">
                @include('components.include_project_preview', [compact('project'), "bg_dark" => $section%2 ? null : true])
            </div>
            @endforeach
        </div>
    </div>
</section>

<?php $curve_color = ($section%2 ? '#ffffff' : '#2b2323'); ?>

@include('layouts.cta-section', ['curve_color', $curve_color])

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
var flkty = new Flickity( '.carousel', {
  //wrapAround: true
  // advance cells every 3 seconds
  //autoPlay: 3000
});

const imgKeys = <?php echo json_encode($images_id); ?>;

console.log(imgKeys);

function displayImg(id) {
    document.querySelector(`[data-img-full='${id}']`).style.display="block";
    document.getElementsByTagName("body")[0].style.overflow ="hidden";
}

function prevImg(id) {
    closeImg(id);
    if(id === imgKeys[0]) {
        displayImg(imgKeys[imgKeys.length-1]);
    } else {
        displayImg(imgKeys[imgKeys.indexOf(id)-1]);
    }
}

function nextImg(id) {
    closeImg(id);
    if(id === imgKeys[imgKeys.length-1]) {
        displayImg(imgKeys[0]);
    } else {
        displayImg(imgKeys[imgKeys.indexOf(id)+1]);
    }
}

function closeImg(id) {
    document.querySelector(`[data-img-full='${id}']`).style.display="none";
    document.getElementsByTagName("body")[0].style.overflow ="visible";
}
</script>
@endsection