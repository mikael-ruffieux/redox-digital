@extends('admin.template')

@section('contenu')
<h5 class="card-title">Création d'une catégorie</h5>

<form method="POST" action="{{route('categories.store')}}" accept-charset="UTF-8">
    @csrf
    <div class="position-relative row form-group {!! $errors->has('category') ? 'has-error' : '' !!}">
        <label for="category" class="col-sm-2 col-form-label">Nom de la catégorie</label>
        <div class="col-sm-10">
            <input name="category" id="category" type="text" class="form-control">
            {!! $errors->first('category', '<small class="help-block">:message</small>') !!}
        </div>
    </div>

    <div class="position-relative">
        <a href="javascript:history.back()" class="btn btn-secondary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
        </a>
        <input class="btn btn-primary" type="submit" value="Envoyer">
    </div>
</form>

@endsection