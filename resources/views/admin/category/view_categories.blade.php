@extends('admin.template')

@section('header')
@endsection


@section('contenu')

@if(isset($info))
<div class='row alert alert-info'> {{$info}}</div>
@endif

@if(session()->has('ok'))
<div class="alert alert-info alert-dismissible">
    {!! session('ok') !!}
</div>
@endif

<div class="row mb-4">
    <div class="col-md-12">
        <div class="btn-group pull-right">
            <a href='{{route("categories.create")}}' class='btn btn-info'>Cr&eacute;er une catégorie</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                Liste des catégories
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Catégorie</th>
                            <th>URL</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($categories as $category)
                    <tr>
                        <td class="text-center text-muted">{!! $category->id !!}</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">{{$category->category}}</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">{{$category->category_url}}</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="{{route('categories.show', [$category->id])}}" class="btn-sm btn btn-success"><i class="fas fa-info mr-1"></i><span class="d-none d-sm-inline"> Afficher</span></a>

                            <a href="{{route('categories.edit', [$category->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-edit mr-1"></i><span class="d-none d-sm-inline"> Modifier</span></a>

                            <form class="d-inline" method="POST" action="{{route('categories.destroy', [$category->id])}}" accept-charset="UTF-8">
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
@endsection