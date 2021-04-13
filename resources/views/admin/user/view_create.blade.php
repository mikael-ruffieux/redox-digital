@extends('admin.template')

@section('contenu')
<div class="col-sm-offset-4 col-sm-4">
    <br>
    <div class="panel panel-primary">
        <div class="panel-heading">Création d'un utilisateur</div>
        <div class="panel-body">
            <div class="col-sm-12">
                <form method="POST" action="{{route('user.store')}}" accept-charset="UTF-8" class="form-horizontalpanel">
                    @csrf
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        <input type="text" name="name" placeholder="Nom" class="form-control">  
                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        <input type="email" name="email" placeholder="Email" class="form-control">  
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
                        Mot de passe : <input name="password" type="password" value="" class="form-control">
                        {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        Confirmation mot de passe <input name="password_confirmation" type="password" value="" class="form-control">
                        {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input name="admin" type="checkbox" value="1">Administrateur
                            </label>
                        </div>
                    </div>
                    <input class="btn btn-primary pull-right" type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </div>
    <a href="javascript:history.back()" class="btn btn-primary">
        <span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
    </a>
</div>
@endsection