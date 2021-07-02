<footer>
    <div class="container">
        <div id="footer-top" class="row">
            <div class="col-12 col-md-6">
                <img src="{{asset('storage/assets/img/logo/Redox-Digital_Logotype-final_Redox-Digital_Logotype-pictogramme-blanc-rouge.svg')}}" alt="Redox Digital">
                <div id="footer-cta">
                    <p>Vous avez un projet en tête ?</p>
                    <a class="btn btn-white" href="{{route('contact.intro')}}">nous contacter</a>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-6">
                        <h4>Navigation</h4>
                        <ul>
                            <li><a href="{{route('home')}}">Accueil</a></li>
                            <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                            <li><a href="{{route('about')}}">À propos</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="{{route('services', ["web-digital"])}}">Web digital</a></li>
                            <li><a href="{{route('services', ["creation-de-contenu"])}}">Création de contenus digitaux</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="footer-bottom" class="row">
            <ul id="footer-icons-list" class="col-6 col-sm-3">
                <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/redoxdigital.ch/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/company/redox-digital" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
            </ul>

            <div class="col-6 col-sm-3"><p>Neuchâtel - La Gruyère</p></div>
            <div class="col-6 col-sm-3"><a href="mailto:info@redoxdigital.ch">info@redoxdigital.ch</a></div>
            <div class="col-6 col-sm-3"><p>© Redox Digital 2021</p></div>
        </div>
    </div>
</footer>