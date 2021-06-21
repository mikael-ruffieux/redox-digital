<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    private $services = [
        // Web digital : 1, Création de contenus : 2
        [
            'title' => 'Web digital',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium labore sapiente aut quibusdam inventore consectetur id, eaque veritatis culpa nobis totam recusandae est molestias nemo. Placeat inventore tenetur numquam quam!',
            'image' => 'storage/services/1.jpg',
            'isChild' => false,
            'parent_id' => null
        ],
        [
            'title' => 'Création de contenus digitaux',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium labore sapiente aut quibusdam inventore consectetur id, eaque veritatis culpa nobis totam recusandae est molestias nemo. Placeat inventore tenetur numquam quam!',
            'image' => 'storage/services/2.jpg',
            'isChild' => false,
            'parent_id' => null
        ],
        // Children of 1
        [
            'title' => 'Création & refonte de site web',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium labore sapiente aut quibusdam inventore consectetur id, eaque veritatis culpa nobis totam recusandae est molestias nemo. Placeat inventore tenetur numquam quam!',
            'image' => 'storage/services/3.jpg',
            'isChild' => true,
            'parent_id' => 1
        ],
        [
            'title' => 'E-commerce',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium labore sapiente aut quibusdam inventore consectetur id, eaque veritatis culpa nobis totam recusandae est molestias nemo. Placeat inventore tenetur numquam quam!',
            'image' => 'storage/services/4.jpg',
            'isChild' => true,
            'parent_id' => 1
        ],
        [
            'title' => 'Gestion de l\'hébergement',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium labore sapiente aut quibusdam inventore consectetur id, eaque veritatis culpa nobis totam recusandae est molestias nemo. Placeat inventore tenetur numquam quam!',
            'image' => 'storage/services/5.jpg',
            'isChild' => true,
            'parent_id' => 1
        ],
        [
            'title' => 'Maintenance web',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium labore sapiente aut quibusdam inventore consectetur id, eaque veritatis culpa nobis totam recusandae est molestias nemo. Placeat inventore tenetur numquam quam!',
            'image' => 'storage/services/6.jpg',
            'isChild' => true,
            'parent_id' => 1
        ],
        [
            'title' => 'Marketing digital',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium labore sapiente aut quibusdam inventore consectetur id, eaque veritatis culpa nobis totam recusandae est molestias nemo. Placeat inventore tenetur numquam quam!',
            'image' => 'storage/services/7.jpg',
            'isChild' => true,
            'parent_id' => 1
        ],
        [
            'title' => 'Stratégie',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium labore sapiente aut quibusdam inventore consectetur id, eaque veritatis culpa nobis totam recusandae est molestias nemo. Placeat inventore tenetur numquam quam!',
            'image' => 'storage/services/8.jpg',
            'isChild' => true,
            'parent_id' => 1
        ],
        // Children of 2
        [
            'title' => 'Production vidéo',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium labore sapiente aut quibusdam inventore consectetur id, eaque veritatis culpa nobis totam recusandae est molestias nemo. Placeat inventore tenetur numquam quam!',
            'image' => 'storage/services/9.jpg',
            'isChild' => true,
            'parent_id' => 2
        ],
        [
            'title' => 'Photographie',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium labore sapiente aut quibusdam inventore consectetur id, eaque veritatis culpa nobis totam recusandae est molestias nemo. Placeat inventore tenetur numquam quam!',
            'image' => 'storage/services/10.jpg',
            'isChild' => true,
            'parent_id' => 2
        ],
        [
            'title' => 'Design graphique',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium labore sapiente aut quibusdam inventore consectetur id, eaque veritatis culpa nobis totam recusandae est molestias nemo. Placeat inventore tenetur numquam quam!',
            'image' => 'storage/services/11.jpg',
            'isChild' => true,
            'parent_id' => 2
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->delete();

        foreach ($this->services as $service) {
            DB::table('services')->insert($service);
        }
    }
}
