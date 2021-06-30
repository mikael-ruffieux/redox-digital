@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row pt-3">
        <div class="col-12">
            <h1>Enregistrer un <b>nouveau projet</b></h1>
        </div>
    </div>

    <form method="POST" action="{{route('projects.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-12 mb-3">
                <a class="btn btn-secondary" href="{{route('projects.index')}}">Retour</a>
            </div>

            <!-- Client -->
            <div class="col-12">
                <div class="form-group">
                    <label for="client_id">Client</label>
                    <select name="client_id" class="form-control">
                    @foreach ($clients as $client)
                        <option value="{{$client->id}}">{{$client->id}} - {{$client->name}}</option>
                    @endforeach
                </select>
                <small>Le client n'est pas encore enregistré ? <a href="{{route('clients.create')}}">Créez un nouveau profil-client !</a> <i>(Attention, les modifications apportées à ce projet ne seront pas enregistrée.)</i></small>
                </div>
            </div>

            <!-- Archived (pas dans la création) -->
            <div class="col-12">
                <div class="form-group">
                    <label>Archivé ?</label>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="archived" id="archived_false" value="0" checked>
                                <label class="form-check-label" for="archived_false">Publié</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="archived" id="archived_true" value="1">
                                <label class="form-check-label" for="archived_true">Archivé</label>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Date -->
            <div class="col-12">
                <div class="form-group">
                    <label for="date">Date du projet</label>
                    <input type="date" class="form-control" name="date" id="date" value="{{old('date')}}">
                </div>
            </div>

            <!-- Title -->
            <div class="col-12">
                <div class="form-group">
                    <label for="title">Titre du projet</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}">
                </div>
            </div>

            <!-- Template (project_type) -->

            <!-- Categories -->
            <div class="col-12">
                <div class="form-group">
                    <div class="row">
                        @foreach ($categories as $cat)
                        <div class="col-12 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{$cat->id}}" id="cat{{$cat->id}}">
                                <label class="form-check-label" for="cat{{$cat->id}}">{{$cat->title}}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Context -->

            <!-- Champs spécifiques au type (gérer l'affichage en JS) -->

        </div>
        <input type="submit" value="Créer le projet" class="btn btn-primary">
    </form>
</div>
@endsection