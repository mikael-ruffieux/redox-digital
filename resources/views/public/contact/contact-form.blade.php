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

    <div id="curve-top" class="enters-from-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="100vw" height="100%" viewBox="0 0 1920 360"
            preserveAspectRatio="none">
            <path fill="#C72400" d="M0,360C624,0,1920,0,1920,0H0Z"  />
        </svg>
    </div>
    
    <div id="curve-bottom" class="enters-from-right">
        <svg xmlns="http://www.w3.org/2000/svg" width="100vw" height="100%" viewBox="0 0 1920 360" preserveAspectRatio="none">
            <path fill="#C72400" d="M1920,0C1296,360,0,360,0,360H1920Z"/>
        </svg>
    </div>
    
    <div id="return-button">
        <a title="Retour à l'accueil" href="{{route('home')}}"><i class="fas fa-home"></i></a>
    </div>
</main>




@endsection