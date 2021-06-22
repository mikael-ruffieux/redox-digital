@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <h1>Modifier <b>{{$client->name}}</b></h1>
        </div>
    </div>

    <form method="POST" action="{{route('clients.update', [$client->id])}}" accept-charset="UTF-8">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12 mb-3">
                <a class="btn btn-secondary" href="{{route('clients.index')}}">Retour</a>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="name">Nom du client</label>
                    <input type="text" class="form-control" name="name" value="{{$client->name}}">
                    {!! $errors->first('titre', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="name">Lien vers le site du client</label>
                    <input type="text" class="form-control mb-3" name="link" value="{{$client->link}}">
                    {!! $errors->first('link', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Le lien doit débuter par "https://..."<br><a href="{{$client->link}}" target="_blank" rel="noopener noreferrer">Vers le site</a></small>
                </div>
            </div>

            <div class="col-12">
                <input class="btn btn-primary" type="submit" value="Enregistrer">
            </div>
        </div>
    </form>

    <form method="POST" class="mt-3" action="{{route('clients.destroy', [$client->id])}}" accept-charset="UTF-8">
        @csrf
        @method("DELETE")
        <input class="btn btn-danger" type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce client ? Cette action est irreversible.')" value="Supprimer le client">
    </form>
</div>
@endsection