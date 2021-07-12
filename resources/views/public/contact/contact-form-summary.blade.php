@extends('template')

@section('title')
Nous contacter
@endsection

@section('content')
<form id="contact-form" action="{{route('contact.send')}}" method="post">
    @csrf
    <main id="contact">
        <section class="page container">
            <!-- Last step -->
            <h2>Résumé de <b>votre demande</b> :</h2>

            @foreach ($results as $result)
            <h4>{{$result['label']}}</h4>
            <p>{{$result['value']}}</p>
            @endforeach

            @include('public.contact.components.navigation', [$step, $steps])
        </section>

        @include('public.contact.components.decorations')

    </main>
</form>
@endsection