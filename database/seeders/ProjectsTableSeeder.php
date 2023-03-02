<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    private $projetsMR = [
        [
          'title' => 'Vidéo de promotion pour la "semaine Rebelles"',
          'client_id' => 1,
          'archived' => 0, 'custom_summary' => 'Afin de promouvoir la féminité en général, le Service de la Jeunesse de la Ville de Bulle organise depuis 2 ans la semaine “Rebelles". Cette année, le projecteur est mis sur le cinquantième anniversaire du droit de vote des femmes.',
          'external_url' => null,

          'img_preview_url' => 'storage/projects/1/preview.jpg',
          'context_title' => null,
          'context_desc' => 'Déjà organisée en 2020, la semaine Rebelles n\'avait pas eu lieu comme initialement prévue. En effet, mesures sanitaires obligent, le Service de la Jeunesse de la Ville de Bulle (SJB) avait dû revoir le déroulement de la semaine à la baisse, et s\'avait finalement opté pour une conférence en ligne.<br><br>Mais l\'année 2021 était la bonne ! 4 jours d\'activités sur le thème du droit de vote des femmes, la semaine Rebelles met en scène différents acteurs de la ville dans les domaines de la culture, du social et de la politique.',
          'video_source' => 'youtube',
          'video_url' => 'https://www.youtube.com/watch?v=cIgNwzG9Hy0',
          'design_desc' => null,
          'solution_title' => null,
          'solution_desc' => 'Après 4 jours de tournage, pour couvrir chacun des événements, nous proposons une vidéo de 1 min 20, donnant au spectateur un aperçu de la semaine, de ses intervenant&middot;se&middot;s et des activités organisées.<br><br>Cette vidéo est avant tout prévu pour une diffusion sur les réseaux sociaux, d\'où le format court.<br><br>Nous avons également créé un trailer de 15 secondes au format vertical pour une publication en story sur Instagram et Facebook.',
        ],
        [
          'title' => 'Shooting photo',
          'client_id' => 6,
          'archived' => 0, 'custom_summary' => 'Deathless est un groupe de hard rock gruérien, et regroupe à la base une bande de copains depuis les années 80. Le groupe a souhaité immortaliser en images l\'arrivée de Sabrina, la nouvelle chanteuse.',
          'external_url' => null,

          'img_preview_url' => 'storage/projects/2/preview.jpg',
          'context_title' => null,
          'context_desc' => 'Deathless est un groupe de hard rock gruérien amateur, qui regroupe une bande de copains depuis les années 80.<br><br>Habitués à tout faire eux-mêmes, ils décident finalement, pour fêter l\'arrivée de leur nouvelle chanteuse, Sabrina, de s\'offrir un shooting photo dans un cadre plutôt original, celui de l\'abri PC qu\'ils utilisent pour leur répétition.',
          'video_source' => null,
          'video_url' => null,
          'design_desc' => null,
          'solution_title' => null,
          'solution_desc' => 'Initialement, nous nous étions mis d\'accord sur des photos sous fond noir, uni, mais arrivé sur place, nous avons décidé de laisser apparaître sur certaines images le fond beaucoup plus brut de l\'abri PC, ou des lumières utilisées pour éclairer la scène.<br><br>En effet, rebelles et effrontés depuis leur début, Deathless propose à travers leurs compositions originales des textes engagés, réfractaires et provocateurs. Des images trop “lisses" n\'auraient donc pas correspondues aux valeurs du groupe.<br><br>Finalement, l\'utilisation du canapé rouge permettait un contraste très intéressant entre la froideur du lieu, et la chaleur de sa couleur. Nous avons également réalisé une version en noir et blanc des photos, à la demande du groupe, en ne laissant que le canapé en couleur.',
        ],
        [
          'title' => 'Refonte du site de la boutique Bullshop',
          'client_id' => 8,
          'archived' => 0, 'custom_summary' => 'Profitant de la fermeture du magasin imposée par la situation sanitaire du COVID-19, la boutique de mode Bullshop nous a mandaté pour une refonte de son site web existant.',
          'external_url' => 'https://bullshop.ch',

          'img_preview_url' => 'storage/projects/3/preview.jpg',
          'context_title' => null,
          'context_desc' => 'Bullshop SA est une entreprise bulloise active depuis 1977, regroupant aujourd\'hui les deux boutiques de mode Bullshop et Relax.<br><br>Se retrouvant bien malgré elle sur le banc de touche, Bullshop décide de nous mandater pour une refonte de son site web.<br><br>Nouveau design, nouvelles fonctionnalités, le seul élément qui reste sera l\'utilisation du <abbr title="Content Management System, système de gestion de contenu">CMS</abbr> WordPress, qui permettra d\'une part à Redox Digital de proposer un projet financièrement attrayant, et d\'autre part, qui permet à Bullshop de garder une entière liberté sur la publication des contenus et sur la gestion du site internet.',
          'video_source' => null,
          'video_url' => null,
          'design_desc' => 'Pour le design, nous avons utilisé comme base le thème Wordpress <a href="[kloe.qodeinteractive.com/landing-page](http://kloe.qodeinteractive.com/landing-page)" target="_blank" rel="noopener">Kloe</a>. <br><br>Ce thème a ensuite été adapté au besoin de Bullshop SA, notamment au niveau des couleurs de l\'entreprise, et la disposition des pages a été planifié de concert afin de répondre parfaitement aux besoins de la boutique.',
          'solution_title' => null,
          'solution_desc' => 'Après 2 mois de collaboration, le nouveau site web [bullshop.ch](http://bullshop.ch) voit gentiment le jour. <br><br>Les nouveautés ? Hormis une nouvelle esthétique, le site propose maintenant différentes sections, dont une section présentant les nouvelles collections mensuelles, et une section catalogue, permettant de parcourir l\'entier des articles vendus par Bullshop.<br><br>Si le site internet fonctionne comme un site de vente en ligne, il a été décidé de ne pas rendre possible l\'achat en ligne, car la boutique préfère proposer un service de conseils de qualité directement sur place, et éviter l\'achat en ligne sans avoir pu essayer les articles à la boutique.',
        ],
        [
          'title' => 'Vidéo de promotion pour "Les p\'tits jobs"',
          'client_id' => 1,
          'archived' => 0, 'custom_summary' => 'Le service “P\'tits Jobs" est une mesure mise en place par le Service de la Jeunesse de la Ville de Bulle (SJB) proposant un soutien professionnel aux jeunes désirant rejoindre le monde du travail. Nous avons réalisé une vidéo permettant de faire découvrir ce programme auprès des jeunes, et de leurs parents.',
          'external_url' => null,

          'img_preview_url' => 'storage/projects/4/preview.jpg',
          'context_title' => null,
          'context_desc' => 'Dans le cadre de son travail de brevêt, Mme. Pamela Rey a mis en place le service “P\'tits Jobs", qui permet aux jeunes de la ville de Bulle souhaitant (ré)intégrer le monde du travail d\'obtenir un encadrement professionnel et personnalisé.<br><br>Le Service de la Jeunesse de la Ville de Bulle (SJB) propose dans ce cadre une aide dans la création d\'un CV, une préparation aux entretiens d\'embauche, et l\'opportunité pour les jeunes de réaliser un stage professionnel au sein des entreprises partenaires du SJB.<br><br>Initialement, Mme. Rey nous avait demandé de réaliser une vidéo à titre privé, qui servirait d\'introduction pour la défense de son travail de brevêt. Finalement, nous avons adapté cette vidéo pour créer une version promotionnelle, qui permettait de présenter en quelques mots le programme “P\'tits Jobs" auprès des jeunes et de leurs parents.',
          'video_source' => 'vimeo',
          'video_url' => 'https://vimeo.com/386443904',
          'design_desc' => null,
          'solution_title' => null,
          'solution_desc' => 'La vidéo a été réalisé avec 3 jeunes qui avaient pu bénéficier de l\'encadrement de Mme. Rey durant la phase de mise en place du projet, et nous avons tourné les plans auprès de trois entreprises de la région bulloise.<br><br>Il était important de présenter plusieurs pôles de métiers. Nous avons choisi, en fonction des disponibilités des entreprises partenaires, les domaines plutôt scientifiques, sociaux et de l\'artisanat.',
        ],
        [
          'title' => 'Raclette MAZOT',
          'client_id' => 7,
          'archived' => 0, 'custom_summary' => 'Afin de promouvoir les nouveaux emballages de leur fromage à raclette MAZOT, Cremo SA nous a mandaté pour la réalisation d\'une série d\'animations présentant leurs nouveaux emballages.',
          'external_url' => null,
          'img_preview_url' => 'storage/projects/5/preview.jpg',
          'context_title' => null,
          'context_desc' => 'Cremo SA a développé un nouvel emballage est constitué de 60% de plastique en moins, pour un produit plus respectueux de l\'envrionnement. L\'entreprise désirait alors créer une vidéo d\'animation permettant de découvrir ce nouvel emballage. La vidéo, décliné aux formats portrait et paysage, ainsi qu\'en version francophone et germanophone, sera ensuite diffusée sur les écrans publicitaires présents dans les magasins partenaires.',
          'video_source' => 'youtube',
          'video_url' => null,
          'design_desc' => 'Pour la conceptualisation de la vidéo, nous avons décidé de reprendre l\'effet de déchirure du papier présent sur le nouvel emballage. La couleur principale étant défini par la charte graphique du produit, il a fallu trouver une solution pour démarquer le produit du fond. Sur la décision du client, nous avons opté pour un effet de halo discet autour des différents emballages.',
          'solution_title' => null,
          'solution_desc' => 'La principale difficulté du projet était d\'afficher toutes les variations du produit, ainsi que leurs labels respectifs, en l\'espace de 10 secondes, la durée étant imposée par les supports de diffusion.<br><br>Au final, le résultat offrait un bon compromis entre dynamisme et lisibilité, en respectant les différentes contraintes visuelles et celle de temps. Les adaptations de format et linguistiques n\'étaient ensuite qu\'une formalité.',
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();

        foreach ($this->projetsMR as $project) {
            $project['date'] = date("Y-m-d", strtotime("2021-12-21"));
            DB::table('projects')->insert($project);
        }
    }
}
