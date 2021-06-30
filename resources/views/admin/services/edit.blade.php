@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row pt-3">
        <div class="col-12">
            <h1>Modifier le service <b>{{$service->title}}</b></h1>
        </div>
    </div>

    <form method="POST" action="{{route('services.update', [$service->id])}}" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12 mb-3">
                <a class="btn btn-secondary" href="{{route('services.index')}}">Retour</a>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="name">Titre du service</label>
                    <input type="text" class="form-control" name="title"  value="{{$service->title}}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="description">Description du service</label>
                    <textarea class="form-control"  name="description" rows="10">{{$service->description}}</textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="parent_id">Service-parent</label>
                    <select name="parent_id" class="form-control">
                        <option value="null">Aucun</option>
                    @foreach ($parents as $parent)
                        <option value="{{$parent->id}}" {{$parent->id == $service->parent_id ? 'selected' : ''}}>{{$parent->id}} - {{$parent->title}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="image">Image</label><br>
                    <img src="{{asset($service->image)}}" alt="{{$service->title}}" style="max-width: 100%; max-height: 200px;"><br><br>

                    <input type="file" id="image" name="image" accept="image/png, image/jpeg">
            
                    {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                </div>
            </div>
        </div>
        <input type="submit" value="Enregistrer les modification du service" class="btn btn-primary">
    </form>

    <form method="POST" class="mt-3" action="{{route('services.destroy', [$service->id])}}" accept-charset="UTF-8">
        @csrf
        @method("DELETE")
        <input class="btn btn-danger" type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce service ? Tous les accordéons correspondants seront supprimés. Cette action est irreversible.')" value="Supprimer le service">
    </form>
    <hr>
    <div class="row">
        <div class="col-12">
            <h3>Accordéons</h3>
            @if(sizeof($service->accordions) == 0)
            <i>Ce service n'a pas d'accordéon associé.</i>
            @else
                @foreach ($service->accordions as $accordion)
                <div class="bg-white p-3 my-3 rounded shadow">
                    <form method="POST" action="{{route('accordions.update', [$accordion->id])}}" accept-charset="UTF-8">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="service_id" value="{{$service->id}}">

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Titre</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control"  value="{{$accordion->title}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" name="description" class="form-control"  value="{{$accordion->description}}">
                            </div>
                        </div>
                        <small class="d-block pb-3">Pour modifier un accordéon, il faut sauvegarder les modifications pour chaque accordéon, l'une après l'autre.</small>
                        <input type="submit" value="Enregistrer les modifications" class="btn btn-primary">
                        
                    </form>
                    <form method="POST" class="mt-3" action="{{route('accordions.destroy', [$accordion->id])}}" accept-charset="UTF-8">
                        @csrf
                        @method("DELETE")
                        <input class="btn btn-danger" type="submit" onclick="return confirm('Voulez-vous vraiment supprimer cet accordéon ? Cette action est irreversible.')" value="Supprimer l'accordéon">
                    </form>
                </div>
                @endforeach
            @endif

            <a href="{{route('accordions.create', ['service_id' => $service->id])}}" class="btn btn-success">Créer un nouvel accordéon pour ce service</a>
        </div>
    </div>
</div>
@endsection