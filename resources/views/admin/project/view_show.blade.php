@extends('admin.template')

@section('contenu')
<h5 class="card-title">Fiche de projet</h5>

<div>
    <div class="form-group">
        <input class="form-control" placeholder="Titre" name="titre" type="text" value="{{$project->titre}}" disabled>
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="URL du projet" name="url" type="text" value="{{$project->url}}" disabled>
    </div>
    <div class="form-group">
        <textarea class="form-control" placeholder="Contenu" name="contenu" cols="50" rows="10" disabled>{{$project->contenu}}</textarea>
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
                    disabled 
                    <?php echo $isChecked ? 'checked' : ''?>>
                <label class="form-check-label" for="{{$category->category_url}}">
                    {{$category->category}}
                </label>
            </div>
            @endforeach
        </div>
    </div>

    <div class="position-relative">
        <a href="javascript:history.back()" class="btn btn-secondary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
        </a>
        <a href="{{route('projects.edit', [$project->id])}}" class="btn btn-primary">Modifier</a>
    </div>
</div>
@endsection