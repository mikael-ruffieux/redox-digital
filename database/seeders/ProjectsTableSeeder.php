<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        for ($i = 1; $i <= 10; $i++) {
            $date = $this->randDate();
            DB::table('projects')->insert([
                'titre' => 'Projet' . $i,
                'contenu' => 'Contenu ' . $i . ' Lorem ipsum dolor sit amet, consectetur ' .
                'adipiscing elit. Proin vel auctor libero, quis venenatis ' .
                'augue. Curabitur a pulvinar tortor, vitae condimentum ' .
                'libero. Cras eu massa sed lorem mattis lacinia. ' .
                'Vestibulum id feugiat turpis. Proin a lorem ligula.',
                'url' => 'url' . $i,
                'archived' => random_int(0, 1),
                'created_at' => $date,
                'updated_at' => $date
            ]);
        }
    }
}
