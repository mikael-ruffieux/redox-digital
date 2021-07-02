@extends('layouts.contact_layout')

@section('title')
Nous contacter |
@endsection

@section('content')
<main id="contact">
    <section class="page container" id="step0">
        <!-- Step 0 -->
        <div class="row">
            <div class="col-md-8 col-12">
                <h2>
                    Bien le bonjour !<br>
                    <b>Commençons par le commencement</b>
                </h2>
                <a class="btn btn-white mt-4" href="{{route('contact.start-a-project')}}">commencer un projet</a>
                <a class="btn btn-white ml-3 mt-4" href="{{route('contact.just-chat')}}">juste discuter</a>
            </div>
        </div>
    </section>
</main>
@endsection