<div class="row project" data-filters="{{implode(',', $project->categoriesId())}}">
    <div class="col-md-6 col-12 order-md-1 order-12 mb-4 mb-md-0">
        <h5 class="{{isset($bg_dark) ? 'color-red' : ''}}">{{$project->client->name}}</h5>
        <h3 class="{{isset($bg_dark) ? 'color-white' : ''}}">{{$project->title}}</h3>

        <div class="categories">
            @foreach ($project->services as $service)
            <a href="#" class="category {{isset($bg_dark) ? 'color-secondary-black' : ''}}">{{$service->title}}</a>
            @endforeach
        </div>
        @if($project->custom_summary)
        <p>{!!$project->custom_summary!!}</p>
        @endif
        <a class="btn {{isset($bg_dark) ? 'btn-white' : 'btn-outline-black'}}" href="{{route('portfolio.project', [$project->id])}}">En savoir plus</a>
    </div>
    <div class="col-md-4 col-12 order-md-12 order-1">
        @if(isset($project->img_preview_url))
        <img src="{{asset($project->img_preview_url)}}" alt="{{$project->title}}">
        @endif
    </div>
</div>