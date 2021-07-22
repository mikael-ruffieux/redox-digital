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
            'description' => '<b>Un bon contenu doit être mis en valeur !</b> Nous souhaitons mettre en place un accompagnement de la phase de conception à la mise en ligne de votre site. <br><br>Nos services <i>Web digital</i> vous propose des solutions <b>techniques</b> & <b>stratégiques</b> adaptées à vos besoins.',
            'image' => 'storage/services/1.jpg',
            'isChild' => false,
            'parent_id' => null
        ],
        [
            'title' => 'Création de contenus digitaux',
            'description' => 'Le contenu est au centre de toutes bonnes communications, il se doit d’être structuré et impactant pour toucher son public cible. Du texte à l’image, nous vous proposons de créer vos contenus digitaux.',
            'image' => 'storage/services/2.jpg',
            'isChild' => false,
            'parent_id' => null
        ],
        // Children of 1
        [
            'title' => 'Création & refonte de site web',
            'description' => 'Démarquez-vous avec un site web personnalisé et évolutif, dont l\'ergonomie, le design et les contenus sont adaptés à vos besoins et à ceux de votre clientèle.<br><br>Vous trouverez chez Redox Digital une solution tout-en-un, que vous souhaitiez créer un nouveau site web, ou améliorer un site existant.<br><br>Pour correspondre à votre budget, Redox Digital vous propose 2 solutions de création de site web. Nous tenons à votre disposition pour choisir avec vous la solution la plus adaptée.',
            'image' => 'storage/services/3.jpg',
            'isChild' => true,
            'parent_id' => 1
        ],
        [
            'title' => 'E-commerce',
            'description' => 'Avec un taux de croissance supérieur à 10% par an, le e-commerce est une composante incontournable de la « transformation digitale ». Bénéficiez de l\'accompagnement complet d\'une agence avec une vraie compréhension business pour réussir votre révolution e-commerce.',
            'image' => 'storage/services/4.jpg',
            'isChild' => true,
            'parent_id' => 1
        ],
        [
            'title' => 'Gestion de l\'hébergement',
            'description' => 'L\'hébergement de nos sites est labellisé «&nbsp;Swiss&nbsp;made&nbsp;software&nbsp;» et «&nbsp;swiss&nbsp;hosting&nbsp;»  ! En effet, les sites sont hébergé chez Infomaniak, qui s\'engage comme hébergeur écologique, et qui est 100% suisse.<br><br>Redox Digital se fera un plaisir de gérer votre hébergement.',
            'image' => 'storage/services/5.jpg',
            'isChild' => true,
            'parent_id' => 1
        ],
        [
            'title' => 'Maintenance web',
            'description' => 'Après la création de votre site web, nous ne vous laissons pas tout seul. Nous vous proposons des contrats de maintenance annuel pour gérer les mises à jour, le référencement, l\'hébergement, ...<br><br>Un pack tout-en-un, adapté à vos besoins et votre budget !',
            'image' => 'storage/services/6.jpg',
            'isChild' => true,
            'parent_id' => 1
        ],
        [
            'title' => 'Marketing digital',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'image' => 'storage/services/7.jpg',
            'isChild' => true,
            'parent_id' => 1
        ],
        [
            'title' => 'Stratégie',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'image' => 'storage/services/8.jpg',
            'isChild' => true,
            'parent_id' => 1
        ],
        // Children of 2
        [
            'title' => 'Production vidéo',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'image' => 'storage/services/9.jpg',
            'isChild' => true,
            'parent_id' => 2
        ],
        [
            'title' => 'Photographie',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'image' => 'storage/services/10.jpg',
            'isChild' => true,
            'parent_id' => 2
        ],
        [
            'title' => 'Design graphique',
            'description' => 'L\'identité visuelle de votre entreprise est autant unique que vous, et mérite le même soin ! Redox Digital est là pour vous, et nous serons très heureux de mettre nos compétences créatives à contributions de vos projets.',
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
