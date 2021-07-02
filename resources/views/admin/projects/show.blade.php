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

            <!-- Date -->
            <div class="col-12">
                <div class="form-group">
                    <label for="date">Date du projet</label>
                    <input type="date" class="form-control" name="date" id="date" value="{{$project->dateValue()}}" disabled>
                    {!! $errors->first('date', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <!-- Template (project_type) -->
            <div class="col-12">
                <div class="form-group">
                    <label>Type de projet</label>
                    <select id="selectType" name="project_type" class="form-control" disabled>
                        <option value="not-selected">-- Choisir le type --</option>
                        <option {{$project->projectable_type == "App\Models\ProjectMarketing" ? "selected" : ""}} value="marketing">Marketing</option>
                        <option {{$project->projectable_type == "App\Models\ProjectVideo" ? "selected" : ""}} value="video">Vidéo</option>
                        <option {{$project->projectable_type == "App\Models\ProjectWeb" ? "selected" : ""}} value="web">Web</option>
                    </select>
                    {!! $errors->first('project_type', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <div class="col-12">
                <hr>
                <h3>Le projet</h3>
            </div>

            <!-- Title -->
            <div class="col-12">
                <div class="form-group">
                    <label for="title">Titre du projet</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$project->title}}" disabled>
                    {!! $errors->first('title', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>

            <!-- Context -->
            <div class="col-12">
                <div class="form-group">
                    <label for="context">Contexte du projet</label>
                    <textarea name="context" id="context" rows="6" class="form-control" disabled>{{$project->context}}</textarea>
                    {!! $errors->first('context', '<small class="help-block text-danger">:message</small>') !!}
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
        </div>

        <!-- Champs spécifiques au type (gérer l'affichage en JS) -->
        @switch($project->projectable_type)
            @case("App\Models\ProjectMarketing")
            <div class="row section" id="type-marketing">
                <div class="col-12">
                    <hr>
                    <h3>Champs spécifiques : <b>projet marketing</b></h3>
                </div>
    
                <!-- Description -->
                <div class="col-12">
                    <div class="form-group">
                        <label for="mark_desc">Description</label>
                        <textarea name="mark_desc" id="mark_desc" rows="6" class="form-control" disabled>{{$project->projectable->mark_desc}}</textarea>
                        {!! $errors->first('mark_desc', '<small class="help-block text-danger">:message</small>') !!}
                    </div>
                </div>
            </div>
                
                @break
            @case("App\Models\ProjectVideo")
            <div class="row section" id="type-video">
                <div class="col-12">
                    <hr>
                    <h3>Champs spécifiques : <b>projet vidéo</b></h3>
                </div>
    
                <!-- Site URL -->
                <div class="col-12">
                    <div class="form-group">
                        <label for="vid_link">Lien de la vidéo</label>
                        <input type="text" name="vid_link" id="vid_link" class="form-control" value="{{$project->projectable->vid_link}}" disabled>
                        <!--<small>Entrez le lien absolu pour intégration : <i>http://www.youtube.com/embed/vid_id</i></small>-->
                        {!! $errors->first('vid_link', '<small class="help-block text-danger">:message</small>') !!}
                    </div>
                </div>

                <div class="col-12">
                    <label>Aperçu de la vidéo</label><br>
                    <iframe id="video-player" type="text/html"
                        width="640" height="360" 
                        src="{{$project->projectable->vid_link}}" 
                        frameborder="0"
                        title="{{$project->title}}"
                        allowfullscreen></iframe>
                </div>
    
                <!-- Description -->
                <div class="col-12">
                    <div class="form-group">
                        <label for="vid_desc">Description</label>
                        <textarea name="vid_desc" id="vid_desc" rows="6" class="form-control" disabled>{{$project->projectable->vid_desc}}</textarea>
                        {!! $errors->first('vid_desc', '<small class="help-block text-danger">:message</small>') !!}
                    </div>
                </div>
            </div>
                
                @break
            @case("App\Models\ProjectWeb")
            <div class="row section" id="type-web">
                <div class="col-12">
                    <hr>
                    <h3>Champs spécifiques : <b>projet web</b></h3>
                </div>
    
                <!-- Site URL -->
                <div class="col-12">
                    <div class="form-group">
                        <label for="site_url">URL du site</label>
                        <input type="text" name="site_url" id="site_url" class="form-control" value="{{$project->projectable->site_url}}" disabled>
                        <small><a href="{{$project->projectable->site_url}}" target="_blank">Vers le site</a></small>
                        <!--<small>Entrez l'adresse absolue : <i>https://...</i></small>-->
                        {!! $errors->first('site_url', '<small class="help-block text-danger">:message</small>') !!}
                    </div>
                </div>
    
                <!-- Description -->
                <div class="col-12">
                    <div class="form-group">
                        <label for="site_desc">Description</label>
                        <textarea name="site_desc" id="site_desc" rows="6" class="form-control" disabled>{{$project->projectable->site_desc}}</textarea>
                        {!! $errors->first('site_desc', '<small class="help-block text-danger">:message</small>') !!}
                    </div>
                </div>
    
                <!-- Site Screenshot -->
                <div class="col-12">
                    <div class="form-group">
                        <label for="site_screenshot">Screenshot du site</label><br>
                        <img src="{{asset($project->projectable->site_screenshot)}}" alt="{{$project->title}}" style="max-width: 100%;">
                        <!--<input type="file" id="site_screenshot" name="site_screenshot" accept="image/png, image/jpeg" value="{{$project->projectable->site_screenshot}}" disabled>-->
                        {!! $errors->first('site_screenshot', '<small class="help-block text-danger">:message</small>') !!}
                    </div>
                </div>
            </div>
                
                @break
        
            @default
            <div class="row section" id="type-none">
                <div class="col-12">
                    <hr>
                    <h3>Champs spécifiques : <i>type indéfini</i></h3>
                    <p><i>Sélectionnez un type de projet.</i></p>
                </div>
    
            </div>
                
        @endswitch
    </form>
</div>
@endsection