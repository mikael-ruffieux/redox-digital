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
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
            [
                'title' => 'Développement sur mesure',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
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
        10 => [
            [
                'title' => 'Identité de marque (création de logo, cartes de visite, ...)',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            ],
            [
                'title' => 'Design d\'interfaces (UI)',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
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
