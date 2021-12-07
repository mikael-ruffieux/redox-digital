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
        <div class="row">
            <div class="col" id="projects-tags">
                <div class="tag">
                    <input type="checkbox" name="all" id="all">
                    <label for="all">tous</label>
                </div>
                @foreach ($services as $service)
                <div class="tag">
                    <input type="checkbox" name="{{$service->id}}" id="{{$service->id}}">
                    <label for="{{$service->id}}">{{$service->title}}</label>
                </div>
                @endforeach
            </div>
        </div>
        @foreach ($projects as $project)
            @include('components.include_project_preview', compact('project'))
        @endforeach

    </div>
</section>
<script type="text/javascript">
const cbs = document.querySelectorAll('.tag');
function check(checked = true, cbs) {
    cbs.forEach((cb) => {
        cb.checked = checked;
    });

    document.getElementById("all").checked = true;
}

check(false, cbs);

cbs.forEach(cb => cb.onclick = () => {
    if(cb.id != "all") {
        document.getElementById("all").checked = false;
    } else {
        check(false, cbs);
    }
    console.log(cb.id)
});
</script>
@endsection