<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <!-- External styles -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Internal styles -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    <link rel="icon" type="image/svg" href="{{ asset('storage/assets/img/logo/Redox-Digital_Logotype-final_Redox-Digital_Logotype-pictogramme-blanc-rouge.svg') }}">

    <title>@yield("title") Redox Digital</title>
</head>
<body>
    <!-- Main menu -->
    @include('layouts.menu')
    <!-- /Main menu -->

    @yield("content")

    @include('layouts.footer')
</body>
</html>