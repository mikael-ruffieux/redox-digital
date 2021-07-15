@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <h3>Galerie du projet <b>{{$project->title}}</b></h3>
            <a class="btn btn-secondary" href="{{route('projects.edit', [$project->id])}}">Retour</a>
        </div>
            @if(sizeof($project->images) == 0)
            <div class="col-12"><i>Ce projet n'a pas d'image en galerie.</i></div>
            @else
                @foreach ($project->images as $image)
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="bg-white p-3 mt-3 rounded shadow">
                        <img src="{{asset($image->url)}}" alt="" style="width: 100%; height: auto; margin-bottom: 1rem;">

                        <form method="POST" action="{{route('project.gallery.destroy', [$project->id, $image->id])}}" class="inline-form" accept-charset="UTF-8">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="Supprimer" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette image ? Cette action est irreversible.')">
                        </form>
                    </div>

                </div>
                @endforeach
            @endif
    </div>

    <!-- Galerie -->
    <div class="row pt-3">
        <div class="col-12">
            <h4>Ajouter de nouvelles images</h4>
            <form method="POST" action="{{route('project.gallery.add', [$project->id])}}" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" id="images" name="images[]" accept="image/png, image/jpeg" multiple>
                    {!! $errors->first('images', '<small class="help-block text-danger">:message</small>') !!}
                </div>

                <input type="submit" value="Enregistrer" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection