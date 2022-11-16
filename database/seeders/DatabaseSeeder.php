<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\projectController;
use App\Models\About;
use App\Models\Project;
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
        // $this->call(projectTableSeeder::class);

        About::factory()
        ->count(1)
        ->hasContacts(3)
        ->hasCertificates(3)
        ->create();

        Project::factory()
        ->count(4)
        ->create();
    }
}
