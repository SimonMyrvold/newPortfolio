<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class projectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'project_name' => 'test',
                'project_description' => 'none',
                'github' => 'none',
                'demo' => 'none',
            ],
            [
                'project_name' => 'test2',
                'project_description' => 'none',
                'github' => 'none',
                'demo' => 'none',
            ]
        ];

        foreach($projects as $key => $value) {
            Project::create($value);
        }
    }
}
