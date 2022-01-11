<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Provider\Lorem;

class ProjectsTableSeeder extends Seeder
{
    private function randDate() {
        $nbJours = rand(-2800, 0);
        return Carbon::now()->addDays($nbJours);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();

        for ($i=1; $i <= 15; $i++) {
            DB::table('projects')->insert([
                'title' => 'Projet '. $i,
                'client_id' => rand(1, 10),
                'archived' => 0,
                'custom_summary' => "Résumé $i, lorem ipsum dolor sit amet, consectetur adipisicing elit.",
                'external_url' => null,
                'date' => $this->randDate(),

                'context_title' => "Contexte customisé",
                'context_desc' => "Contexte Description $i, lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore porro ducimus laboriosam, rem dolores non neque, reiciendis quibusdam labore voluptate, pariatur sed molestiae. Incidunt necessitatibus consequuntur delectus officiis sunt!",

                'video_source' => "youtube",
                'video_url' => "https://player.vimeo.com/video/247694127?h=13121eee51",

                'design_desc' => "Design Description $i, lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore porro ducimus laboriosam, rem dolores non neque, reiciendis quibusdam labore voluptate, pariatur sed molestiae. Incidunt necessitatibus consequuntur delectus officiis sunt!",

                'solution_title' => null,
                'solution_desc' => "Solutions Description $i, lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore porro ducimus laboriosam, rem dolores non neque, reiciendis quibusdam labore voluptate, pariatur sed molestiae. Incidunt necessitatibus consequuntur delectus officiis sunt!",
            ]);
        }
    }
}
