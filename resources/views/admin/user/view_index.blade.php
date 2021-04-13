@extends('admin.template')

@section('header')
@endsection


@section('contenu')

@if(isset($info))
<div class='row alert alert-info'> {{$info}}</div>
@endif

@if(session()->has('ok'))
<div class="alert alert-success alert-dismissible">
    {!! session('ok') !!}
</div>
@endif

{!!$links!!}
<div class="row mb-4">
    <div class="col-md-12">
        <div class="btn-group pull-right">
            <a href='{{route("user.create")}}' class='btn btn-info'>Cr&eacute;er un utilisateur</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                Liste des utilisateurs
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Nom</th>
                            <th>Administrateur</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($users as $user)
                    <tr>
                        <td class="text-center text-muted">{!! $user->id !!}</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">{{$user->name}}</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="badge badge-{{ $user->admin ? 'success' : ''}}">
                                {{ $user->admin ? 'Admin' : ''}}
                            </div>
                        </td>
                        <td>
                            <a href="{{route('user.show', [$user->id])}}" class="btn-sm btn btn-success"><i class="fas fa-info mr-1"></i> Afficher</a>

                            <a href="{{route('user.edit', [$user->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-edit mr-1"></i> Modifier</a>

                            <form class="d-inline" method="POST" action="{{route('user.destroy', [$user->id])}}" accept-charset="UTF-8">
                                @csrf
                                @method('DELETE')
                                <input class="mr-2 btn-sm btn-icon btn-icon-only btn btn-danger" onclick="return confirm('Vraiment supprimer cet utilisateur ?')" type="submit" value="Supprimer">
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