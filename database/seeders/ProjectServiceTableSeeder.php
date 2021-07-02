<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_service')->delete();
        for ($i=1; $i <= 9; $i++) { 
            DB::table('project_service')->insert([
                'project_id' => $i,
                'service_id' => rand(3, 11),
            ]);
        }
    }
}
