@extends('layouts.contact_layout')

@section('title')
Login |
@endsection

@section('content')
<form id="contact-form" method="POST" action="{{ route('login') }}" class="contact2-form validate-form">
    @csrf

    <main id="contact">
        <section id="contact-intro" class="page container" style="z-index: 10">
            <!-- Step 0 -->
            <div class="row">
                <div class="col-md-8 col-12">
                    <h3>Yo !</h3>
                    <h2 class="mb-4">
                        <b>{{ __('Login') }}</b>
                    </h2>

                    <input type="text" name="email" id="email" placeholder="E-mail" value="{{old('email')}}" required autofocus>
                    <span class="focus-input"></span>
        
                    {!! $errors->first('email', '<small class="contact-form-error">:message</small>') !!}

                    <input class="mt-3" type="password" name="password" id="password" placeholder="Mot de passe" value="{{old('email')}}">
                    <span class="focus-input"></span>
        
                    {!! $errors->first('password', '<small class="contact-form-error">:message</small>') !!}

                    <button class="btn btn-fa-white mt-3" id="send-btn" type="submit">
                        Se connecter
                    </button>
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
</form>
@endsection
