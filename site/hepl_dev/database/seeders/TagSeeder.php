<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert(['name' => 'html']);
        DB::table('tags')->insert(['name' => 'css']);
        DB::table('tags')->insert(['name' => 'php']);
        DB::table('tags')->insert(['name' => 'js']);
        DB::table('tags')->insert(['name' => 'laravel']);
        DB::table('tags')->insert(['name' => 'wordpress']);
        DB::table('tags')->insert(['name' => 'flutter']);
        DB::table('tags')->insert(['name' => 'dart']);

        // project_tag
        DB::table('project_tag')->insert(['project_id' => '1','tag_id'=>'1']);
        DB::table('project_tag')->insert(['project_id' => '1','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '2','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '3','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '4','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '5','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '6','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '6','tag_id'=>'5']);
        DB::table('project_tag')->insert(['project_id' => '7','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '8','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '9','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '10','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '11','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '11','tag_id'=>'1']);
        DB::table('project_tag')->insert(['project_id' => '12','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '13','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '13','tag_id'=>'8']);
        DB::table('project_tag')->insert(['project_id' => '14','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '15','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '16','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '16','tag_id'=>'3']);
        DB::table('project_tag')->insert(['project_id' => '17','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '18','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '19','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '20','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '21','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '21','tag_id'=>'1']);
        DB::table('project_tag')->insert(['project_id' => '22','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '23','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '24','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '25','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '26','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '27','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '27','tag_id'=>'6']);
        DB::table('project_tag')->insert(['project_id' => '28','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '29','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '30','tag_id'=>'2']);
        DB::table('project_tag')->insert(['project_id' => '30','tag_id'=>'3']);
        DB::table('project_tag')->insert(['project_id' => '30','tag_id'=>'1']);
    }
}
