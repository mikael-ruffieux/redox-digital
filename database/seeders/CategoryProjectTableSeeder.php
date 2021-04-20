<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('category_project')->delete();

        for ($i = 1; $i <= 100; $i++) {
            $numbers = range(1, 10);
            shuffle($numbers);
            $n = rand(3, 6);
            for ($j = 1; $j <= $n; $j++) {
                DB::table('category_project')->insert([
                    'category_id' => $i,
                    'project_id' => $numbers[$j]]
                );
            }
        }
    }
}
