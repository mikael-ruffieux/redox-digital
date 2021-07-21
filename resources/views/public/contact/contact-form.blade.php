@extends('layouts.contact_layout')

@section('title')
Nous contacter |
@endsection

@section('content')
<main id="contact">
    <section id="contact-intro" class="container" style="z-index: 10">
        <!-- Step 0 -->
        <div class="row">
            <div class="col-md-8 col-12">
                <h3>Bien le bonjour !</h3>
                <h2 class="mb-4">
                    <b>Que souhaitez-vous faire&nbsp;?</b>
                </h2>
                <a class="btn btn-outline-white" href="start-a-project/step-1">Débuter un projet</a>
                <a class="btn btn-outline-white ml-3" href="just-chat/step-1">Juste discuter</a>
            </div>
        </div>
    </section>

    @include('public.contact.components.decorations')
</main>




@endsection