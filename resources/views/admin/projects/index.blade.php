@extends('admin.template')

@section('header')
@endsection

@section('contenu')
<div class="row mb-4">
    <div class="col-md-12">
        <div class="btn-group pull-right">
            <a href='{{route("projects.create")}}' class='btn btn-info'>Cr&eacute;er un projet</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                @if(isset($info)) {{$info}} @else Nos projets @endif
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Projets</th>
                            <th>Statut</th>
                            <th>Catégories</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($projects as $project)
                    <tr>
                        <td class="text-center text-muted">
                            {{$project->id}}
                        </td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">{{$project->titre}}</div>
                                        <div class="widget-subheading opacity-7">{!! $project->created_at->format('d-m-Y') !!}</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="badge badge-{{ $project->archived ? 'danger' : 'success'}}">
                                {{ $project['archived'] ? 'Archivé' : 'Actif'}}
                            </div>
                        </td>
                        <td>
                            @foreach($project->categories as $category)
                            <a href="{{url('projects/category', [$category->category_url])}}">{{$category->category}}</a>, 
                            @endforeach

                        </td>
                        <td>
                            <a href="{{route('projects.show', [$project->id])}}" class="btn-sm btn btn-success"><i class="fas fa-info mr-1"></i><span class="d-none d-sm-inline"> Afficher</span></a>
                            <a href="{{route('projects.edit', [$project->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-edit mr-1"></i><span class="d-none d-sm-inline"> Modifier</span></a>

                            <form class="d-inline" method="POST" action="{{route('projects.destroy', [$project->id])}}" accept-charset="UTF-8">
                                @csrf
                                @method('DELETE')
                                <input class="mr-2 btn-sm btn-icon btn-icon-only btn btn-danger" onclick="return confirm('Vraiment supprimer ce projet ?')" type="submit" value="Supprimer">
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{!! $links !!}
@endsection