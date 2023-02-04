@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <h1>Créer un <b>nouveau client</b></h1>
        </div>
    </div>

    <form method="POST" action="{{route('clients.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
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
            <!-- Public ? -->
            <div class="col-12">
                <div class="form-group">
                    <label class="required">Public ?</label>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="public" id="public_true" value="true" checked>
                                <label class="form-check-label" for="public_true">Public</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="public" id="public_false" value="false">
                                <label class="form-check-label" for="public_false">Privé</label>
                            </div>
                        </div>

                    </div>
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
                <div class="form-group">
                    <label for="logo">Logo</label><br>

                    <input type="file" id="logo" name="logo" accept="image/png, image/jpeg">

                    {!! $errors->first('logo', '<small class="help-block">:message</small>') !!}
                </div>
            </div>

            <div class="col-12">
                <input class="btn btn-primary" type="submit" value="Enregistrer">
            </div>
        </div>
    </form>
</div>
@endsection
