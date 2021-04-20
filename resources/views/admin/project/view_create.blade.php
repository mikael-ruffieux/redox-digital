@extends('admin.template')

@section('contenu')
<h5 class="card-title">Ajout d'un projet</h5>

<form method="POST" action="{{route('projects.store')}}" accept-charset="UTF-8">
    @csrf
    <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
        <input class="form-control" placeholder="Titre" name="titre" type="text">
        {!! $errors->first('titre', '<small class="help-block">:message</small>') !!}
    </div>
    <div class="form-group {!! $errors->has('url') ? 'has-error' : '' !!}">
        <input class="form-control" placeholder="URL du projet" name="url" type="text">
        {!! $errors->first('url', '<small class="help-block">:message</small>') !!}
    </div>
    <div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
        <textarea class="form-control" placeholder="Contenu" name="contenu" cols="50" rows="10"></textarea>
        {!! $errors->first('contenu', '<small class="help-block">:message</small>') !!}
    </div>
    <p class="card-title">Catégories</p>
    
    <div class="row mb-3">
        <div class="col-sm-6 col-12">
        <?php $i = 0; ?>
            @foreach ($categories as $category)

            <?php if($i >= sizeof($categories)/2) {
                echo '</div><div class="col-sm-6 col-12">';
                $i = 0;
            }?>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{$category->category_url}}" id="{{$category->category_url}}" name="categories[]">
                <label class="form-check-label" for="{{$category->category_url}}">
                    {{$category->category}}
                </label>
            </div>

            <?php $i += 1;?>
            @endforeach
        </div>
    </div>
    
    {!! $errors->first('categories', '<small class="help-block">:message</small>') !!}

    <div class="position-relative">
        <a href="javascript:history.back()" class="btn btn-secondary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
        </a>
        <input class="btn btn-primary" type="submit" value="Envoyer">
    </div>
</form>
@endsection