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
            'logo' => 'storage/clients/1.png'
        ],
        [
            'name' => 'Groupe E',
            'link' => 'https://www.groupe-e.ch/fr',
            'logo' => 'storage/clients/2.png'
        ],
        [
            'name' => 'You Look Amazing',
            'link' => 'https://youlookamazing.agency/',
            'logo' => 'storage/clients/3.png'
        ],
        [
            'name' => 'Müli Deisswil',
            'link' => 'https://mueli-deisswil.ch/',
            'logo' => 'storage/clients/4.png'
        ],
        [
            'name' => 'Start Up Ministries',
            'link' => 'https://www.startupministries.ch/',
            'logo' => 'storage/clients/5.png'
        ],
        [
            'name' => 'Deathless',
            'link' => 'https://www.facebook.com/deathlessrockband/',
            'logo' => 'storage/clients/6.png'
        ],
        [
            'name' => 'Cremo SA',
            'link' => 'https://www.cremo.ch/fr/',
            'logo' => 'storage/clients/7.png'
        ],
        [
            'name' => 'Bullshop',
            'link' => 'https://bullshop.ch/',
            'logo' => 'storage/clients/8.png'
        ],
        [
            'name' => 'UCB Farchim',
            'link' => 'https://ucbsuisse.ch/fr',
            'logo' => 'storage/clients/9.png'
        ],
        [
            'name' => "l'Alpée de Vaulruz",
            'link' => 'http://alpee-vaulruz.ch/',
            'logo' => 'storage/clients/10.png'
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
