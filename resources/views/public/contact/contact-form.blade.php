@extends('layouts.contact_layout')

@section('title')
Nous contacter |
@endsection

@section('content')
<main id="contact">
    <section class="container" style="z-index: 10">
        <!-- Step 0 -->
        <div class="row">
            <div class="col-md-8 col-12">
                <h2>
                    Bien le bonjour !<br>
                    <b>Commençons par le commencement</b>
                </h2>
                <a class="btn btn-outline-white" href="start-a-project/step-1">Débuter un projet</a>
                <a class="btn btn-outline-white ml-3" href="just-chat/step-1">Juste discuter</a>
            </div>
        </div>
    </section>

    @include('public.contact.components.decorations')
</main>




@endsection