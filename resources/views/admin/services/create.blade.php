@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row pt-3">
        <div class="col-12">
            <h1>Créer un nouveau service</h1>
        </div>
    </div>

    <form method="POST" action="{{route('services.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-12 mb-3">
                <a class="btn btn-secondary" href="{{route('services.index')}}">Retour</a>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="name">Titre du service</label>
                    <input type="text" class="form-control" name="title"  value="{{old('title')}}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="description">Description du service</label>
                    <textarea class="form-control"  name="description" rows="10">{{old('description')}}</textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="parent_id">Service-parent</label>
                    <select name="parent_id" class="form-control">
                        <option value="null">Aucun</option>
                    @foreach ($parents as $parent)
                        <option value="{{$parent->id}}">{{$parent->id}} - {{$parent->title}}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="image">Image</label><br>
            
                    <input type="file" id="image" name="image" accept="image/png, image/jpeg">
            
                    {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                </div>
            </div>
        </div>
        <input type="submit" value="Créer le service" class="btn btn-primary">
    </form>
</div>
@endsection