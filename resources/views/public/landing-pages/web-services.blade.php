@extends('layouts.main_layout')

@section('title')
Création de site web | 
@endsection

@section("content")
<section class="hero-section container" id="about-header">
    <div class="row">
        <div class="col-12">
            <h3 class="all-caps color-red">Création de site web</h3>
            <h1 class="red-dot">Un site web pour chaque budget</h1>
        </div>
        <div class="col-12 col-md-8" id="hero-description">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, suscipit fugit? Voluptate, vitae velit quam quod et repudiandae nisi eos aperiam, provident ratione voluptatem exercitationem voluptas mollitia error, libero dolor.</p>

            <a href="#web-prices" id="bouncing-arrow"><i class="fal fa-arrow-down"></i></a>

        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-bottom-right', ['color' => '#2b2323'])

<section class="bg-dark" id="web-prices">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="red-dot mb-5">Choisissez chaussure à votre pied</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras scelerisque, orci a interdum consequat, erat neque auctor justo, eu aliquam quam mauris eget massa. Aliquam fermentum urna est, eu blandit augue ornare at.</p>
                
                <p class="mb-5">Vous ne savez pas forcément quelle offre est la plus adaptée à votre projet ? Aucun problème, c’est avec plaisir que nous fixons un rendez-vous avec vous pour en discuter : <a href="#">contactez-nous dès maintenant</a> !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">« À monter soi&#8209;même »</h2>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Définition d’une architecture basique de votre site.</li>
                            <li>Commande de l’hébergement, du nom de domaine & installation du CMS* choisi.</li>
                            <li>Mise en place des bases de données nécessaire à l’utilisation du site.</li>
                            <li>Proposition d’un thème, achat & installation de ce dernier sur votre site.</li>
                            <li>Formation de 1h sur l’utilisation du site, comment créer du contenu, etc.</li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <h3 class="all-caps">à partir de</h3>
                        <h2 class="red-dot">600 CHF</h2>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">« À gérer soi&#8209;même »</h2>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Services du pack “<strong>À monter soi-même</strong>”.</li>
                            <li>Propositions de design et de mise en page des contenus, selon le thème choisi.</li>
                            <li>Création des pages selon l’architecture du site.</li>
                            <li>Insertion des contenus visuels & textuels fournis par le client.</li>
                            <li>Formation de 1h30 sur l’utilisation du site, comment créer du contenu, etc.</li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <h3 class="all-caps">à partir de</h3>
                        <h2 class="red-dot">1'500 CHF</h2>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Développement sur mesure</h2>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>AD</li>
                            <li>AD</li>
                            <li>AD</li>
                            <li>AD</li>
                            <li>AD</li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <h3 class="all-caps">tarif</h3>
                        <h2 class="red-dot">sur demande</h2>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <p>*<strong>CMS</strong> : Un CMS est un Content Management System, ou système de gestion de contenu. Les CMS les plus connus et les plus utilisés sont Wordpress, Wix ou encore Drupal.</p>

                <p><i>Les tarifs indiqués sont à titre indicatif, et peuvent varier selon la taille et la compléxité de votre projet.</i></p>
            </div>
        </div>
    </div>
</section>

@include('layouts.curves.curve-medium-top-right', ['color' => '#2b2323'])
<section id="maintenance-prices">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Vous n’êtes pas seul<span class="color-red">.</span>e<span class="color-red">.</span>s !</h2>
            </div>
            <div class="col-12 col-md-8" id="hero-description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, suscipit fugit? Voluptate, vitae velit quam quod et repudiandae nisi eos aperiam, provident ratione voluptatem exercitationem voluptas mollitia error, libero dolor.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center red-dot">Maintenance technique</h2>
                    </div>
                    <div class="card-body">
                        <ul >
                            <li>Sauvegardes bimestrielles de votre site et des bases de données liées.</li>
                            <li>Mises à jour du CMS et des extensions utilisées sur votre site.</li>
                            <li>Support ponctuel, sur appel.<br><br>
                                <small>En cas de travaux conséquents, facturés au tarif horaire de 90.00 CHF.</small>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <h3 class="all-caps">Tarif annuel</h3>
                        <h2 class="red-dot">480 CHF</h2>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center red-dot">Support fonctionnel</h2>
                    </div>
                    <div class="card-body">
                        <ul >
                            <li>Services du pack "<strong>maintenance technique</strong>".</li>
                            <li>Aide à la mise en place du site.</li>
                            <li>Aide à la gestion du site, de l’hébergement et du nom de domaine <i>(frais externes non-compris)</i>.</li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <h3 class="all-caps">Tarif annuel, à partir de</h3>
                        <h2 class="red-dot">660 CHF</h2>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center red-dot">Support complet</h2>
                    </div>
                    <div class="card-body">
                        <ul >
                            <li>Services du pack "<strong>support fonctionnel</strong>"".</li>
                            <li>Veille technologique : nous vous conseillons sur les nouveautés à adopter.</li>
                            <li>Support non plus uniquement sur votre site, mais sur votre écosystème digital complet <i>(référencement,  réseaux  sociaux, etc.)</i></li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <h3 class="all-caps">Tarif annuel, à partir de</h3>
                        <h2 class="red-dot">1'200 CHF</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@include('layouts.cta-section', ["curve_color" => "#fafafa"])
@endsection