@extends('admin.template_admin_new_element')

@section('form')
<h5 class="card-title">Nouveau projet</h5>
<form method="post" action="">
    <div class="position-relative row form-group"><label for="project_name" class="col-sm-2 col-form-label">Nom du projet</label>
        <div class="col-sm-10"><input name="project_name" id="project_name" type="text" class="form-control"></div>
    </div>

    <div class="position-relative row form-group">
        <label for="exampleSelect" class="col-sm-2 col-form-label">Type(s) de projet</label>
        <div class="col-sm-6 ml-4">
            <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
            <label for="exampleCheck" class="form-check-label">Check me out</label><br/>

            <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
            <label for="exampleCheck" class="form-check-label">Check me out</label><br/>

            <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
            <label for="exampleCheck" class="form-check-label">Check me out</label><br/>

            <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
            <label for="exampleCheck" class="form-check-label">Check me out</label>
        </div>
    </div>


    <div class="position-relative row form-group"><label for="project_description" class="col-sm-2 col-form-label">Description du projet</label>
        <div class="col-sm-10"><textarea name="project_description" id="project_description" class="form-control"></textarea></div>
    </div>

    <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Images</label>
        <div class="col-sm-10"><input name="file" id="exampleFile" type="file" class="form-control-file">
            <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </div>
    </div>

    <div class="position-relative row form-group"><label for="project_video" class="col-sm-2 col-form-label">Lien vidéo</label>
        <div class="col-sm-10"><input name="project_video" id="project_video" type="text" class="form-control"></div>
    </div>

    <fieldset class="position-relative row form-group">
        <legend class="col-form-label col-sm-2">Publication</legend>
        <div class="col-sm-10">
            <div class="position-relative form-check"><label class="form-check-label"><input name="published" type="radio" class="form-check-input" checked> Publier le projet</label></div>
            <div class="position-relative form-check"><label class="form-check-label"><input name="archived" type="radio" class="form-check-input"> Archiver le projet</label></div>
        </div>
    </fieldset>

    <div class="position-relative row form-check">
        <div class="col-sm-10 offset-sm-2">
            <button class="btn btn-secondary">Enregistrer</button>
        </div>
    </div>
</form>
@endsection