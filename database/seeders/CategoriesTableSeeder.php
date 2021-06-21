<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        for ($i=1; $i <= 10; $i++) {
            DB::table('categories')->insert([
                'project_id' => $i,
                'service_id' => rand(3, 11),
            ]);
        }
    }
}
