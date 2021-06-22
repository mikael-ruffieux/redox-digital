<!doctype html>
<html lang='fr'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1">
        <title>Redox Digital Admin</title>

        <!-- External styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Internal styles -->
        <link rel="stylesheet" href="{{ asset('css/redox-digital.css') }}">

    </head>
    <body class="bg-light">
        @include('admin.components.include_top_menu')

        <main class="my-5">
            @if (session('alert'))
            <div class="container pt-4">
                <div class="alert alert-info">
                    {{session('alert')}}
                </div>
            </div>
            @endif
            @yield('header')
            @yield('contenu')
        </main>
    </body>
</html>