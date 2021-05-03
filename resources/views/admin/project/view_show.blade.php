@extends('admin.template')

@section('contenu')
<h5 class="card-title">Fiche de projet</h5>

<div>
    <div class="form-group">
        <label class="switch">
        @if(!$project->archived)
            <input name="archived" id="archived" type="checkbox" class="form-check-input" value="1" disabled>
        @else
            <input name="archived" id="archived" type="checkbox" class="form-check-input" value="1" checked disabled>
        @endif
            <span class="slider round"></span>
        </label>
        <div id="archived-label" for="archived"><span class='badge badge-success'>Projet actif</span></div>
    </div>

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
    
    <div class="row mb-3 ml-2 position-relative">
            @foreach ($categories as $category)
                @if(isset($selectedCat) && sizeof($selectedCat) > 0)
                    @foreach ($selectedCat as $cat)
                        <?php 
                        if($cat->category_url == $category->category_url) {
                            $isChecked = true;
                            break;
                        } else { $isChecked = false;} ?>
                    @endforeach
                @else
                    <?php $isChecked = false; ?>
                @endif

                <div class="form-check col-12 col-sm-6">
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

    <div class="position-relative">
        <a href="javascript:history.back()" class="btn btn-secondary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
        </a>
        <a href="{{route('projects.edit', [$project->id])}}" class="btn btn-primary">Modifier</a>
    </div>
</div>
@endsection