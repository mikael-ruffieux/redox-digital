@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('password.update') }}" class="contact2-form validate-form">
    @csrf

    <span class="contact2-form-title">
        {{ __('Reset Password') }}
    </span>

    <input type="hidden" name="token" value="{{ $token }}">

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

    <div class="wrap-input2 validate-input">
        <input class="input2" type="password" name="password_confirmation" required>
        <span class="focus-input2" data-placeholder="{{ __('Confirmer mot de passe') }}"></span>
    </div>

    <div class="container-contact2-form-btn">
        <div class="wrap-contact2-form-btn">
            <div class="contact2-form-bgbtn"></div>
            <button class="contact2-form-btn" type="submit">
                {{ __('Reset Password') }}
            </button>
        </div>
    </div>
</form>
@endsection
