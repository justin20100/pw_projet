<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i = 0; $i < 30; $i++) {
            $title = $i > 0 ? $faker->sentence(2) : 'portfolio';
            $slug = Str::slug($title);
            $short_description = $i > 0 ? $faker->realText('30') : 'Ceci est la prtite description du projet';
            $description = $i > 0 ? $faker->realText('300') : 'Ceci est la grande description du projet crée au cours de projet web pour tester des données dans le site web que nous devont realiser pour ce cours de projet web.';
            $img_src = 'project'.$faker->randomNumber(1,10).'jpg';
            $alt = $i > 0 ? $faker->realText('30') : 'Ceci est la petite description du projet';
            $href = $i > 0 ? $faker->url : 'justin-vincent.be';
            $user_id = $i > 0 ? $faker->numberBetween(1,10) : 1 ;
            $created_at = $faker->dateTime;
            $updated_at = $faker->dateTime;
            DB::table('projects')
                ->insert(
                    compact( 'title', 'slug', 'short_description', 'description', 'img_src', 'alt', 'href', 'user_id','created_at', 'updated_at')
                );
        }
    }
}
