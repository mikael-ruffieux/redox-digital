@extends('layouts.contact_layout')

@section('title')
Redox Prod |
@endsection

@section('content')
<form id="contact-form" method="POST" action="{{ route('login') }}" class="contact2-form validate-form">
    @csrf

    <main id="contact">
        <section id="contact-intro" class="page container" style="z-index: 10">
            <!-- Step 0 -->
            <div class="row">
                <div class="col-12">
                    <h3>Redox Prod laisse place à ...</h3>
                    <h2 class="mb-4">
                        <b>Redox Digital</b>
                    </h2>

                    <p><b>Redox Prod</b>, c'est terminé.</p>
                    
                    <p>Après plusieurs années de travail, 
                        la petite entreprise s'agrandit, et devient <b>Redox Digital</b>, 
                        agence digitale créatrice d'expériences web et vidéo !</p>

                    <p>Découvrez nos anciens et nouveaux services, ainsi que la nouvelle équipe Redox.</p>

                    <a class="btn btn-white" href="https://www.redoxdigital.ch">Vers le site de Redox Digital</a>
                    <a class="btn btn-outline-white ml-2" href="#">Voir l'ancien site</a>
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
    </main>
</form>
@endsection
