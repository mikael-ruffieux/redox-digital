<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CVExperiencesSeeder extends Seeder
{
    private $experiences = [
        [
            'job' => 'Cofondateur, Chef de projet digital',
            'period' => '2021 - à ce jour',
            'company' => 'Redox Digital SNC',
            'company_url' => 'https://redoxdigital.ch',
            'place' => 'Epagny (FR)',
            'desc' => 'Création et gestion de campagne de communication en ligne, développement et maintenance web, réalisations vidéographiques, photographie. Emploi à temps partiel en parallèle de mes études.'
        ],
        [
            'job' => 'Chargé de cours',
            'period' => '2020 - à ce jour',
            'company' => 'FutureKids',
            'company_url' => 'https://futurekids.io',
            'place' => 'Lausanne (VD)',
            'desc' => 'Création et/ou préparation de cours dans le domaine de la technologie pour des jeunes âgés entre 9 et 17 ans. Il s\'agit de cours hebdomadaires, ou de cours d\'une semaine durant les vacances scolaires.'
        ],
        [
            'job' => 'Développeur web',
            'period' => '2018 - à ce jour',
            'company' => 'Kesako Sàrl',
            'company_url' => 'https://kesako.net/',
            'place' => 'Bussigny (VD)',
            'desc' => 'Stage pré-HES, puis assistant au développement web front- et back-end sur des projets ponctuels.'
        ],
        [
            'job' => 'Sergent-major d\'unité',
            'period' => '2016 - à ce jour',
            'company' => 'École de cadres',
            'place' => 'Armée suisse',
            'desc' => 'Responsable logistique et RH d’une compagnie de 130 hommes durant 4 mois, en région alémanique. Je continue à tenir cette fonction en cours de répétition.'
        ],
        [
            'job' => 'Vidéaste & développeur web indépendant',
            'period' => '2016 - 2021',
            'company' => 'Redox Prod (Raison individuelle)',
            'place' => 'Epagny (FR)',
            'desc' => 'Réalisation de mandats freelance en parallèle de mes études et projets professionnels, comme développeur web et vidéaste.'
        ],
        [
            'job' => 'Graphiste',
            'period' => '2019 - 2021',
            'company' => 'Evolys SA',
            'company_url' => 'https://evolys.ch',
            'place' => 'Villars-sur-Glâne (FR)',
            'desc' => 'Chargé de création de contenus visuels pour les réseaux sociaux de l’entreprise.'
        ],
        [
            'job' => 'Aide de cuisine',
            'period' => '2018',
            'company' => 'Restaurant Ô Colombettes',
            'company_url' => 'https://www.lescolombettes.ch/',
            'place' => 'Vuadens (FR)',
            'desc' => 'Assistance aux cuisiniers, et responsable de l\'entretien du bâtiment.'
        ],
        [
            'job' => 'Chauffeur / livreur',
            'period' => '2018',
            'company' => 'Fondation Clos Fleuri',
            'company_url' => 'https://www.clos-fleuri.ch',
            'place' => 'Bulle (FR)',
            'desc' => 'Travail avec des personnes en situation de handicap, pour assurer leurs déplacements, et livraisons diverses au sein de la fondation.'
        ],
        [
            'job' => 'Opérateur',
            'period' => '2013 - 2018',
            'company' => 'Cinemotion Sàrl',
            'company_url' => 'https://cinemotion.ch',
            'place' => 'Bulle (FR)',
            'desc' => 'Dès 2013 en tant que placeur/chargé d’accueil, puis caissier, et projectionniste (travail d’étudiant).'
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('c_v_experiences')->delete();

        foreach ($this->experiences as $exp) {
            DB::table('c_v_experiences')->insert($exp);
        }
    }
}
