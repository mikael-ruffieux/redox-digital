@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <h1>Créer un <b>nouveau client</b></h1>
        </div>
    </div>

    <form method="POST" action="{{route('clients.store')}}" accept-charset="UTF-8">
        @csrf
        <div class="row">
            <div class="col-12 mb-3">
                <a class="btn btn-secondary" href="{{route('clients.index')}}">Retour</a>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="name">Nom du client</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    {!! $errors->first('titre', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="name">Lien vers le site du client</label>
                    <input type="text" class="form-control mb-3" name="link" value="{{old('link')}}">
                    {!! $errors->first('link', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Le lien doit débuter par "https://..."</small>
                </div>
            </div>

            <div class="col-12">
                <input class="btn btn-primary" type="submit" value="Enregistrer">
            </div>
        </div>
    </form>
</div>
@endsection