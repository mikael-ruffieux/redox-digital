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

    <!-- External styles -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Internal styles -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    <!-- Internal scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <link rel="icon" type="image/svg" href="{{ asset('storage/assets/img/logo/Redox-Digital_Logotype-final_Redox-Digital_Logotype-pictogramme-blanc-rouge.svg') }}">

    <title>@yield("title") Curriculum Vitae</title>
</head>
<body id="cv">
    <!-- Main menu -->
    <nav id="cv-nav">
        <div class="container">
            <a href="#intro" class="logo">
                <h2 class="red-dot">CV</h2>
            </a>
            <!-- Menu -->
            <div class="main-menu">
                <button id="burger-menu" type="button">
                    <i class="far fa-align-right"></i>
                    <i class="fal fa-times"></i>
                </button>
                <ul id="menu">
                    <li><a href="#intro">Introduction</a></li>
                    <li><a href="#studies">Formations</a></li>
                    <li><a href="#work">Parcours professionnel</a></li>
                    <li><a href="#references">Références</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li>
                        <div class="menu-cta">
                            <a class="btn btn-black" href="{{route('contact.intro')}}">Me contacter</a>
                        </div>
                    </li>
                    <div id="socials">
                        <a href="https://www.instagram.com/redox_mikael/" target="_blank">
                            <div class="social-text-container"><small>Suivez-moi sur Insta'</small></div>
                           <span class="fa-stack">
                               <i class="fas fa-circle fa-stack-2x"></i>
                               <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                           </span>
                       </a>
                        <a href="https://www.facebook.com/redox.mikael" target="_blank">
                            <div class="social-text-container"><small>Envie de devenir amis ?</small></div>
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <a href="https://www.linkedin.com/in/mikael-ruffieux/" target="_blank">
                             <div class="social-text-container"><small>Mon profil professionnel</small></div>
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <a href="https://github.com/mikael-ruffieux" target="_blank">
                             <div class="social-text-container"><small>Du code, du code ...</small></div>
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /Main menu -->

    @yield("content")


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('js/menu.js')}}"></script>
</body>
</html>