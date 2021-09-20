@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row">
        <div class="col-lg-6 col-12">
            <h1>CV - mes projets</h1>
        </div>
        <div class="col-lg-6 col-12">
            <a href='{{ route('cv-projects.create') }}' class='btn btn-info float-lg-right'>Enregistrer un nouveau projet</a>
        </div>
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Projet</th>
                        <th>Date</th>
                        <th>Client</th>
                        <th>Catégories</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
        
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>
                                {{ $project->title }}
                            </td>
                            <td>
                                <div class="badge badge-secondary">
                                    {{ date('d-m-Y', strtotime($project->date)) }}
                                </div>
                            </td>
                            <td>
                                {{$project->client->name}}
                            </td>
                            <td>
                                <small class="mr-1">{{$project->categories}}</small>
                            </td>
                            <td>
                                <a href="{{ route('cv-projects.show', [$project->id]) }}" class="btn-sm btn btn-success"
                                    title="Afficher"><i class="far fa-info-circle"></i></a>
                                <a href="{{ route('cv-projects.edit', [$project->id]) }}" class="btn btn-info btn-sm" title="Modifier"><i
                                        class="far fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
        
                </tbody>
            </table>
            {!! $projects->links() !!}
        </div>
    </div>
</div>
@endsection