@extends('admin.template')

@section('contenu')
<h5 class="card-title">Modifier le projet</h5>

<form method="POST" action="{{route('projects.update', [$project->id])}}" accept-charset="UTF-8">
    @csrf
    @method('PUT')
    <div class="form-group">
        <input class="form-control" placeholder="Titre" name="titre" type="text" value="{{$project->titre}}">
        {!! $errors->first('titre', '<small class="help-block">:message</small>') !!}
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="URL du projet" name="url" type="text" value="{{$project->url}}">
        {!! $errors->first('url', '<small class="help-block">:message</small>') !!}
    </div>
    <div class="form-group">
        <textarea class="form-control" placeholder="Contenu" name="contenu" cols="50" rows="10">{{$project->contenu}}</textarea>
        {!! $errors->first('contenu', '<small class="help-block">:message</small>') !!}
    </div>
    <p class="card-title">Catégories</p>
    
    <div class="row mb-3">
        <div class="col-sm-6 col-12">
        <?php $i = 0; ?>
            @foreach ($categories as $category)


            @foreach ($selectedCat as $cat)
                <?php 
                if($cat->category_url == $category->category_url) {
                    $isChecked = true;
                    break;
                } else { $isChecked = false;} ?>
            @endforeach

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{$category->category_url}}" 
                    id="{{$category->category_url}}" 
                    name="categories[]" 
                    <?php echo $isChecked ? 'checked' : ''?>>
                <label class="form-check-label" for="{{$category->category_url}}">
                    {{$category->category}}
                </label>
            </div>
            @endforeach
            {!! $errors->first('categories', '<small class="help-block">:message</small>') !!}
        </div>
    </div>

    <div class="position-relative pb-2">
        <a href="javascript:history.back()" class="btn btn-secondary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
        </a>
        <input type="submit" class="btn btn-primary" value="Enregistrer">
    </div>
</form>
@endsection