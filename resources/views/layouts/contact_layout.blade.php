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
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    <link rel="icon" type="image/svg" href="{{ asset('storage/assets/img/logo/Redox-Digital_Logotype-final_Redox-Digital_Logotype-pictogramme-blanc-rouge.svg') }}">

    <title>@yield("title") Redox Digital</title>
</head>
<body>
    @yield("content")
<script>
    let dots = document.querySelectorAll(".nav-dot");
    let myStep = 1;
    if(dots.length != 0) {
        dots.forEach(dot => {
            dot.addEventListener('click', evt => {
                if(dot.dataset.accessible == "0") {
                    evt.preventDefault();
                    document.getElementById('send-button').click();
                }
            })
        })
    }
    

</script>
</body>
</html>