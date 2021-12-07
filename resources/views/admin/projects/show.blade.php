@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row pt-3">
        <div class="col-12">
            <h1><b>{{$project->title}}</b></h1>
        </div>
    </div>

    <form>
        <div class="row">
            <div class="col-12 mb-3">
                <a class="btn btn-secondary" href="{{route('projects.index')}}">Retour</a>
                <a class="btn btn-info" href="{{route('projects.edit', [$project->id])}}">Modifier</a>
            </div>

            <div class="col-12">
                <h3>Données globales</h3>
            </div>

            <!-- Client -->
            <div class="col-12">
                <div class="form-group">
                    <label for="client_id">Client</label>
                    <select name="client_id" class="form-control" disabled>
                        <option value="{{$project->client->id}}">{{$project->client->id}} - {{$project->client->name}}</option>
                    </select>
                    {!! $errors->first('client_id', '<small class="help-block text-danger">:message</small>') !!}
                    <!--<small>Le client n'est pas encore enregistré ? <a href="{{route('clients.create')}}">Créez un nouveau profil-client !</a> <i>(Attention, les modifications apportées à ce projet ne seront pas enregistrées.)</i></small>-->
                </div>
            </div>

            <!-- Archived (pas dans la création) -->
            <div class="col-12">
                <div class="form-group">
                    <label>Archivé ?</label>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="archived" id="archived_false" value="0" disabled {{!$project->archived ? "checked" : ""}}>
                                <label class="form-check-label" for="archived_false">Publié</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="archived" id="archived_true" value="1" disabled {{$project->archived ? "checked" : ""}}>
                                <label class="form-check-label" for="archived_true">Archivé</label>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- External URL -->
            @if($project->external_url)
            <div class="col-12">
                <div class="form-group">
                    <label for="external_url">URL externe vers le projet</label>
                    <input disabled type="text" class="form-control" name="external_url" id="external_url" value="{{$project->external_url}}">
                </div>
            </div>
            @endif

            <!-- Date -->
            <div class="col-12">
                <div class="form-group">
                    <label for="date">Date du projet</label>
                    <input type="date" class="form-control" name="date" id="date" value="{{$project->dateValue()}}" disabled>
                    {!! $errors->first('date', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <div class="col-12">
                <hr>
                <h3>Entête</h3>
            </div>

            <!-- Title -->
            <div class="col-12">
                <div class="form-group">
                    <label for="title">Titre du projet</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$project->title}}" disabled>
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
                                <input disabled class="form-check-input" type="checkbox" value="{{$cat->id}}" id="cat{{$cat->id}}" {{in_array($cat->id, $project->categoriesId()) ? "checked" : ""}}>
                                <label class="form-check-label" for="cat{{$cat->id}}">{{$cat->title}}</label>
                            </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Custom Summary -->
            @if($project->custom_summary)
            <div class="col-12">
                <div class="form-group">
                    <label for="custom_summary">Résumé personnalisé</label>
                    <textarea disabled name="custom_summary" id="custom_summary" rows="6" class="form-control">{{$project->custom_summary}}</textarea>
                </div>
            </div>
            @endif
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
                    <input disabled type="text" class="form-control" name="context_title" id="context_title" value="{{$project->context_title}}">
                    <small>Si laissé vide, "Contexte".</small>
                </div>
            </div>

            <!-- Context -->
            <div class="col-12">
                <div class="form-group">
                    <label for="context_desc">Contexte du projet</label>
                    <textarea disabled name="context_desc" id="context_desc" rows="6" class="form-control" required>{{$project->context_desc}}</textarea>
                </div>
            </div>

            @if($project->video_url)
            <div class="col-12">
                <h4>Vidéo</h4>

                <div class="form-group">
                    <label for="video_source">Source de la vidéo</label>
                    <select disabled name="video_source" class="form-control">
                        @switch($project->video_source)
                            @case("youtube")
                                <option value="youtube">YouTube</option>
                                @break

                            @case("vimeo")
                                <option value="vimeo">Vimeo</option>
                                @break
                                
                            @default
                                <option value="other">Autre</option>
                        @endswitch
                    </select>
                </div>

                <div class="form-group">
                    <label for="video_url">URL de la vidéo</label>
                    <input disabled type="text" class="form-control" name="video_url" id="video_url" value="{{$project->video_url}}">
                </div>
            </div>
            @endif
        </div>

        <hr>

        <div class="row">
            <div class="col-12">
                <h3>Section Design</h3>
            </div>

            @if($project->design_desc)
            <div class="col-12">
                <div class="form-group">
                    <label for="design_desc">Description de la section "Design"</label>
                    <textarea name="design_desc" id="design_desc" rows="6" class="form-control" disabled>{{$project->design_desc}}</textarea>
                </div>
            </div>
            @endif

            <!-- Big images -->
            <div class="col-12">
                <h4 class="required">Grandes images</h4>
                <p>Ces images seront affichées en pleine largeur dans la section "Design".
                    <b class="text-danger">Il est nécessaire d'ajouter au moins une image dans le projet.</b>
                    <i>(1ère image = image d'aperçu)</i>
                </p>
            </div>
            @if (sizeof($images) == 0)
            <div class="col-12"><i>Ce projet n'a pas de grandes images.</i></div>
            @else
                @foreach ($images as $image)
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="bg-white p-3 mt-3 rounded shadow">
                        <img src="{{asset($image->url)}}" style="width: 100%; height: auto;">
                    </div>
                </div>                
                @endforeach
            @endif
        </div>

        <hr>

        <div class="row">
            <div class="col-12">
                <h3>Section "Solution"</h3>
            </div>

            <!-- Solution custom title -->
            @if($project->solution_title)
            <div class="col-12">
                <div class="form-group">
                    <label for="solution_title">Titre personnalisé</label>
                    <input disabled type="text" class="form-control" name="solution_title" id="solution_title" value="{{$project->solution_title}}">
                    <small>Si laissé vide, "Solutions proposées".</small>
                </div>
            </div>
            @endif

            <!-- Solutions -->
            <div class="col-12">
                <div class="form-group">
                    <label for="solution_desc" class="required">Solutions apportées au projet</label>
                    <textarea disabled name="solution_desc" id="solution_desc" rows="6" class="form-control" required>{{$project->solution_desc}}</textarea>
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
            </div>
    </form>
</div>
@endsection