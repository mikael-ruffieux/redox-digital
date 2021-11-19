<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Google Tag Manager -->
    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K5WGZML');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Chez Redox Digital, nous concevons votre communication digitale de A à Z en créant des produits digitaux qui vous démarquent.">
    <meta name="keywords" content="réalisation vidéo, création de site web, marketing digital, agence digitale, neuchatel, fribourg, gruyère">
    <meta name="author" content="Redox Digital SNC">

    <!-- Leaflet -->
    <!--<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>-->

    <!-- External styles -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Internal styles -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    <!-- Internal scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <link rel="icon" type="image/svg" href="{{ asset('storage/assets/img/layout/favicon.svg') }}">

    <title>{{$page_title}} | Redox Digital</title>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5WGZML"
    height="0" width="0" style="display:none;visibility:hidden;"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Main menu -->
    @include('layouts.menu')
    <!-- /Main menu -->

    <div id="error-page">
        <section id="error-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="all-caps color-red">Erreur {{$errorCode}}</h3>
                        <h1 class="red-dot">{{$page_title}}</h1>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-12">
                        <p>
                            @isset($page_description)
                            {{$page_description}}
                            @else
                            Nos services sont malheureusement indisponibles en ce moment. Merci de revenir plus tard. Nous nous excusons pour le désagrément.
                            @endisset
                        </p>
                        <p class="pb-3">Si vous cherchez à nous contacter, vous pouvez le faire à notre adresse <a href="mailto:info@redoxdigital.ch" class="color-red"><span id="mail-info-inline"></span></a></p>

                        @if($errorCode == "404")
                        <a href="{{route('home')}}" class="btn btn-primary">Retour à l'accueil</a>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('js/menu.js')}}"></script>
    
</body>
</html>