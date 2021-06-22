@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row pt-3">
        <div class="col-12">
            <h1>{{$service->title}}</h1>
        </div>
    </div>

    <form>
        <div class="row">
            <div class="col-12 mb-3">
                <a class="btn btn-secondary" href="{{route('services.index')}}">Retour</a>
                <a class="btn btn-info" href="{{route('services.edit', [$service->id])}}">Modifier</a>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="name">Titre du service</label>
                    <input type="text" class="form-control" name="title" readonly value="{{$service->title}}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="description">Description du service</label>
                    <textarea class="form-control" readonly name="description" rows="10">{{$service->description}}</textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="parent_id">Service-parent</label>
                    
                    <select name="parent_id" class="form-control" disabled>
                        @if(isset($service->parent))
                        <option value="{{$service->parent->id}}" selected>{{$service->parent->id}} - {{$service->parent->title}}</option>
                        @else 
                        <option value="null" selected>Aucun</option>
                        @endif
                    </select>
                </div>
            </div>
        </div>
    </form>
    <hr>
    <div class="row">
        <div class="col-12">
            <h3>Accordéons</h3>
            @if(sizeof($service->accordions) == 0)
            <i>Ce service n'a pas d'accordéon associé.</i>
            @else
                @foreach ($service->accordions as $accordion)
                <form class="bg-white p-3 rounded shadow">
                        <div class="form-group">
                            <label for="title" class="">Titre</label>
                            <input type="text" name="title" class="form-control" readonly value="{{$accordion->title}}">
                        </div>
                        <div class="form-group">
                            <label for="description" class="">Description</label>
                            <input type="text" name="description" class="form-control" readonly value="{{$accordion->description}}">
                        </div>
                        <!--
                        <input type="submit" value="Modifier" class="btn btn-primary">
                        <small>Pour modifier un accordéon, il faut sauvegarder les modifications pour chaque accordéon, l'une après l'autre.</small>-->

                </form>
                @endforeach
            @endif

            <!--<a href="{{}}" class="btn btn-success">Créer un nouvel accordéon pour ce service</a>-->
        </div>
    </div>
</div>