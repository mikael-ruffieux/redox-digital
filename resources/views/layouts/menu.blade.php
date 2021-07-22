
<nav>
    <div class="container">
        <a href="{{route('home')}}" class="logo">
            <img src="{{ asset('storage/assets/img/logo/Redox-Digital_Logotype-final_Redox-Digital_Logotype-noir-rouge.svg') }}" alt="Redox Digital">
        </a>
        <!-- Menu -->
        <div class="main-menu">
            <button id="burger-menu" type="button">
                <i class="far fa-align-right"></i>
                <i class="fal fa-times"></i>
            </button>
            <ul id="menu">
                <li><a href="{{route('home')}}">Accueil</a></li>
                
                {{--<li class="sub-menu">
                    <a id="sub-menu-btn" href="{{route('services', ['web-digital'])}}">Services</a>
                    <div class="sub-menu-box">
                        <div class="container">
                            <ul class="row">
                                <div class="col-12 col-md-6">
                                    <li class="sub-menu-title"><a href="{{route('services', ['web-digital'])}}">Web digital</a></li>
                                    <li><a href="{{route('services', ['web-digital']) . '#creation-refonte-de-site-web'}}">Création & refonte de site web</a></li>
                                    <li><a href="{{route('services', ['web-digital']) . '#e-commerce'}}">E-commerce</a></li>
                                    <li><a href="{{route('services', ['web-digital',]) . '#marketing-digital'}}">Marketing digital</a></li>
                                    <li><a href="{{route('services', ['web-digital',]) . '#maintenance-web'}}">Maintenance web</a></li>
                                    <li><a href="{{route('services', ['web-digital',]) . '#strategie'}}">Stratégie</a></li>
                                </div>
                                <div class="col-12 col-md-6">
                                    <li class="sub-menu-title"><a href="{{route('services', ["creation-de-contenus-digitaux"])}}">Création de contenus digitaux</a></li>
                                    <li><a href="{{route('services', ["creation-de-contenus-digitaux"]) . '#production-video'}}">Production & captation vidéo</a></li>
                                    <li><a href="{{route('services', ["creation-de-contenus-digitaux"]) . '#photographie'}}">Photographie</a></li>
                                    <li><a href="{{route('services', ["creation-de-contenus-digitaux"]) . '#design-graphique'}}">Design graphique</a></li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </li>--}}
                {{--<li><a href="{{route('portfolio')}}">Portfolio</a></li>
                <li><a href="{{route('about')}}">À propos</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>--}}
                <li>
                    <div class="menu-cta">
                        <a class="btn btn-black" href="{{route('contact.intro')}}">Un project en tête ?</a>
                    </div>
                </li>
                <div id="socials">
                    <a href="https://www.facebook.com/redoxdigital.ch/" target="_blank">
                        <div class="social-text-container"><small>Visitez notre page Facebook</small></div>
                        <span class="fa-stack">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                    <a href="https://www.instagram.com/redoxdigital.ch/" target="_blank">
                         <div class="social-text-container"><small>Suivez-nous sur Insta'</small></div>
                        <span class="fa-stack">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                    <a href="https://www.linkedin.com/company/redox-digital" target="_blank">
                         <div class="social-text-container"><small>Notre entreprise sur LinkedIn</small></div>
                        <span class="fa-stack">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-linkedin-in fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                    <a href="https://www.youtube.com/channel/UCVdloB3aP5I2c03IHIOll3g/" target="_blank">
                         <div class="social-text-container"><small>Allez, lâchez un pouce bleu</small></div>
                        <span class="fa-stack">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </div>
            </ul>
        </div>
    </div>
</nav>

<!--
<div id="contact-btn">
    <a href="{{route('contact.intro')}}"><i class="fas fa-comment-dots"></i></a>
</div>
-->