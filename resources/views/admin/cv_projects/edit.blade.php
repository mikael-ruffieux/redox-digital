@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row pt-3">
        <div class="col-12">
            <h1>Modifier <b>{{$project->title}}</b></h1>
        </div>
    </div>

    <form method="POST" action="{{route('cv-projects.update', [$project->id])}}" accept-charset="UTF-8" enctype="multipart/form-data">
        @method("PUT")
        @csrf

        <div class="row">
            <div class="col-12 mb-3">
                <a class="btn btn-secondary" href="{{route('cv-projects.index')}}">Retour</a>
            </div>

            <div class="col-12">
                <h3>Données globales</h3>
            </div>

            <!-- Client -->
            <div class="col-12">
                <div class="form-group">
                    <label for="client_id">Client</label>
                    <select name="client_id" class="form-control">
                    @foreach ($clients as $client)
                        <option {{$client->id == $project->client_id ? "selected" : ""}} value="{{$client->id}}">{{$client->id}} - {{$client->name}}</option>
                    @endforeach
                </select>
                {!! $errors->first('client_id', '<small class="help-block text-danger">:message</small>') !!}
                <small>Le client n'est pas encore enregistré ? <a href="{{route('clients.create')}}">Créez un nouveau profil-client !</a> <i>(Attention, les modifications apportées à ce projet ne seront pas enregistrées.)</i></small>
                </div>
            </div>

            <!-- Date -->
            <div class="col-12">
                <div class="form-group">
                    <label for="date">Date du projet</label>
                    <input type="date" class="form-control" name="date" id="date" value="{{$project->dateValue()}}" >
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
                    <input type="text" class="form-control" name="title" id="title" value="{{$project->title}}" >
                    {!! $errors->first('title', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <!-- Description -->
            <div class="col-12">
                <div class="form-group">
                    <label for="desc">Description du projet</label>
                    <textarea name="desc" id="desc" rows="6" class="form-control" >{{$project->desc}}</textarea>
                    {!! $errors->first('desc', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <!-- Categories -->
            <div class="col-12">
                <div class="form-group">
                    <label for="categories">Catégories du projet</label>
                    <input type="text" class="form-control" name="categories" id="categories" value="{{$project->categories}}">
                    {!! $errors->first('categories', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <!-- URL -->
            <div class="col-12">
                <div class="form-group">
                    <label for="project_url">URL du projet</label>
                    <input type="text" class="form-control" name="project_url" id="project_url" value="{{$project->project_url}}">
                    {!! $errors->first('project_url', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>
        </div>

        <!-- Image -->
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="image">Image</label><br>
                    <input type="file" id="image" name="image" accept="image/png, image/jpeg" value="{{$project->image}}" >
                    {!! $errors->first('image', '<small class="help-block text-danger">:message</small>') !!}
                    <img src="{{asset($project->image)}}" alt="{{$project->title}}" style="max-width: 100%;">
                </div>
            </div>
        </div>


        <input type="submit" value="Enregistrer les modifications" class="btn btn-primary">
    </form>
    <form method="POST" class="my-3" action="{{route('cv-projects.destroy', [$project->id])}}" accept-charset="UTF-8">
        @csrf
        @method("DELETE")
        <input class="btn btn-danger" type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce projet ? Cette action est irreversible.')" value="Supprimer le projet">
    </form>
</div>
@endsection