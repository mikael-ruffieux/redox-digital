@extends('template')

@section('title')
Nous contacter
@endsection

@section('content')
<form id="contact-form" action="{{route('contact.start.budget.post')}}" method="post">
    @csrf
    <main id="contact">
        <section class="page container">
            <!-- Step 2 -->
            <h4>{{$chat === false ? "Débuter un projet" : "Juste discuter"}}</h4>
            <h2>Quel est <b>votre budget</b> pour ce projet ?</h2>
            <div class="row">
                <div class="col-3 checkbox">
                    <input type="radio" name="budget" id="budget1" value="1">
                    <label for="budget1">500 - 1'000 CHF</label>
                </div>
                <div class="col-3 checkbox">
                    <input type="radio" name="budget" id="budget2" value="2">
                    <label for="budget2">1'000 - 2'000 CHF</label>
                </div>
                <div class="col-3 checkbox">
                    <input type="radio" name="budget" id="budget3" value="3">
                    <label for="budget3">2'000 - 5'000 CHF</label>
                </div>
                <div class="col-3 checkbox">
                    <input type="radio" name="budget" id="budget4" value="4">
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