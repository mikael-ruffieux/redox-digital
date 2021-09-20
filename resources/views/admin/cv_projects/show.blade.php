@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row pt-3">
        <div class="col-12">
            <h1><b>{{$project->title}}</b></h1>
        </div>
    </div>

    <form>
        <div class="row">
            <div class="col-12 mb-3">
                <a class="btn btn-secondary" href="{{route('cv-projects.index')}}">Retour</a>
                <a class="btn btn-info" href="{{route('cv-projects.edit', [$project->id])}}">Modifier</a>
            </div>

            <div class="col-12">
                <h3>Données globales</h3>
            </div>

            <!-- Client -->
            <div class="col-12">
                <div class="form-group">
                    <label for="client_id">Client</label>
                    <select name="client_id" class="form-control" disabled>
                        <option value="{{$project->client->id}}">{{$project->client->id}} - {{$project->client->name}}</option>
                    </select>
                    {!! $errors->first('client_id', '<small class="help-block text-danger">:message</small>') !!}
                    <!--<small>Le client n'est pas encore enregistré ? <a href="{{route('clients.create')}}">Créez un nouveau profil-client !</a> <i>(Attention, les modifications apportées à ce projet ne seront pas enregistrées.)</i></small>-->
                </div>
            </div>

            <!-- Date -->
            <div class="col-12">
                <div class="form-group">
                    <label for="date">Date du projet</label>
                    <input type="date" class="form-control" name="date" id="date" value="{{$project->dateValue()}}" disabled>
                    {!! $errors->first('date', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <div class="col-12">
                <hr>
                <h3>Le projet</h3>
            </div>

            <!-- Title -->
            <div class="col-12">
                <div class="form-group">
                    <label for="title">Titre du projet</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$project->title}}" disabled>
                    {!! $errors->first('title', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <!-- Context -->
            <div class="col-12">
                <div class="form-group">
                    <label for="desc">Description du projet</label>
                    <textarea name="desc" id="desc" rows="6" class="form-control" disabled>{{$project->desc}}</textarea>
                    {!! $errors->first('desc', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <!-- Categories -->
            <div class="col-12">
                <div class="form-group">
                    <label for="categories">Catégories du projet</label>
                    <input type="text" class="form-control" name="categories" id="categories" value="{{$project->categories}}" disabled>
                    {!! $errors->first('categories', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Image -->
            <div class="col-12">
                <div class="form-group">
                    <label for="image">Image</label><br>
                    <img src="{{asset($project->image)}}" alt="{{$project->title}}" style="max-width: 100%;">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection