@extends('layouts.cv_layout')

@section('title')
Mikaël Ruffieux |
@endsection

@section("content")
<div id="home-page">

<div id="particles-cache"></div>
<div id="particles-js"></div>

<section class="fullpage-section" id="intro">
    <div class="container" id="">
        <div class="row">
            <div class="col-lg-8 col-12" style="z-index: 10;">
                <h1 class="red-dot">Mikaël Ruffieux</h1>
                <h3 class="color-red all-caps">Développeur web & vidéaste</h3>
                <span class="dash-black"></span>
                <p>Bienvenue sur mon curriculum vitæ !</p>
                <p>Vous trouverez sur cette page mes <b>informations personnelles</b>, un aperçu de mon <b>parcours étudiant</b> et <b>professionnel</b>, ainsi que mes <b>réalisations</b> dans le domaine du digital.</p>
                <p>Bonne lecture, et n’hésitez pas à me contacter en cas de questions !</p>

                <a class="btn btn-outline-red" target="_blank" rel="noopener" href="{{asset('storage/assets/docs/CV_MikaelRuffieux_2021.pdf')}}">Imprimer ce CV</a>

                {{--<a href="#about-me" id="bouncing-arrow"><i class="fal fa-arrow-down"></i></a>--}}
            </div>

            <div class="col-lg-4 col-12">
                <img src="{{asset('storage/assets/img/cv/mikael.jpg')}}" alt="Mikaël" id="profile-picture">
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#2b2323'])

<section id="about-me" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">À mon propos</h3>
                <h2 class="red-dot">Informations personnelles</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <p>
                    <i class="fas fa-birthday-cake mr-3"></i>05.10.1996 (25 ans)
                </p>
                <p>
                    <i class="fas fa-map-marker-alt mr-3"></i>
                    Rte de Duvillard 23,<br/>
                    CH-1663 Epagny
                </p>
            </div>
            <div class="col-lg-6 col-12">
                <p><i class="far fa-envelope mr-3"></i><a href="mailto:ruffieux.mikael@gmail.com">ruffieux.mikael@gmail.com</a></p>
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-small-top-right', ['color' => '#2b2323'])

<section id="competences">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Ce que je sais faire</h3>
                <h2 class="red-dot">Compétences</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12 mb-5">
                <h3 class="all-caps"><span class="number">01</span> - Langues</h3>

                <p class="progress-title">Français</p>
                <div class="progress-bg">
                    <div class="progress-bar" style="width: 99%;"><small>Langue maternelle</small></div>
                </div>

                <p class="progress-title">Anglais</p>
                <div class="progress-bg">
                    <div class="progress-bar" style="width: 83%;"><small>C1</small></div>
                </div>

                <p class="progress-title">Allemand</p>
                <div class="progress-bg">
                    <div class="progress-bar" style="width: 66%;"><small>B2</small></div>
                </div>

            </div>

            <div class="col-md-6 col-12 mb-5" id="office">
                <h3 class="all-caps"><span class="number">02</span> - Bureautique</h3>
                <div class="row text-center">
                    <div class="col-6">
                        <i class="fab fa-google-drive fa-3x color-red"></i>
                        <p>G Suite</p>
                    </div>
                    <div class="col-6">
                        <i class="fab fa-microsoft fa-3x color-red"></i>
                        <p>Microsoft Office</p>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-12 mb-5">
                <h3 class="all-caps"><span class="number">03</span> - Graphisme</h3>

                <div class="row bullet-list">
                    <div class="col-6">
                        <p>Lightroom / Premiere&nbsp;Pro</p>
                    </div>
                    <div class="col-6">
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                    </div>

                    <div class="col-6">
                        <p>Photoshop / InDesign</p>
                    </div>
                    <div class="col-6">
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle"></i>
                    </div>

                    <div class="col-6">
                        <p>Illustrator / After&nbsp;Effects</p>
                    </div>
                    <div class="col-6">
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle"></i>
                        <i class="fad fa-circle"></i>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-12 mb-5">
                <h3 class="all-caps"><span class="number">04</span> - Informatique</h3>

                <div class="row bullet-list">
                    <div class="col-6">
                        <p>HTML / CSS / PHP</p>
                    </div>
                    <div class="col-6">
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                    </div>

                    <div class="col-6">
                        <p>Laravel / JavaScript</p>
                    </div>
                    <div class="col-6">
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle"></i>
                    </div>

                    <div class="col-6">
                        <p>WordPress / Drupal / CakePHP</p>
                    </div>
                    <div class="col-6">
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle"></i>
                        <i class="fad fa-circle"></i>
                    </div>

                    <div class="col-6">
                        <p>Java / Python</p>
                    </div>
                    <div class="col-6">
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle full"></i>
                        <i class="fad fa-circle"></i>
                        <i class="fad fa-circle"></i>
                        <i class="fad fa-circle"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-small-bottom-right', ['color' => '#2b2323'])

