@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row pt-3">
        <div class="col-12">
            <h1>{{$client->name}}</h1>
        </div>
    </div>

    <form>
        <div class="row">
            <div class="col-12 mb-3">
                <a class="btn btn-secondary" href="{{route('clients.index')}}">Retour</a>
                <a class="btn btn-info" href="{{route('clients.edit', [$client->id])}}">Modifier</a>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="name">Nom du client</label>
                    <input type="text" class="form-control" name="name" readonly value="{{$client->name}}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="name">Lien vers le site du client</label>
                    <input type="text" class="form-control mb-3" name="link" readonly value="{{$client->link}}">
                    <small>Le lien doit débuter par "https://..."<br><a href="{{$client->link}}" target="_blank" rel="noopener noreferrer">Vers le site</a></small>
                </div>
                
            </div>
        </div>
    </form>
</div>