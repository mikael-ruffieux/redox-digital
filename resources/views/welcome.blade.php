<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Redox Digital | Site en maintenance</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- light/dark mode switcher-->
    <meta name="color-scheme" content="dark light">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">

</head>

<body>
    <div class="bg-contact2" style="background-image: url('{{ asset('assets/img/layout/bg-contact.jpg') }}');">
        <div class="container-contact2">
            <div class="wrap-contact2">
                <form class="contact2-form validate-form">
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
                        <!--<br/><br/>
                        Vous pouvez toutefois nous contacter via ce <strong>formulaire de contact</strong>. Nous nous réjouissons de vous lire !-->
                    </span>

                    <!--<div class="wrap-input2 validate-input" data-validate="Name is required">
                        <input class="input2" type="text" name="name">
                        <span class="focus-input2" data-placeholder="Nom"></span>
                    </div>
                    <div class="wrap-input2 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input2" type="text" name="email">
                        <span class="focus-input2" data-placeholder="E-mail"></span>
                    </div>
                    <div class="wrap-input2 validate-input" data-validate="Message is required">
                        <textarea class="input2" name="message"></textarea>
                        <span class="focus-input2" data-placeholder="Message"></span>
                    </div>
                    <div class="container-contact2-form-btn">
                        <div class="wrap-contact2-form-btn">
                            <div class="contact2-form-bgbtn"></div>
                            <button class="contact2-form-btn">
                                Envoyer
                            </button>
                        </div>
                    </div>-->
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll(".input2").forEach(element => {
            element.addEventListener("blur", evt => {
                if(element.value) {
                    element.classList = "input2 has-val";
                }
            })
        });
    </script>
</body>

</html>



<!-- /*

<img src="{{ asset('assets/img/logo/Redox-Digital_Logotype-slogan-blanc-rouge.png') }}" alt="Logo Redox Digital" style="width: 100%; max-width: 350px;">

@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
@endif */ -->
