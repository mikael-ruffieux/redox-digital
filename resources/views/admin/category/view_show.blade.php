@extends('admin.template')

@section('contenu')
<h5 class="card-title">Catégorie</h5>

<div>
    <div class="position-relative row form-group {!! $errors->has('category') ? 'has-error' : '' !!}">
        <label for="category" class="col-sm-2 col-form-label">Nom de la catégorie</label>
        <div class="col-sm-10">
            <input name="category" id="category" type="text" class="form-control" value="{{ $category->category }}" disabled>
            {!! $errors->first('category', '<small class="help-block">:message</small>') !!}
        </div>
    </div>

    <div class="position-relative">
        <a href="javascript:history.back()" class="btn btn-secondary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
        </a>
        <a href="{{route('categories.edit', [$category->id])}}" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span>Modifier
        </a>
    </div>
</div>

@endsection