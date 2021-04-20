<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    private function randDate() {
        return Carbon::createFromDate(null, rand(1, 12), rand(1, 28));
    }
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('categories')->delete();
        for ($i = 1; $i <= 10; $i++) {
            $date = $this->randDate();
            DB::table('categories')->insert([
                'category' => 'categorie' . $i,
                'category_url' => 'categorie' . $i,
                'created_at' => $date,
                'updated_at' => $date]
            );
        }
    }
}
