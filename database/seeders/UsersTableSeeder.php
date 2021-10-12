<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'info@redoxdigital.ch',
            'password' => Hash::make('MiRu6618$'), // not the production password
        ]);

        DB::table('users')->insert([
            'name' => 'mikael',
            'email' => 'mikael@redoxdigital.ch',
            'password' => Hash::make('MiRu6618$'), // not the production password
        ]);

        DB::table('users')->insert([
            'name' => 'etienne',
            'email' => 'etienne@redoxdigital.ch',
            'password' => Hash::make('EtWi0564$'), // not the production password
        ]);
    }
}
