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
                                        <a class="btn btn-info btn-sm" title="Afficher" href="#{{ $project->id }}"><i
                                                class="fas fa-info-circle"></i></a>
                                        <a class="btn btn-warning btn-sm" title="Modifier"
                                            href="#{{ $project->id }}"><i class="far fa-edit"></i></a>
                                        <a class="btn btn-danger btn-sm" title="Supprimer"
                                            href="#{{ $project->id }}"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="#" class="btn btn-primary">Tous les projets</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-4 mt-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="d-inline text-danger">{{$nb_projects}}</h2>
                    <p class="d-inline ml-3">projets</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mt-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="d-inline text-success">{{$nb_services}}</h2>
                    <p class="d-inline ml-3">services</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mt-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="d-inline text-primary">{{$nb_clients}}</h2>
                    <p class="d-inline ml-3">clients</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
