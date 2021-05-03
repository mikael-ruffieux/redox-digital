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
            'email' => 'admin@redoxdigital.ch',
            'password' => Hash::make('12345678'),
            'admin' => 1]);
        DB::table('users')->insert([
            'name' => 'mikael',
            'email' => 'mikael@redoxdigital.ch',
            'password' => Hash::make('MiRu6618$'),
            'admin' => 1]);
    }
}
