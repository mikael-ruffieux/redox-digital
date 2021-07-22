@extends('layouts.contact_layout')

@section('title')
Nous contacter |
@endsection

@section('content')

<form id="contact-form" action="{{route('contact.start.budget.post')}}" method="post">
    @csrf
    <main id="contact">
        <section class="page container">
            <!-- Step 2 -->
            <h3>{{$chat === false ? "Débuter un projet" : "Juste discuter"}}</h3>
            <h2>Quel est <b>votre budget</b> pour ce projet ?</h2>
            <div class="row checkbox-row">
                <div class="col-md-3 col-6 checkbox">
                    <input type="radio" name="budget" id="budget1" value="1" {{!empty(session('budget')) && session('budget') == 1 ? "checked" : ""}}>
                    <label for="budget1">500 - 1'000 CHF</label>
                </div>
                <div class="col-md-3 col-6 checkbox">
                    <input type="radio" name="budget" id="budget2" value="2" {{!empty(session('budget')) && session('budget') == 2 ? "checked" : ""}}>
                    <label for="budget2">1'000 - 2'000 CHF</label>
                </div>
                <div class="col-md-3 col-6 checkbox">
                    <input type="radio" name="budget" id="budget3" value="3" {{!empty(session('budget')) && session('budget') == 3 ? "checked" : ""}}>
                    <label for="budget3">2'000 - 5'000 CHF</label>
                </div>
                <div class="col-md-3 col-6 checkbox">
                    <input type="radio" name="budget" id="budget4" value="4" {{!empty(session('budget')) && session('budget') == 4 ? "checked" : ""}}>
                    <label for="budget4">+ 5'000 CHF</label>
                </div>

                {!! $errors->first('budget', '<small class="contact-form-error">:message</small>') !!}
            </div>

            @include('public.contact.components.navigation', [$step, $steps])
        </section>

        @include('public.contact.components.decorations')

    </main>
</form>
@endsection