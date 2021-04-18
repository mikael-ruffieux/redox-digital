@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}" class="contact2-form validate-form">
    @csrf
    
    <span class="contact2-form-title">
        {{ __('Login') }}
    </span>

    <div class="wrap-input2 validate-input">
        <input class="input2" type="text" name="email" value="{{old('email')}}" autofocus>
        <span class="focus-input2" data-placeholder="{{ __('E-mail') }}"></span>
    </div>
    {!! $errors->first('email', '<div class="has-error">:message</div>') !!}

    <div class="wrap-input2 validate-input">
        <input class="input2" type="password" name="password" value="{{old('password')}}">
        <span class="focus-input2" data-placeholder="{{ __('Mot de passe') }}"></span>
    </div>
    {!! $errors->first('password', '<div class="has-error">:message</div>') !!}

    <div class="container-contact2-form-btn">
        <div class="wrap-contact2-form-btn">
            <div class="contact2-form-bgbtn"></div>
            <button class="contact2-form-btn" type="submit">
                {{ __('Login') }}
            </button>
        </div>
    </div>
    @if (Route::has('password.request'))
    <div class="btn-link">
        <a href="{{ route('password.request') }}">
            {{ __('Mot de passe oublié ?') }}
        </a>
    </div>
    @endif
</form>
@endsection
