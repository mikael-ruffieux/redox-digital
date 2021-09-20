<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    private $clients = [
        [
            'name' => 'Service de la Jeunesse de la ville de Bulle',
            'link' => 'https://jeunesse-bulle.ch/',
            'logo' => 'storage/clients/1.png',
            'public' => true
        ],
        [
            'name' => 'Groupe E',
            'link' => 'https://www.groupe-e.ch/fr',
            'logo' => 'storage/clients/2.png',
            'public' => true
        ],
        [
            'name' => 'You Look Amazing',
            'link' => 'https://youlookamazing.agency/',
            'logo' => 'storage/clients/3.png',
            'public' => true
        ],
        [
            'name' => 'Müli Deisswil',
            'link' => 'https://mueli-deisswil.ch/',
            'logo' => 'storage/clients/4.png',
            'public' => true
        ],
        [
            'name' => 'Start Up Ministries',
            'link' => 'https://www.startupministries.ch/',
            'logo' => 'storage/clients/5.png',
            'public' => true
        ],
        [
            'name' => 'Deathless',
            'link' => 'https://www.facebook.com/deathlessrockband/',
            'logo' => 'storage/clients/6.png',
            'public' => true
        ],
        [
            'name' => 'Cremo SA',
            'link' => 'https://www.cremo.ch/fr/',
            'logo' => 'storage/clients/7.png',
            'public' => true
        ],
        [
            'name' => 'Bullshop',
            'link' => 'https://bullshop.ch/',
            'logo' => 'storage/clients/8.png',
            'public' => true
        ],
        [
            'name' => 'UCB Farchim',
            'link' => 'https://ucbsuisse.ch/fr',
            'logo' => 'storage/clients/9.png',
            'public' => true
        ],
        [
            'name' => "L'Alpée de Vaulruz",
            'link' => 'http://alpee-vaulruz.ch/',
            'logo' => 'storage/clients/10.png',
            'public' => true
        ],
        [
            'name' => "Redox Digital",
            'link' => 'https://redoxdigital.ch',
            'logo' => '',
            'public' => false
        ],
        [
            'name' => "SRF Hackdays",
            'link' => 'https://www.srgssr.ch/fr/hackdays',
            'logo' => '',
            'public' => false
        ],
        [
            'name' => "FutureKids",
            'link' => 'https://futurekids.io/',
            'logo' => '',
            'public' => false
        ],
        [
            'name' => "Evolys",
            'link' => 'https://www.evolys.ch/',
            'logo' => '',
            'public' => false
        ],
        [
            'name' => "Kesako Sàrl",
            'link' => 'https://kesako.net/',
            'logo' => '',
            'public' => false
        ],
        [
            'name' => "Alpha Bulgaria",
            'link' => 'http://alphabg.org/',
            'logo' => '',
            'public' => false
        ],
        [
            'name' => "Etucom",
            'link' => 'https://www.etucom.com/',
            'logo' => '',
            'public' => false
        ],
        [
            'name' => "Bat Sap Chars 1",
            'link' => 'https://www.facebook.com/batsapchars1',
            'logo' => '',
            'public' => false
        ],
        [
            'name' => "Projet étudiant",
            'link' => 'https://heig-vd.ch',
            'logo' => '',
            'public' => false
        ],
        [
            'name' => "Projet personnel",
            'link' => '#',
            'logo' => '',
            'public' => false
        ],
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
