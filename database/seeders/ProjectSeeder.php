<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Support\Facades\App;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 3; $i++) {
            $project = new Project;
            $project->title = $faker->unique()->title();
            $project->name = $faker->randomElement(['Aldo, Giovanni, Giacomo, Pino']);
            $project->description = $faker->paragraph();
            $project->save();
        }
    }
}
