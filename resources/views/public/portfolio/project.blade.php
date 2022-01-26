@extends('layouts.main_layout')

@section('title')
{{$project->title}} |
@endsection

@section("content")
<?php 

/**
 * @param $colNb : how many columns do you want
 * @param $imgNb : how many images must be distributed
 * @return array The columns disposition.
 */
function getColFillage($colNb, $imgNb) {
    $colFillage = [];

    $imgPerCol = intdiv($imgNb, $colNb);
    $moreImg = $imgNb % $colNb;

    for ($i=0; $i < $colNb; $i++) { 
        array_push($colFillage, $imgPerCol);
    }

    $y = 0;
    while ($moreImg > 0) {
        $colFillage[$y]++;
        $y++;
        $moreImg --;
    }

    return $colFillage;
}

$section = 1;

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
        <div class="col-md-8 col-12">
            <h3 class="all-caps section-title"><span class="number">0{{$section}}</span> - {{ ($project->context_title ?: "Contexte")}}</h3>
            <p class="my-5">{{$project->context_desc}}</p>
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

        <!-- Video -->
        @if($project->video_url)
        <div class="row project-video">
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

                <p class="my-5">{{$project->design_desc}}</p>
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

                <p class="my-5">{{$project->solution_desc}}</p>

                <div class="gallery">
                    <?php 
                        $imgDisposition = getColFillage(3, sizeof($gallery));
                        $counter = 1;
                    ?>

                    @for ($col = 0; $col < sizeof($imgDisposition); $col++)
                    <div class="gallery_column">
                        @for ($row = 1; $row <= $imgDisposition[$col]; $row++)
                        <a href="#" class="gallery_link">
                            <figure class="gallery_thumb">
                                <img src="{{asset($gallery[$counter]->url)}}" alt="{{$project->title}}" class="gallery_image" data-img-preview="{{$counter}}">
                            </figure>
                        </a>
                        <?php $counter ++; ?>
                        @endfor
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
<?php $section++; ?>

@include('layouts.curves.curve-small-bottom-right', ['color' => '#2B2323'])

<!-- Similar projects section -->
<section id="similar-projects" class="portfolio project-section {{$section%2 ? 'bg-white' : 'bg-dark'}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-white"><span class="number">0{{$section}}</span> - Projets similaires</h3>
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
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script>
var flkty = new Flickity( '.carousel', {
  //wrapAround: true

  // advance cells every 3 seconds
  //autoPlay: 3000
});
</script>

<?php $curve_color = ($section%2 ? '#ffffff' : '#2b2323'); ?>

@include('layouts.cta-section', ['curve_color', $curve_color])
@endsection