<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- External styles -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Internal styles -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <!-- the 3 first should be in this order -->
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">

    <link rel="icon" type="image/svg" href="{{ asset('assets/img/logo/Redox-Digital_Logotype-final_Redox-Digital_Logotype-pictogramme-blanc-rouge-nomargin.svg') }}">

    <title>Redox Digital @yield("title")</title>
</head>
<body>
    <div id="include-menu"></div> 
    <!-- Main menu -->
    @include('layouts.menu')
    <!-- /Main menu -->

    <main class="container">
        @yield("content")
    </main>

    @include('layouts.footer')
</body>
</html>