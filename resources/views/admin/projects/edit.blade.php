@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row pt-3">
        <div class="col-12">
            <h1>Modifier <b>{{$project->title}}</b></h1>
        </div>
    </div>

    <form method="POST" action="{{route('projects.update', [$project->id])}}" accept-charset="UTF-8" enctype="multipart/form-data">
        @method("PUT")
        @csrf

        <div class="row">
            <div class="col-12 mb-3">
                <a class="btn btn-secondary" href="{{route('projects.index')}}">Retour</a>
            </div>

            <div class="col-12">
                <h3>Données globales</h3>
            </div>

            <!-- Client -->
            <div class="col-12">
                <div class="form-group">
                    <label for="client_id">Client</label>
                    <select name="client_id" class="form-control">
                    @foreach ($clients as $client)
                        <option {{$client->id == $project->client_id ? "selected" : ""}} value="{{$client->id}}">{{$client->id}} - {{$client->name}}</option>
                    @endforeach
                </select>
                {!! $errors->first('client_id', '<small class="help-block text-danger">:message</small>') !!}
                <small>Le client n'est pas encore enregistré ? <a href="{{route('clients.create')}}">Créez un nouveau profil-client !</a> <i>(Attention, les modifications apportées à ce projet ne seront pas enregistrées.)</i></small>
                </div>
            </div>

            <!-- Archived (pas dans la création) -->
            <div class="col-12">
                <div class="form-group">
                    <label>Archivé ?</label>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="archived" id="archived_false" value="0"  {{!$project->archived ? "checked" : ""}}>
                                <label class="form-check-label" for="archived_false">Publié</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="archived" id="archived_true" value="1"  {{$project->archived ? "checked" : ""}}>
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
                    <input type="text" class="form-control" name="external_url" id="external_url" value="{{$project->external_url}}">
                    {!! $errors->first('external_url', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Indiquez l'adresse absolue. Si rempli, un bouton s'affichera dans l'entête du projet.</small>
                </div>
            </div>

            <!-- Date -->
            <div class="col-12">
                <div class="form-group">
                    <label for="date">Date du projet</label>
                    <input type="date" class="form-control" name="date" id="date" value="{{$project->dateValue()}}" >
                    {!! $errors->first('date', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Si la date exacte n'est pas connue, mettre une date estimée. Seuls le mois et l'année seront affichés.</small>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">

            <div class="col-12">
                <h3>Entête</h3>
            </div>

            <!-- Title -->
            <div class="col-12">
                <div class="form-group">
                    <label for="title">Titre du projet</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$project->title}}" >
                    {!! $errors->first('title', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <!-- Categories -->
            <div class="col-12">
                <div class="form-group">
                    <div class="row">
                        @foreach ($categories as $cat)
                        <div class="col-12 col-sm-6">
                            @if (!$cat->isChild)
                            <label><b>{{$cat->title}}</b></label>
                            @else
                            <div class="form-check">
                                <input  class="form-check-input" type="checkbox" value="{{$cat->id}}" id="cat{{$cat->id}}" name="categories[]" {{in_array($cat->id, $project->categoriesId()) ? "checked" : ""}}>
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
                    <textarea name="custom_summary" id="custom_summary" rows="6" class="form-control">{{$project->custom_summary}}</textarea>
                    {!! $errors->first('custom_summary', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Laisser vide pour automatiquement utiliser la première partie du contexte.</small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h3>Contexte</h3>
            </div>

            <!-- Context custom title -->
            <div class="col-12">
                <div class="form-group">
                    <label for="context_title">Section "Contexte" - Titre personnalisé</label>
                    <input type="text" class="form-control" name="context_title" id="context_title" value="{{$project->context_title}}">
                    {!! $errors->first('context_title', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Si laissé vide, "Contexte".</small>
                </div>
            </div>

            <!-- Context -->
            <div class="col-12">
                <div class="form-group">
                    <label for="context_desc" class="required">Contexte du projet</label>
                    <textarea name="context_desc" id="context_desc" rows="6" class="form-control" required>{{$project->context_desc}}</textarea>
                    {!! $errors->first('context_desc', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <div class="col-12">
                <h4>Vidéo</h4>

                <div class="form-group">
                    <label for="video_source">Source de la vidéo</label>
                    <select name="video_source" class="form-control">
                        <option value="youtube" {{$project->video_source == "youtube" ? "selected" : ""}}>YouTube</option>
                        <option value="vimeo" {{$project->video_source == "vimeo" ? "selected" : ""}}>Vimeo</option>
                        <option value="other" {{$project->video_source == "other" ? "selected" : ""}}>Autre</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="video_url">URL de la vidéo</label>
                    <input type="text" class="form-control" name="video_url" id="video_url" value="{{$project->video_url}}">
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
                    <textarea name="design_desc" id="design_desc" rows="6" class="form-control">{{$project->design_desc}}</textarea>
                    {!! $errors->first('design_desc', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Si ce champ de description n'est pas rempli, <b>les grandes images ne seront pas affichées</b>. Il est toutefois nécessaire de mettre une image comme aperçu du projet.</small>
                </div>
            </div>

            <!-- Big images -->
            <div class="col-12">
                <h4 class="required">Grandes images</h4>
                <p>Ces images seront affichées en pleine largeur dans la section "Design".
                    <b class="text-danger">Il est nécessaire d'ajouter au moins une image dans le projet.</b>
                    <i>(1ère image = image d'aperçu)</i>
                </p>
            </div>

            @if (sizeof($images) == 0)
                <div class="col-12"><i>Ce projet n'a pas de galerie.</i></div>
            @else
                @foreach ($images as $image)
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="bg-white p-3 mt-3 rounded shadow">
                        <img src="{{asset($image->url)}}" style="width: 100%; height: auto;">
                    </div>
                </div>                
                @endforeach
            @endif
            <div class="col-12 mt-3">
                <a href="{{route('project.gallery', [$project->id, 'image'])}}" class="btn btn-info">Modifier les grandes images</a>
                <small>Attention, les autres modifications en cours ne seront pas enregistrées.</small>
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
                    <input type="text" class="form-control" name="solution_title" id="solution_title" value="{{$project->solution_title}}">
                    {!! $errors->first('solution_title', '<small class="help-block text-danger">:message</small>') !!}
                    <small>Si laissé vide, "Solutions proposées".</small>
                </div>
            </div>

            <!-- Solutions -->
            <div class="col-12">
                <div class="form-group">
                    <label for="solution_desc" class="required">Solutions apportées au projet</label>
                    <textarea name="solution_desc" id="solution_desc" rows="6" class="form-control" required>{{$project->solution_desc}}</textarea>
                    {!! $errors->first('solution_desc', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <!-- Gallery -->
            <div class="col-12">
                <h4>Galerie</h4>
                <p>Ces photos seront affichées sous forme de galerie dans la section "Solutions".</p>
            </div>
            @if (sizeof($gallery) == 0)
                <div class="col-12"><i>Ce projet n'a pas de galerie.</i></div>
            @else
                @foreach ($gallery as $image)
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="bg-white p-3 mt-3 rounded shadow">
                        <img src="{{asset($image->url)}}" style="width: 100%; height: auto;">
                    </div>
                </div>                
                @endforeach
            @endif
            <div class="col-12 mt-3">
                <a href="{{route('project.gallery', ['project_id' => $project->id, 'type' => 'gallery'])}}" class="btn btn-info">Modifier la galerie</a>
                <small>Attention, les autres modifications en cours ne seront pas enregistrées.</small>
            </div>
        </div>

        <hr>

        <input type="submit" value="Enregistrer les modifications" class="btn btn-primary">
    </form>
    <form method="POST" class="my-3" action="{{route('projects.destroy', [$project->id])}}" accept-charset="UTF-8">
        @csrf
        @method("DELETE")
        <input class="btn btn-danger" type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce projet ? Cette action est irreversible.')" value="Supprimer le projet">
    </form>
</div>
@endsection