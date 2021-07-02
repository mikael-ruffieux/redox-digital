@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row">
        <div class="col-lg-6 col-12">
            <h1>Nos projets</h1>
        </div>
        <div class="col-lg-6 col-12">
            <a href='{{ route('projects.create') }}' class='btn btn-info float-lg-right'>Enregistrer un nouveau projet</a>
        </div>
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Projets</th>
                        <th>Statut</th>
                        <th>Type</th>
                        <th>Catégories</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
        
                    @foreach ($projects as $project)
                        <tr>
                            <td scope="row">
                                {{$project->id}}
                            </td>
                            <td>
                                {{ $project->title }}
                            </td>
                            <td>
                                <div class="badge badge-{{ $project->archived ? 'danger' : 'success'}}">
                                    {{ $project['archived'] ? 'Archivé' : 'Actif'}}
                                </div>
                            </td>
                            <td>
                                <small>
                                @if ($project->projectable_type == "App\Models\ProjectMarketing")
                                    marketing
                                @elseif ($project->projectable_type == "App\Models\ProjectVideo")
                                    video
                                @else
                                    web
                                @endif
                                </small>
                            </td>
                            <td>
                                @foreach($project->services as $category)
                                <small class="mr-1">{{$category->title}}</small>
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('projects.show', [$project->id]) }}" class="btn-sm btn btn-success"
                                    title="Afficher"><i class="far fa-info-circle"></i></a>
                                <a href="{{ route('projects.edit', [$project->id]) }}" class="btn btn-info btn-sm" title="Modifier"><i
                                        class="far fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
        
                </tbody>
            </table>
            {{ $projects->links() }}
        </div>
    </div>
</div>
@endsection