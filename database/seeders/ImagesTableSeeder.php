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
            $type = $i%2 ? "image" : "gallery";
            $project_id = rand(1,9);

            DB::table('images')->insert([
                'project_id' => $project_id,
                'type' => $type,
                'url' => "storage/projects/$project_id/". ($type == "gallery" ? "gallery/" : "")  ."$i.jpg"
            ]);
        }
    }
}
