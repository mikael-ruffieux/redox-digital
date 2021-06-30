@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <h1>Créer un <b>nouvel accordéon</b> pour le service <b>{{$service->title}}</b></h1>
        </div>
    </div>

    <form method="POST" action="{{route('accordions.store')}}" accept-charset="UTF-8">
        @csrf

        <input type="hidden" name="service_id" value="{{$service->id}}">

        <div class="form-group">
            <label for="title" class="">Titre</label>
            <input type="text" name="title" class="form-control" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label for="description" class="">Description</label>
            <input type="text" name="description" class="form-control" value="{{old('description')}}">
        </div>

        <input class="btn btn-primary" type="submit" value="Enregistrer">
    </form>
</div>
@endsection