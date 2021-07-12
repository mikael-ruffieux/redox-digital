@extends('template')

@section('title')
Nous contacter
@endsection

@section('content')
<form id="contact-form" action="{{route('contact.start.project-type.post')}}" method="post">
    @csrf
    <main id="contact">
        <section class="page container">
            <!-- Step 2 -->
            <h4>{{$chat === false ? "Débuter un projet" : "Juste discuter"}}</h4>
            <h2>Quel <b>type de projet</b> souhaitez-vous entreprendre ?</h2>

            <div class="row">
                <div class="col-3 checkbox">
                    <input type="radio" name="project_type" id="project_web" value="1">
                    <label for="project_web">Web</label>
                </div>
                <div class="col-3 checkbox">
                    <input type="radio" name="project_type" id="project_video" value="2">
                    <label for="project_video">Vidéo</label>
                </div>
                <div class="col-3 checkbox">
                    <input type="radio" name="project_type" id="project_marketing" value="3">
                    <label for="project_marketing">Marketing</label>
                </div>
                <div class="col-3 checkbox">
                    <input type="radio" name="project_type" id="project_no-idea" value="4">
                    <label for="project_no-idea">Je ne sais pas encore trop ...</label>
                </div>
            </div>

            {!! $errors->first('project_type', '<small class="contact-form-error">:message</small>') !!}

            @include('public.contact.components.navigation', [$step, $steps])
        </section>

        @include('public.contact.components.decorations')

    </main>
</form>
@endsection