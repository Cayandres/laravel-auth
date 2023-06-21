<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Project;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $new_project = new Project();
            $new_project->name = $faker->sentence(1);
            $new_project->description = $faker->sentence(5);
            $new_project->creation_date = $faker->date();
            $new_project->save();
        }
    }
}