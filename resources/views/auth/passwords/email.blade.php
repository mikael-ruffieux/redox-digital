@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <span class="contact2-form-title">
        {{ __('Reset Password') }}
    </span>

    <div class="wrap-input2 validate-input">
        <input class="input2" type="text" name="email" value="{{old('email')}}" autofocus>
        <span class="focus-input2" data-placeholder="{{ __('E-mail') }}"></span>
    </div>
    {!! $errors->first('email', '<div class="has-error">:message</div>') !!}

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
