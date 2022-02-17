<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);           // 3 users
        $this->call(ClientsTableSeeder::class);         // 10 clients
        //$this->call(ProjectsTableSeeder::class);        // 9 projects
        //$this->call(ImagesTableSeeder::class);          // 30 images
        $this->call(ServicesTableSeeder::class);        // 11 services (2 parents, 9 children)
        $this->call(AccordionsTableSeeder::class);      // 17 accordions
        // $this->call(ProjectServiceTableSeeder::class);  // 1 services attribution to each project

        // #### CV ####
        $this->call(CVExperiencesSeeder::class);
        $this->call(CVProjectsSeeder::class);
    }
}
