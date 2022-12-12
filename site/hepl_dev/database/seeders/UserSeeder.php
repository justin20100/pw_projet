<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $firstname = $i > 0 ? $faker->unique()->firstName : 'justin';
            $lastname = $i > 0 ? $faker->unique()->lastName : 'vincent';
            $avatar = $faker->imageUrl(128, 128, true, 'people', $i);
            $email = $i > 0 ? $faker->unique()->safeEmail : 'justin.vincent@student.hepl.be';
            $password = bcrypt('change_this');
            $is_admin = $i > 0 ? false : true;
            DB::table('users')
                ->insert(
                    compact( 'firstname','lastname','avatar', 'email', 'password','is_admin')
                );
        }
    }
}
