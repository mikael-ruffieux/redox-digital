@extends('admin.template')

@section('contenu')
<h5 class="card-title">Création d'un utilisateur</h5>

<form method="POST" action="{{route('user.store')}}" accept-charset="UTF-8">
    @csrf
    <div class="position-relative row form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
        <label for="name" class="col-sm-2 col-form-label">Nom d'utilisateur</label>
        <div class="col-sm-10">
            <input name="name" id="name" type="text" class="form-control">
            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
        </div>
    </div>

    <div class="position-relative row form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
        <div class="col-sm-10">
            <input name="email" id="email" type="email" class="form-control">
            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
        </div>
    </div>

    <div class="position-relative row form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
        <label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
        <div class="col-sm-10">
            <input name="password" id="password" type="password" class="form-control">
            {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
        </div>
    </div>

    <div class="position-relative row form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
        <label for="password_confirmation" class="col-sm-2 col-form-label">Confirmer le mot de passe</label>
        <div class="col-sm-10">
            <input name="password_confirmation" id="password_confirmation" type="password" class="form-control">
            {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
        </div>
    </div>

    <div class="position-relative row form-group">
        <div class="col-sm-6 ml-4">
            <input name="admin" id="admin" type="checkbox" class="form-check-input" value="1">
            <label for="admin" class="form-check-label">Administrateur</label><br/>
        </div>
    </div>

    <div class="position-relative row form-check">
        <a href="javascript:history.back()" class="btn btn-secondary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
        </a>
        <input class="btn btn-primary" type="submit" value="Envoyer"></button>
    </div>
</form>

@endsection