<div class="curve curve-small-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="100vw" height="auto" viewBox="0 0 1920 180" preserveAspectRatio="none">
        <path fill="#2B2323" d="M0,0C346,168,1920,180,1920,180H0Z"/>
    </svg>
</div>
<footer>
    <div class="container">
        <div id="footer-top" class="row">
            <div class="col-4 col-md-2">
                <img src="{{asset('storage/assets/img/logo/Redox-Digital_Logotype-final_Redox-Digital_Logotype-pictogramme-blanc-rouge.svg')}}" alt="Redox Digital">
            </div>

            <div class="col-8 col-md-4">
                <h4>Contact</h4>
                <ul>
                    <li>Redox Digital SNC</li>
                    <li>Neuchâtel - La Gruyère</li>
                    <li><a href="mailto:info@redoxdigital.ch">info@redoxdigital.ch</a></li>
                </ul>
                <a href="#" class="btn btn-sm btn-outline-white mt-3">Un projet en tête ?</a>
            </div>
            <div class="col-12 col-md-3">
                <h4>Navigation</h4>
                <ul>
                    <li><a href="{{route('home')}}">Accueil</a></li>
                    <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                    <li><a href="{{route('about')}}">À propos</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h4>Services</h4>
                <ul>
                    <li><a href="{{route('services', ["web-digital"])}}">Web digital</a></li>
                    <li><a href="{{route('services', ["creation-de-contenu"])}}">Création de contenus digitaux</a></li>
                </ul>
            </div>
        </div>
        <div id="footer-bottom" class="row">
            <div class="col-0 col-sm-2"><!-- spacer --></div>
            <div class="col-12 col-sm-7">
            <h4>Suivez-nous</h4>
                <ul id="footer-icons-list">
                    <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/redoxdigital.ch/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/redox-digital" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-3"><p>© Redox Digital 2021</p></div>
        </div>
    </div>
</footer>