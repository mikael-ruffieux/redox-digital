@extends('layouts.main_layout')

@section('title')
Conditions générales | 
@endsection

@section("content")
<div id="cg-page">
    <section id="about-header" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="red-dot">Conditions générales</h1>
                </div>
            </div>
    
            <div class="row">
                <div class="col-lg-8 col-12">
                    <p>Les conditions générales ont pour but de préciser certains aspects de la collaboration entre <b>Redox Digital</b> et ses mandants, ci-après « <b>le Client</b> », afin d’éviter toute incompréhension ou conflit d’intérêt. Ces conditions s’appliquent par défaut à chaque contrat engageant Redox Digital en tant que mandataire, quelle que soit la forme du contrat convenu, écrite ou orale.</p>
                    <p>Vous trouverez sur chaque devis et facture une description sommaire des conditions fixées par Redox Digital SNC. Vous trouverez ci-dessous une version plus détaillée de ces conditions.</p> 
                </div>
                <div class="col-lg-6 col-12">    
                    <a href="#cg-content" id="bouncing-arrow"><i class="fal fa-arrow-down color-white"></i></a>
                </div>
            </div>

        </div>
    </section>

    @include('layouts.curves.curve-medium-bottom-right', ['color' => '#ffffff', 'class' => 'enters-from-right'])

    <section class="bg-white" id="cg-content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="red-dot" id="1">Implication des parties</h2>
                    <p>Dans chaque mandat, le Client et Redox Digital s’engagent à collaborer activement afin d’atteindre les buts fixés par le contrat. Chacun se doit de communiquer les éventuelles difficultés rencontrées au fur et à mesure du projet pour permettre à l’autre d’agir en conséquence.</p>
                    
                    <h3>Redox Digital</h3>
                    <p>Afin d’assurer une solution à la demande du Client, Redox Digital s’engage à :</p>
                    <ul>
                        <li>Informer le Client de manière régulière et efficace sur l’avancée du projet, notamment au travers des validations présentées ;</li>
                        <li>Respecter la confidentialité du Client durant et à terme du mandat, que se soit sous la forme d’informations ou de documents obtenues dans le cadre du mandat pouvant porter préjudice au Client.</li>
                    </ul>
                    <h3>Le client</h3>
                    <p>Pour une réalisation optimale de la mission de Redox Digital, le Client s’engage à :</p>
                    <ul>
                        <li>Établir un cahier des charges du projet, ou valider la proposition
                            d'offre proposée par Redox Digital. Une fois l'offre établie et approuvée par les deux
                            parties, aucune modification n'est possible, sauf accord mutuel des deux parties. Si les
                            modifications impliquent un remaniement conséquent des tâches prévues dans le cadre du mandat, ces
                            dernières seront facturées en sus de la proposition initiale.</li>
                        <li>Fournir tous les éléments nécessaires à la bonne réalisation du mandat
                            <i>(textes, images, etc.)</i> dans les délais convenus, aux bons formats.</li>
                        <li>Informer Redox Digital si le projet est soumis à des particularités
                            légales. Le Client est seul responsable du contrôle et respect des droits d'auteur des
                            documents remis à Redox Digital.</li>
                    </ul>
                    <hr/>
                    <h2 class="red-dot" id="2">Offres et facturation</h2>
                    <p>Le prix qui est proposé au Client se base sur les
                        indications transmises afin de ne pas pouvoir induire en erreur sur le travail à réaliser. Les
                        modifications conséquentes de ces données entrainera un nouveau devis.</p>
                    <p>Les travaux effectués sans offre préalable sont
                        facturés à un tarif horaire de <b>90 CHF TTC</b>, ou sur la base des coûts appliqués pour des travaux
                        similaires.</p>
                    <p>Les tarifs établis sur des descriptions de projet
                        imprécises ou incomplètes ne sont indiqués qu'à titre indicatif.</p>
                    <h3>Lancement d'un mandat</h3>
                    <p>Un mandat est débuté dès qu'un cahier des charges
                        ou un devis détaillé a été validé par les deux parties. C'est là que sont aussi défini le périmètre
                        du projet et les livrables. C'est aussi à ce moment-là le Client fournit à Redox Digital les
                        éléments nécessaires à la bonne conduite du projet <i>(textes, images, etc.)</i>.</p>
                    <h3>Corrections &amp; frais supplémentaires</h3>
                    <p>Toute demande de changements ou de travaux
                        supplémentaires intervenant après la signature du devis ou l'établissement d'une commande
                        orale ferme, dépassant le nombre d'heures et/ou le nombre de de versions mentionnés dans le devis
                        sera facturée en sus sur la base du tarif horaire mentionné (<a href="#3">c.f. point 3</a>), ou selon un tarif convenu
                        dans l'offre initiale.</p>
                    <h3>Facturation</h3>
                    <p>Les charges directes liées au projet <i>(achat
                        d'éléments digitaux, location de matériel, etc.)</i> sont à la charge du Client, mais sont comprises
                        dans le montant proposé dans le devis.</p>
                    <p>Pour les mandats inférieurs à 500.00 CHF, il est
                        demandé au Client de régler l'entier de la facture à la signature de l'offre.</p>
                    <p>Pour les mandats supérieurs à 500.00 CHF, un acompte de
                        30% est demandé à la signature de l'offre. Le solde <i>(70%)</i> est à payer selon les conditions indiquées sur le devis, généralement à
                        la fin du projet.</p>
                    <p>Lorsque la réalisation d'un projet s'étend
                        sur plusieurs mois, la facturation sera fragmentée sur la durée entière du projet à raison de paiements
                        mensuels.</p>
                    <p>Ces conditions de paiement peuvent bien entendu être
                        modifiées sur accord des deux parties.</p>
                    <h4>Retard de paiement </h4>
                    <p>Les factures émises par Redox Digital sont en principe
                        payables à 30 jours. </p>
                    <p>Passé ce délai, le Client recevra un premier rappel,
                        sans frais supplémentaire.</p>
                    <p>En cas de non-paiement à 60 jours, Redox Digital se
                        réserve le droit de facturer comme frais de rappel 1% du montant total de la facture pour tous les 3
                        jours de retard, en se basant sur la date d'échéance de la facture initiale.</p>
                    <h3>Interruption d’un mandat en cours</h3>
                    <p>Une interruption du mandat est en tout temps possible
                        sur accord des deux parties.</p>
                    <p>En cas d'interruption du mandat avant son terme
                        par le Client, l'acompte n'est pas remboursable. Seront aussi facturés au Client les frais
                        déjà engagés dans le projet selon le plan d'action prévu par le devis, sauf mention écrite en
                        accord avec les deux parties.</p>
                    <p>Tous les documents créés jusqu'à
                        l'interruption du mandat sont la propriété exclusive de Redox Digital (<a href="#3.2">c.f. point 3.2</a>) à
                        l'exception des données fournies par le Client.</p>
                    <p>Les documents originaux créés et utilisés par Redox
                        Digital ne peuvent être revendiqués par le Client sans une contribution financière (<a href="#3.3">c.f. point 3.3</a>).</p>
                    <hr/>
                    <h2 class="red-dot" id="3">Livrables, propriété intellectuelle & droits d’auteur</h2>
                    <p>Conformément aux prescriptions légales suisses, tout
                        élément créé dans le cadre d'un mandat <i>(stratégies, créations graphiques ou digitales, fichiers
                        sources, livrables etc.)</i> et transmis au Client restent la propriété de Redox Digital. Toutes
                        modifications ou interprétations d'une création sont soumises aux droits d'auteur et ne
                        peuvent être faites sans le consentement de l'agence.</p>
                    <h3>Livrables</h3>
                    <p>Redox Digital fournit au Client un document final <i>(= livrable)</i> « prêt à l'emploi ». Redox Digital n'est pas tenu de fournir les données sources
                        ayant permis la conception et réalisation dudit livrable.</p>
                    <p>Sauf mention contraire explicite du Client, Redox
                        Digital se réserve la possibilité d’inclure dans la réalisation une mention discrète indiquant
                        clairement sa contribution ou celle de ses partenaires.</p>
                    <h3 id="3.2">Droits d'utilisation &amp; droits
                        d'auteurs</h3>
                    <p>Pour toute prestation de service réalisée, Redox
                        Digital détient les droits d’auteur conformément aux prescriptions légales. Par cette clause, le Client
                        ne peut pas utiliser les livrables obtenus lors d’un mandat pour un autre usage que celui prévu dans le
                        cadre du devis. Ceci comporte toutes modifications, tous traitements ou toutes utilisations ultérieures
                        dans un autre contexte <i>(par exemple lors d’un changement de prestataire de services)</i>. </p>
                    <p>Une extension de ces droits d'utilisation est
                        toutefois possible sur accord écrit de Redox Digital. Des frais supplémentaires peuvent alors découler
                        de cette extension.</p>
                    <p>Lors d'une participation à un concours, les
                        droits d’auteurs sur les documents ainsi que sur les conseils et stratégies développés, restent la
                        propriété exclusive de Redox Digital.</p>
                    <h3 id="3.3">Fichiers sources</h3>
                    <p>Redox Digital peut céder les droits d’auteur et
                        transmettre les fichiers sources — contre une éventuelle rémunération si ce point n’a pas été prévu dans
                        la demande d’offre liée au mandat — sur demande du Client, dans un délai de 6 mois après la fin du
                        mandat.</p>
                    <p>Si la cession des fichiers sources n'a pas été
                        prévue à la signature du mandat, Redox Digital ne peut pas assurer la qualité et la réutilisabilité des
                        documents.</p>
                    <p>Une fois les droits d'auteur et les fichiers en
                        possession du Client, ce dernier devient responsable de la durée des licences et de la gestion des
                        droits d'auteur des contenus utilisés pour modifier le livrable. Redox Digital ne pourra en aucun
                        cas être tenue responsable de tout type de violation ou d'expiration de licences.</p>
                    <hr>
                    <h2 class="red-dot" id="4">Droit applicable et for juridique</h2>
                    <p>Au sein de l’agence Redox Digital SNC, nous
                        privilégions avant tout des valeurs telles que le bon sens, la bonne foi, le dialogue et la sincérité.
                        Nous espérons qu’il en est de même de la part de tous nos clients, partenaires et fournisseurs.</p>
                    <p>Les Conditions Générales, les devis et contrats liant
                        les deux parties sont soumis au droit suisse.</p>
                    <p>La déclaration de nullité de l’une des clauses des
                        présentes conditions générales n’affecte en rien la validité des autres clauses (<a href="https://www.fedlex.admin.ch/eli/cc/27/317_321_377/fr#art_20" target="_blank">CO Art. 20 al. 2</a>).</p>
                    <p>La commande, l’acceptation d’un devis et le paiement
                        de la facture impliquent la reconnaissance par le Client des présentes conditions générales.</p>
                    <p>Le for juridique est Fribourg.</p>
                    <hr>
                    <h2 class="red-dot" id="5">Renseignements &amp; contact</h2>
                    <p>Pour toutes question, demande ou réclamation, nous
                        vous prions de bien vouloir nous contacter via <a href="{{route('contact.intro')}}">notre formulaire de contact</a>, ou à l'adresse suivante : </p>
                    <blockquote>
                        <b>Redox Digital SNC</b><br>
                        Rte de Duvillard 23<br>
                        1663 Epagny<br>
                        Suisse</blockquote>
                    <p>Les Conditions Générales entrent en vigueur le
                        25.03.2021.</p>
                    <p>Dernière mise à jour : 28.10.2021.</p>

                </div>
            </div>
        </div>

    </section>

</div>
@endsection