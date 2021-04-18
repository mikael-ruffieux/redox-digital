@extends('template_maintenance')

@section('content')
<form class="contact2-form validate-form"
    method="POST" action="{{ url('contact') }}" 
    accept-charset="UTF-8">
    @csrf
    <picture class="contact2-form-img">
        <source 
            srcset="{{ asset('assets/img/logo/Redox-Digital_Logotype-slogan-blanc-rouge.png') }}" 
            media="(prefers-color-scheme: dark)">
        <img src="{{ asset('assets/img/logo/Redox-Digital_Logotype-slogan-noir-rouge.png') }}"
            alt="Redox Digital"/>
    </picture>
    
    <span class="contact2-form-title">
        Site en maintenance
    </span>

    <span class="contact2-form-subtitle">
        Dans le but d'améliorer ses performances, le site <a href="https://redoxdigital.ch">redoxdigital.ch</a> est actuellement en maintenance.
        Merci pour votre compréhension.
        <br/><br/>
        Vous pouvez toutefois nous contacter via ce <strong>formulaire de contact</strong>. Nous nous réjouissons de vous lire !
    </span>

    <div class="wrap-input2 validate-input">
        <input class="input2" type="text" name="name" value="{{old('name')}}">
        <span class="focus-input2" data-placeholder="Nom"></span>
    </div>
    {!! $errors->first('name', '<div class="has-error">:message</div>') !!}

    <div class="wrap-input2 validate-input">
        <input class="input2" type="text" name="email" value="{{old('email')}}" >
        <span class="focus-input2" data-placeholder="E-mail"></span>
    </div>
    {!! $errors->first('email', '<div class="has-error">:message</div>') !!}

    <div class="wrap-input2 validate-input">
        <textarea class="input2" name="text" required>{{old('text')}}</textarea>
        <span class="focus-input2" data-placeholder="Message"></span>
    </div>
    {!! $errors->first('text', '<div class="has-error">:message</div>') !!}

    <div class="container-contact2-form-btn">
        <div class="wrap-contact2-form-btn">
            <div class="contact2-form-bgbtn"></div>
            <button class="contact2-form-btn">
                Envoyer
            </button>
        </div>
    </div>
</form>
@endsection
