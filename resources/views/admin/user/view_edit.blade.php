@extends('admin.template')

@section('contenu')
<h5 class="card-title">Création d'un utilisateur</h5>

<form method="POST" action="{{route('users.update', [$user->id])}}" accept-charset="UTF-8">
    @csrf
    @method('PUT')
    <div class="position-relative row form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
        <label for="name" class="col-sm-2 col-form-label">Nom d'utilisateur</label>
        <div class="col-sm-10">
            <input name="name" id="name" type="text" class="form-control" value="{{$user->name}}">
            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
        </div>
    </div>

    <div class="position-relative row form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
        <div class="col-sm-10">
            <input name="email" id="email" type="email" class="form-control" value="{{$user->email}}">
            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
        </div>
    </div>

    <div class="position-relative row form-group">
        <div class="col-sm-6 ml-4">
            @if($user->admin)
                <input name="admin" id="admin" class="form-check-input" value="1" type="checkbox" checked>
            @else
                <input name="admin" id="admin" class="form-check-input" value="1" type="checkbox">
            @endif
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