<section id="studies" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Où est-ce que j'ai appris tout ça&nbsp;?</h3>
                <h2 class="red-dot">Certifications</h2>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-sm-3 col-12">
                <img src="{{asset('storage/assets/img/cv/heig.svg')}}" alt="HEIG-VD">
                <p>2019 - 2022</p>
            </div>
            <div class="col-sm-9 col-12">
                <h3>HEIG-VD <small>- Yverdon-les-Bains (VD)</small></h3>
                <h4 class="color-red">Bachelor of Science</h4>
                <p>Filière Ingénierie des Médias, à la Haute École d’Ingénierie et de Gestion du Canton de Vaud.</p>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-sm-3 col-12">
                <img src="{{asset('storage/assets/img/cv/csud.svg')}}" alt="Collège du Sud">
                <p>2012 - 2016</p>
            </div>
            <div class="col-sm-9 col-12">
                <h3>Collège du Sud <small>- Bulle (FR)</small></h3>
                <h4 class="color-red">Maturité gymnasiale</h4>
                <p>Formation bilingue (F/D), Mathématiques renforcés, Option spécifique : Biologie / Chimie.</p>
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-small-top-right', ['color' => '#2b2323'])

<section id="work">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Mon monde du travail</h3>
                <h2 class="red-dot">Expériences professionnelles</h2>
            </div>
        </div>

        <div id="cv-filters" class="filters-group">
            <div class="filter">
                <input type="checkbox" name="all" id="all">
                <label for="all">Toutes</label>
            </div>

            <div class="filter">
                <input type="checkbox" name="management" id="management">
                <label for="management">Gestion</label>
            </div>

            <div class="filter">
                <input type="checkbox" name="creation" id="creation">
                <label for="creation">Créatif</label>
            </div>

            <div class="filter">
                <input type="checkbox" name="it" id="it">
                <label for="it">Développement web</label>
            </div>

            <div class="filter">
                <input type="checkbox" name="student" id="student">
                <label for="student">Travail d'étudiant</label>
            </div>
        </div>



        <div id="work-history">
            @foreach ($experiences as $exp)
            <div class="row experience" data-filters="{{$exp->filters}}">
                <div class="col-4 exp-period">
                    <h3 class="all-caps">{!! $exp->period !!}</h3>
                    <!--<i class="fad fa-2x fa-circle"></i>-->
                </div>
                <div class="col-8 exp-data">
                    <i class="fad fa-2x fa-circle"></i>
                    <h3 class="all-caps">{{$exp->job}}</h3>

                    <p class="mt-3">
                        @if ($exp->company_url)
                            <a href="{{$exp->company_url}}" target="_blank" rel="noopener">
                        @endif
                            <span class="color-red">{{$exp->company}} - </span>
                        @if ($exp->company_url)
                        </a>
                        @endif
                        <small>{{$exp->place}}</small></p>

                    <p>{{$exp->desc}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('layouts.curves.curve-small-bottom-right', ['color' => '#2b2323'])

<section id="references" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Ils m'ont fait confiance</h3>
                <h2 class="red-dot">Références</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-12">
                <h3 class="name red-dot">Salvatore Pizza</h3>
                <p>
                    Cinéma “Le Prado”, gérant
                </p>
            </div>

            <div class="col-md-4 col-12">
                <h3 class="name red-dot">Alex Herren</h3>
                <p>
                    Kesako Sàrl, président<br/>
                    <a href="mailto:alex@kesako.net">alex@kesako.net</a>
                </p>
            </div>

            <div class="col-md-4 col-12">
                <h3 class="name red-dot">Etienne Wildi</h3>
                <p>
                    Redox Digital, associé<br/>
                    <a href="mailto:etienne@redoxdigital.ch"><span id="mail-etienne"></span></a>
                </p>
            </div>

            <div class="col-12 color-white mt-3" id="note"><small><i>Si vous souhaitez contacter ces personnes par téléphone, je vous transmets volontiers leurs contacts, à votre demande.</i></small></div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-small-top-right', ['color' => '#2b2323'])

<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Ce que j'ai fait</h3>
                <h2 class="red-dot">Mes dernières réalisations</h2>
            </div>
        </div>

        @foreach ($projects as $project)
        <div class="row project">
            <div class="col-md-7 col-12">
                <h5><a href="{{$project->client->link}}">{{$project->client->name}}</a></h5>
                <h3>{{$project->title}}</h3>

                <div class="categories">
                    <p class="category">{{$project->categories}}</p>
                </div>

                <p>{!! $project->desc !!}</p>
                @if (!empty($project->project_url))
                <a class="btn btn-outline-black" target="_blank" rel="noopener" href="{{$project->project_url}}">Découvrir le projet entier</a>
                @endif
            </div>
            <div class="col-md-5 col-12">
                @if (file_exists(public_path($project->image)))
                <img src="{{asset($project->image)}}" alt="{{$project->title}}">
                @endif
            </div>
        </div>
        @endforeach


        <div class="row my-5">
            <div class="col-md-6 col-12">
                <a href="{{route('cv.mikael.portfolio')}}" class="btn btn-outline-red btn-100">Parcourez toutes mes réalisations</a>
            </div>
        </div>


    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#2b2323'])

<section id="hobbies" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="all-caps color-red">Ce que j'aime faire de mon temps libre</h3>
                <h2 class="red-dot">Mes intérêts</h2>
            </div>
        </div>
        <div class="row text-center" id="icons-row">
            <div class="col-lg-2 col-md-4 col-6">
                <i class="fa-2x fad fa-biking-mountain" style="--fa-secondary-color: #AE0000; --fa-secondary-opacity: 0.8;"></i><br/>
                <p>VTT</p>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <i class="fa-2x fad fa-mountain" style="--fa-secondary-color: #AE0000; --fa-secondary-opacity: 0.8;"></i><br/>
                <p>Randonnée</p>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <i class="fa-2x fad fa-camera" style="--fa-secondary-color: #AE0000; --fa-secondary-opacity: 0.8;"></i><br/>
                <p>Photographie</p>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <i class="fa-2x fad fa-music" style="--fa-secondary-color: #AE0000; --fa-secondary-opacity: 0.8;"></i><br/>
                <p>Musique</p>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <i class="fa-2x fad fa-film" style="--fa-secondary-color: #AE0000; --fa-secondary-opacity: 0.8;"></i><br/>
                <p>Cinéma</p>
            </div>
        </div>
    </div>
</section>

<section id="cta">
    @include('layouts.curves.curve-small-top-right', ['color' => isset($curve_color) ? $curve_color : "#2b2323"])
    <div id="particles-cta-cache"></div>
    <div id="particles-js-cta"></div>

    <div class="cta-content container">
        <h2>Vous souhaitez me contacter ?</h2>
        <h3>Ne soyez pas timide</h3>
        <a href="{{route('contact.intro')}}" class="btn btn-outline-white"><i class="fas fa-arrow-right"></i></a>
    </div>
</section>
</div>

<script type="text/javascript">
    /*
    Returns an array with the node's filters.
    */
    function getCat(node) {
        return node.dataset.filters.split(',');
    }

    function isInFilters(xp, filters) {
        let shown = false;
        getCat(xp).forEach(cat => {
            if(!filters.includes(cat) && !shown) {
                console.log("should be hidden");
            } else {
                shown = true;
            }
        });
        return shown;
    }

    function showAll(experiences) {
        experiences.forEach(xp => {xp.style.display = "flex"});
    }

    /*
    Hide or show the experiences, according to the filters
    */
    function updateDisplay(filters, experiences) {
        if(filters.length == 0) {
            check(false, cbs);
            checkedFilters = [];
            showAll(exps);
        } else {
            experiences.forEach(xp => {
                isInFilters(xp, filters) ? xp.style.display = "flex" : xp.style.display = "none";
            });
        }
    }

    /*
     * Set every checkboxes to 'checked', except 'all' to !'checked'
     */
    function check(checked = true, cbs) {
        cbs.forEach((cb) => {
            cb.children[0].checked = checked;
        });

        document.getElementById("all").checked = true;
    }

    const cbs = document.querySelectorAll('.filter');
    const exps = document.querySelectorAll('.experience');

    let checkedFilters = [];

    // Setting the checkboxes : only 'all' checked
    check(false, cbs);

    /*  watch event : on click, either uncheck all but 'all',
        or uncheck 'all' and checked clicked ones */
    cbs.forEach(cb => cb.addEventListener('change', (evt) => {
        if(cb.children[0].id == "all") {
            check(false, cbs);
            checkedFilters = [];
            showAll(exps);
        } else {
            document.getElementById("all").checked = false;
            // Si un élément est sélectionné, on l'ajoute à l'array
            if(cb.children[0].checked) {
                checkedFilters.push(cb.children[0].id);
            }

            // Si un élément est désélectionné, on doit l'enlever de l'array
            else {
                let index = checkedFilters.indexOf(cb.children[0].id);
                index !== -1 ? checkedFilters.splice(index, 1) : '';
            }
            updateDisplay(checkedFilters, exps);
        }
    }));
    </script>
@endsection


