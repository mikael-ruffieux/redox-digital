@extends('admin.template')

@section('contenu')
<h5 class="card-title">Fiche d'utilisateur</h5>

<form>
    <div class="position-relative row form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
        <label for="name" class="col-sm-2 col-form-label">Nom d'utilisateur</label>
        <div class="col-sm-10">
            <input name="name" id="name" type="text" class="form-control" value="{{$user->name}}" disabled>
            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
        </div>
    </div>

    <div class="position-relative row form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
        <div class="col-sm-10">
            <input name="email" id="email" type="email" class="form-control" value="{{$user->email}}" disabled>
            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
        </div>
    </div>

    @if($user->admin==1)
    <div class="position-relative row form-group">
        <div class="col-sm-6">
              <b>Administrateur</b>
        </div>
    </div>
    @endif

    <a href="javascript:history.back()" class="btn btn-secondary">
        <span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
    </a>
</form>
@endsection