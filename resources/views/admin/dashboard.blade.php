@extends('admin.template')

@section('header')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-2">
                <h1>Derniers projets ajoutés</h1>
            </div>
        </div>
    </div>
@endsection

@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Date</th>
                                <th scope="col">Archivé</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($projects as $project)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ date('d-m-Y', strtotime($project->date)) }}</td>
                                    <td>
                                        <span class='badge badge-{{ $project->archived ? 'danger' : 'success' }}'>
                                            {{ $project->archived ? 'Archivé' : 'Publié' }}
                                        </span>
                                    </td>
                                    <td>
                                        <a class="btn btn-success btn-sm" title="Afficher" href="{{ route('projects.show', [$project->id]) }}">
                                            <i class="far fa-info-circle"></i>
                                        </a>
                                        <a class="btn btn-info btn-sm" title="Modifier"
                                            href="{{ route('projects.edit', [$project->id]) }}">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" title="Supprimer"
                                            href="{{ route('projects.destroy', [$project->id]) }}">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('projects.index')}}" class="btn btn-primary">Tous les projets</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-4 mt-3">
            <a href="{{route('projects.index')}}">
                <div class="card">
                    <div class="card-body">
                        <h2 class="d-inline text-danger">{{$nb_projects}}</h2>
                        <p class="d-inline ml-3">projets</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-lg-4 mt-3">
            <a href="{{route('services.index')}}">
                <div class="card">
                    <div class="card-body">
                        <h2 class="d-inline text-success">{{$nb_services}}</h2>
                        <p class="d-inline ml-3">services</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-lg-4 mt-3">
            <a href="{{route('clients.index')}}">
                <div class="card">
                    <div class="card-body">
                        <h2 class="d-inline text-primary">{{$nb_clients}}</h2>
                        <p class="d-inline ml-3">clients</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
