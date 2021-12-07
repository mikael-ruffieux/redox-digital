<div class="row project">
    <div class="col-6">
        <h5>{{$project->client->name}}</h5>
        <h3>{{$project->title}}</h3>

        <div class="categories">
            @foreach ($project->services as $service)
            <a href="#" class="category">{{$service->title}}</a>
            @endforeach
        </div>
        @if($project->custom_summary)
        <p>{{$project->custom_summary}}</p>
        @endif
        <a class="btn btn-outline-dark" href="{{route('portfolio.project', [$project->id])}}">En savoir plus</a>
    </div>
    <div class="col-4">
        @if(sizeof($project->images) != 0)
        <img src="{{asset($project->images->first()->url)}}" alt="{{$project->title}}">
        @endif
    </div>
</div>