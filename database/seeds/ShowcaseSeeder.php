<?php

use Illuminate\Database\Seeder;

class ShowcaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('showcases')->insert([
            'users_id' => '2',
            'file_name' => "lab_module1",
            'activity_name' => "[M1-TECHNICAL] MODULE 1",
            'activity_title' => "Frame by Frame Animation",
            'activity_description' => "here is a frame by frame animation we created for our first lab",
        ]);

    }
}
