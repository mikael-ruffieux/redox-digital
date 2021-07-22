<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccordionsTableSeeder extends Seeder
{
    private $accordions = [
        3 => [
            [
                'title' => 'CMS Open Source (Wordpress, Drupal)',
                'description' => 'Les systèmes de gestion de contenu (CMS) sont très répandus sur Internet, et vous permettent de directement gérer vous-mêmes le contenu de votre site web.<br><br>De plus, l\'utilisation d\'un CMS facilite le processus de création pour les sites simples, et permet une mise en ligne rapide et à moindre coût, pour un produit qualitatif.',
            ],
            [
                'title' => 'Développement sur mesure',
                'description' => 'À projet unique, compétences uniques. Nous vous proposons une création de site web de A à Z, des dessins sur papier à la mise en ligne de votre site, en passant par la création du design de chacune des pages de votre site.',
            ],
        ],
        // end of one service
        7 => [
            [
                'title' => 'Publicité sur les réseaux sociaux',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
            [
                'title' => 'Référencement SEO, SEA',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
        ],
        // end of one service
        8 => [
            [
                'title' => 'Audit & analyse',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
            [
                'title' => 'Formation & coaching',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
            [
                'title' => 'Design d\'expérience utilisateur (UX)',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
        ],
        // end of one service
        9 => [
            [
                'title' => 'Captation live',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
            [
                'title' => 'Couverture d\'événements',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
            [
                'title' => 'Réalisation de vidéo, clip ou court-métrage',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
            [
                'title' => 'Vidéos promotionnelles pour les réseaux sociaux',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
        ],
        // end of one service
        10 => [
            [
                'title' => 'Photographie d\'événements',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
            [
                'title' => 'Photographie d\'architecture et immobilière',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
            [
                'title' => 'Photos pour les réseaux sociaux',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
            [
                'title' => 'Retouches photographiques',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
        ],
        // end of one service
        11 => [
            [
                'title' => 'Identité de marque (création de logo, cartes de visite, ...)',
                'description' => 'Vous débutez votre parcours entrepreunarial, et souhaitez créer une identité visuelle forte, à petit prix ? Ou vous souhaitez simplement rafraîchir votre logo et votre papeterie ? Le tout à petit prix ? N\'attendez pas pour nous contacter !',
            ],
            [
                'title' => 'Design d\'interfaces (UI)',
                'description' => 'Souvent combiné avec la création de site web, Redox Digital vous propose un service de création d\'interface utilisateur pour vos sites et applications web, afin d\'offrir à votre clientèle la meilleure expérience d\'utilisation possible, tout en étant en phase avec votre identité visuelle.',
            ],
        ],
        // end of one service
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accordions')->delete();

        foreach ($this->accordions as $service_id => $accordion) {
            foreach ($accordion as $accordion_data) {
                DB::table('accordions')->insert([
                    'service_id' => $service_id,
                    'title' => $accordion_data['title'],
                    'description' => $accordion_data['description'],
                ]);
            }
        }
    }
}
