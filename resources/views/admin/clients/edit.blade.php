@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <h1>Modifier <b>{{$client->name}}</b></h1>
        </div>
    </div>

    <form method="POST" action="{{route('clients.update', [$client->id])}}" accept-charset="UTF-8" enctype="multipart/form-data">
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
            <!-- Public ? -->
            <div class="col-12">
                <div class="form-group">
                    <label class="required">Public ?</label>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="public" id="public_true" value="true" {{$client->public ? "checked" : ""}}>
                                <label class="form-check-label" for="public_true">Public</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="public" id="public_false" value="false" {{!$client->public ? "checked" : ""}}>
                                <label class="form-check-label" for="public_false">Privé</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="name">Lien vers le site du client</label>
                    <input type="text" class="form-control mb-3" name="link" value="{{$client->link}}">
                    {!! $errors->first('link', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Le lien doit débuter par "https://..."<br><a href="{{$client->link}}" target="_blank"  rel="noopener noreferrer">Vers le site</a></small>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="logo">Logo</label><br>
                    <img src="{{asset($client->logo)}}" alt="{{$client->name}}" style="max-width: 100%; max-height: 200px;"><br><br>

                    <input type="file" id="logo" name="logo" accept="image/png, image/jpeg">

                    {!! $errors->first('logo', '<small class="help-block">:message</small>') !!}
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
