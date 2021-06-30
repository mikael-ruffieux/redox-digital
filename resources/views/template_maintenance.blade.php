<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Redox Digital | Site en maintenance</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- light/dark mode switcher-->
    <meta name="color-scheme" content="dark light">

    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/Redox-Digital_Logotype-pictogramme-blanc-rouge.png') }}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">

</head>

<body>
    <div class="bg-contact2" style="background-image: url('{{ asset('assets/img/layout/bg-contact.jpg') }}');">
    
    @if (Route::has('login'))
        <div class="admin-menu">
            @auth
                <a href="{{ url('admin.home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    @endif

        <div class="container-contact2">
            <div class="wrap-contact2">
                @yield('content')
            </div>
        </div>
    </div>

    <script>
        let inputs = document.querySelectorAll(".input2");

        const checkOnce = () => {
            inputs.forEach(elt => {
                if(elt.value) {elt.classList = "input2 has-val"};
            })

            console.log("checked once");
        }

        checkOnce();

        inputs.forEach(element => {
            element.addEventListener("blur", evt => {
                if(element.value) {
                    element.classList = "input2 has-val";
                }
            })
        });


    </script>
</body>

</html>