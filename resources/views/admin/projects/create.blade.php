@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row pt-3">
        <div class="col-12">
            <h1>Enregistrer un <b>nouveau projet</b></h1>
        </div>
    </div>

    <hr>

    <form method="POST" action="{{route('projects.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf

        <div class="row">

            <div class="col-12">
                <h3>Données globales</h3>
            </div>

            <!-- Client -->
            <div class="col-12">
                <div class="form-group">
                    <label for="client_id" class="required">Client</label>
                    <select name="client_id" class="form-control" required>
                    @foreach ($clients as $client)
                        <option value="{{$client->id}}">{{$client->name}} - id : {{$client->id}}</option>
                    @endforeach
                </select>
                {!! $errors->first('client_id', '<small class="help-block text-danger">:message</small>') !!}
                <small>Le client n'est pas encore enregistré ? <a href="{{route('clients.create')}}">Créez un nouveau profil-client !</a> <i>(Attention, les modifications apportées à ce projet ne seront pas enregistrées.)</i></small>
                </div>
            </div>

            <!-- Archived (pas dans la création) -->
            <div class="col-12">
                <div class="form-group">
                    <label class="required">Archivé ?</label>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="archived" id="archived_false" value="0" checked>
                                <label class="form-check-label" for="archived_false">Publié</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="archived" id="archived_true" value="1">
                                <label class="form-check-label" for="archived_true">Archivé</label>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- External URL -->
            <div class="col-12">
                <div class="form-group">
                    <label for="external_url">URL externe vers le projet</label>
                    <input type="text" class="form-control" name="external_url" id="external_url" value="{{old('external_url')}}">
                    {!! $errors->first('external_url', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Indiquez l'adresse absolue. Si rempli, un bouton s'affichera dans l'entête du projet.</small>
                </div>
            </div>
            

            <!-- Date -->
            <div class="col-12">
                <div class="form-group">
                    <label for="date" class="required">Date du projet</label>
                    <input required type="date" class="form-control" name="date" id="date" value="{{old('date')}}">
                    {!! $errors->first('date', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Si la date exacte n'est pas connue, mettre une date estimée. Seuls le mois et l'année seront affichés.</small>
                </div>
            </div>

            <div class="col-12">
                <hr>
                <h3>Entête</h3>
            </div>

            <!-- Title -->
            <div class="col-12">
                <div class="form-group">
                    <label for="title" class="required">Titre du projet</label>
                    <input required type="text" class="form-control" name="title" id="title" value="{{old('title')}}">
                    {!! $errors->first('title', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <!-- Categories -->
            <div class="col-12">
                <label class="required">Catégories du projet</label>
                <div class="form-group">
                    <div class="row">
                        @foreach ($categories as $cat)
                        <div class="col-12 col-sm-6">
                            @if (!$cat->isChild)
                            <label><b>{{$cat->title}}</b></label>
                            @else
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{$cat->id}}" name="categories[]" id="cat{{$cat->id}}">
                                <label class="form-check-label" for="cat{{$cat->id}}">{{$cat->title}}</label>
                            </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            
            <!-- Custom Summary -->
            <div class="col-12">
                <div class="form-group">
                    <label for="custom_summary">Résumé personnalisé</label>
                    <textarea name="custom_summary" id="custom_summary" rows="6" class="form-control">{{old('custom_summary')}}</textarea>
                    {!! $errors->first('custom_summary', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Laisser vide pour utiliser la première partie du contexte.</small>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="preview_img"><b>Image d'aperçu</b></label>
                    <small>Uniquement affichée sur le portfolio, ou la page d'accueil.</small><br>

                    <input required type="file" id="preview_img" name="preview_img" accept="image/png, image/jpeg" multiple>
                    {!! $errors->first('preview_img', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-12">
                <h3>Contexte</h3>
            </div>

            <!-- Context custom title -->
            <div class="col-12">
                <div class="form-group">
                    <label for="context_title">Section "Contexte" - Titre personnalisé</label>
                    <input type="text" class="form-control" name="context_title" id="context_title" value="{{old('context_title')}}">
                    {!! $errors->first('context_title', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Si laissé vide, "Contexte".</small>
                </div>
            </div>

            <!-- Context -->
            <div class="col-12">
                <div class="form-group">
                    <label for="context_desc" class="required">Contexte du projet</label>
                    <textarea name="context_desc" id="context_desc" rows="6" class="form-control" required>{{old('context_desc')}}</textarea>
                    {!! $errors->first('context_desc', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <div class="col-12">
                <h4>Vidéo</h4>

                <div class="form-group">
                    <label for="video_source">Source de la vidéo</label>
                    <select name="video_source" class="form-control">
                        <option value="youtube">YouTube</option>
                        <option value="vimeo">Vimeo</option>
                        <option value="other">Autre</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="video_url">URL de la vidéo</label>
                    <input type="text" class="form-control" name="video_url" id="video_url" value="{{old('video_url')}}">
                    {!! $errors->first('video_url', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Laisser vide si le projet n'a pas de vidéo.</small>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-12">
                <h3>Section Design</h3>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="design_desc">Description de la section "Design"</label>
                    <textarea name="design_desc" id="design_desc" rows="6" class="form-control">{{old('design_desc')}}</textarea>
                    {!! $errors->first('design_desc', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <!-- Big images -->
            <div class="col-12">
                <h4>Grandes images</h4>
                <p>Ces images seront affichées en pleine largeur dans la section "Design".</p>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="images">Ajouter des photos</label><br>
                    <input type="file" id="images" name="images[]" accept="image/png, image/jpeg" multiple>
                    {!! $errors->first('images', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-12">
                <h3>Section "Solution"</h3>
            </div>

            <!-- Solution custom title -->
            <div class="col-12">
                <div class="form-group">
                    <label for="solution_title">Titre personnalisé</label>
                    <input type="text" class="form-control" name="solution_title" id="solution_title" value="{{old('solution_title')}}">
                    {!! $errors->first('solution_title', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Si laissé vide, "Solutions proposées".</small>
                </div>
            </div>

            <!-- Solutions -->
            <div class="col-12">
                <div class="form-group">
                    <label for="solution_desc" class="required">Solutions apportées au projet</label>
                    <textarea name="solution_desc" id="solution_desc" rows="6" class="form-control" required>{{old('solution_desc')}}</textarea>
                    {!! $errors->first('solution_desc', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <!-- Gallery -->
            <div class="col-12">
                <h4>Galerie</h4>
                <p>Ces photos seront affichées sous forme de galerie dans la section "Solutions".</p>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="gallery">Ajouter des photos</label><br>
                    <input type="file" id="gallery" name="gallery[]" accept="image/png, image/jpeg" multiple>
                    {!! $errors->first('gallery', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>
        </div>


        <hr>
        <div class="save-container">
            <div class="container">
                <a class="btn btn-secondary" href="{{route('projects.index')}}">Retour</a>
                <input type="submit" value="Créer le projet" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
@endsection