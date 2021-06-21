<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->delete();

        for ($i=1; $i <= 10; $i++) {
            DB::table('clients')->insert([
                'name' => 'Client '. $i,
                'link' => "test$i.com",
            ]);
        }
    }
}
