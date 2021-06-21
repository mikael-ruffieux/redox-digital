<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    private $type = ['video', 'web', 'marketing'];

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

        for ($i=1; $i <= 10; $i++) {
            DB::table('projects')->insert([
                'title' => 'Projet '. $i,
                'client_id' => rand(1, 10),
                'archived' => rand(0, 1),
                'context' => "Description $i, lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore porro ducimus laboriosam, rem dolores non neque, reiciendis quibusdam labore voluptate, pariatur sed molestiae. Incidunt necessitatibus consequuntur delectus officiis sunt!",
                'date' => $this->randDate(),
                'project_type' => $this->type[rand(0, 2)],
            ]);
        }
    }
}
