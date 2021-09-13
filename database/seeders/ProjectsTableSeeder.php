<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Provider\Lorem;

class ProjectsTableSeeder extends Seeder
{
    private $type = ['Video', 'Web','Web','Web', 'Marketing'];

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
        DB::table('project_videos')->delete();
        DB::table('project_webs')->delete();
        DB::table('project_marketings')->delete();

        for ($i = 1; $i <= 3; $i ++) {
            DB::table('project_videos')->insert([
                'vid_link' => 'https://www.youtube.com/embed/hc9fAKjfzmQ',
                'vid_desc' => $i .' : Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates earum, assumenda amet quos incidunt consectetur, sunt sint saepe ex ducimus repellat debitis velit ea quo pariatur perferendis, culpa tempore vel.',
            ]);
        }

        for ($i = 1; $i <= 3; $i ++) {
            DB::table('project_webs')->insert([
                'site_screenshot' => "storage/projects/web/$i.jpg",
                'site_url' => 'https://test'. $i . '.com',
                'site_desc' => $i .' : Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates earum, assumenda amet quos incidunt consectetur, sunt sint saepe ex ducimus repellat debitis velit ea quo pariatur perferendis, culpa tempore vel.',
            ]);
        }

        for ($i = 1; $i <= 3; $i ++) {
            DB::table('project_marketings')->insert([
                'mark_desc' => $i .' : Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates earum, assumenda amet quos incidunt consectetur, sunt sint saepe ex ducimus repellat debitis velit ea quo pariatur perferendis, culpa tempore vel.',
            ]);
        }

        for ($i=1; $i <= 9; $i++) {
            DB::table('projects')->insert([
                'title' => 'Projet '. $i,
                'client_id' => rand(1, 10),
                'archived' => 0,
                'context' => "Description $i, lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore porro ducimus laboriosam, rem dolores non neque, reiciendis quibusdam labore voluptate, pariatur sed molestiae. Incidunt necessitatibus consequuntur delectus officiis sunt!",
                'date' => $this->randDate(),
                'projectable_type' => 'App\Models\Project' . $this->type[rand(0, 3)],
                'projectable_id' => rand(1, 3),
            ]);
        }
    }
}
