<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->delete();

        for ($i=1; $i <= 30; $i++) {
            DB::table('images')->insert([
                'project_id' => rand(1, 10),
                'url' => "storage/img$i.jpg",
            ]);
        }
    }
}
