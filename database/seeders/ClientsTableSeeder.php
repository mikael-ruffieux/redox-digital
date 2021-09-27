<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    private $clients = [
    [
        
        "name" => "Service de la Jeunesse de la ville de Bulle",
        "link" => "https://jeunesse-bulle.ch/",
        "logo" => "storage/clients/1.png", "public" => true
    ],
    [
        
        "name" => "Groupe E",
        "link" => "https://www.groupe-e.ch/fr",
        "logo" => "storage/clients/2.png", "public" => true
    ],
    [
        
        "name" => "You Look Amazing",
        "link" => "https://youlookamazing.agency/",
        "logo" => "storage/clients/3.png", "public" => true
    ],
    [
        
        "name" => "Müli Deisswil",
        "link" => "https://mueli-deisswil.ch/",
        "logo" => "storage/clients/4.png", "public" => true
    ],
    [
        
        "name" => "Start Up Ministries",
        "link" => "https://www.startupministries.ch/",
        "logo" => "storage/clients/5.png", "public" => true
    ],
    [
        
        "name" => "Deathless",
        "link" => "https://www.facebook.com/deathlessrockband/",
        "logo" => "storage/clients/6.png", "public" => true
    ],
    [
        
        "name" => "Cremo SA",
        "link" => "https://www.cremo.ch/fr/",
        "logo" => "storage/clients/7.png", "public" => true
    ],
    [
        
        "name" => "Bullshop",
        "link" => "https://bullshop.ch/",
        "logo" => "storage/clients/8.png", "public" => true
    ],
    [
        
        "name" => "UCB Farchim",
        "link" => "https://ucbsuisse.ch/fr",
        "logo" => "storage/clients/9.png", "public" => true
    ],
    [
        
        "name" => "L'Alpée de Vaulruz",
        "link" => "http://alpee-vaulruz.ch/",
        "logo" => "storage/clients/10.png", "public" => true
    ],
    [
        
        "name" => "Redox Digital SNC",
        "link" => "https://redoxdigital.ch/",
        "logo" => "storage/clients/11.png", "public" => false
    ],
    [
        
        "name" => "SRF Hackdays",
        "link" => "https://www.srgssr.ch/fr/hackdays",
        "logo" => "storage/clients/12.png", "public" => false
    ],
    [
        
        "name" => "FutureKids",
        "link" => "https://futurekids.io/",
        "logo" => "storage/clients/13.png", "public" => true
    ],
    [
        
        "name" => "Evolys",
        "link" => "https://www.evolys.ch/",
        "logo" => "storage/clients/14.png", "public" => true
    ],
    [
        
        "name" => "Kesako Sàrl",
        "link" => "https://kesako.net/",
        "logo" => "storage/clients/15.png", "public" => false
    ],
    [
        
        "name" => "Alpha Bulgaria",
        "link" => "http://alphabg.org/",
        "logo" => "storage/clients/16.png", "public" => true
    ],
    [
        
        "name" => "Etucom Sàrl",
        "link" => "https://www.etucom.com/",
        "logo" => "storage/clients/17.png", "public" => false
    ],
    [
        
        "name" => "Bat sap chars 1",
        "link" => "https://www.facebook.com/batsapchars1",
        "logo" => "storage/clients/18.png", "public" => false
    ],
    [
        
        "name" => "Projet personnel",
        "link" => "#",
        "logo" => "storage/clients/19.png", "public" => false
    ],
    [
        
        "name" => "Projet étudiant",
        "link" => "https://heig-vd.ch/",
        "logo" => "storage/clients/20.png", "public" => false
    ],
    [
        
        "name" => "Ceramaret SA",
        "link" => "https://www.ceramaret.ch/",
        "logo" => "storage/clients/21.png", "public" => false
    ],
    [
        
        "name" => "Glion - Institute of higher education",
        "link" => "https://www.glion.edu/",
        "logo" => "storage/clients/22.png", "public" => true
    ],
    [
        
        "name" => "Caroline Schar",
        "link" => "https://www.carolineschar.com",
        "logo" => "storage/clients/23.png", "public" => true
    ],
    [
        
        "name" => "Every Moment",
        "link" => "https://everymoment.ch/",
        "logo" => "storage/clients/24.png", "public" => true
    ],
    [
        
        "name" => "Pierrot Productions",
        "link" => "https://www.pierrotproductions.ch/",
        "logo" => "storage/clients/25.png", "public" => true
    ],
    [
        
        "name" => "Estheticana",
        "link" => "https://estheticana.ch/",
        "logo" => "storage/clients/26.png", "public" => true
    ],
    [
        
        "name" => "Comptoir d'Artisanat de Cortaillod",
        "link" => "https://cortaillod-artisanat.ch/",
        "logo" => "storage/clients/27.png", "public" => true
    ],
    [
        
        "name" => "Plugthatcable",
        "link" => "en attente",
        "logo" => "storage/clients/28.png", "public" => false
    ],
    [
        
        "name" => "H2EAU",
        "link" => "https://www.h2eau.ch/",
        "logo" => "storage/clients/29.png", "public" => false
    ],
    [
        
        "name" => "VaumArtscus",
        "link" => "https://www.facebook.com/vaumartscus",
        "logo" => "storage/clients/30.png", "public" => false
    ],
    [
        
        "name" => "MXM Prod",
        "link" => "https://www.facebook.com/mxmproduction/",
        "logo" => "storage/clients/31.png", "public" => false
    ],
    [
        
        "name" => "CrossFit Lacustre",
        "link" => "https://www.crossfitlacustre.com/",
        "logo" => "storage/clients/32.png", "public" => false
    ]
];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->delete();

        foreach ($this->clients as $client) {
            DB::table('clients')->insert($client);
        }
    }
}
