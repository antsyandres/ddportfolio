<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Marc Ferdinand',
            'last_name' => 'De Castro',
            'mi' => 'B.',
            'email' => 'mdecastro@admin.com',
            'password' => Hash::make('adminadmin'),
            'image_file' => 'default.png',
            'course' => 'BSITSMBA',
            'background' => 'Hi! My name is Marc Ferdinand B. De Castro, I\'m from Philippines, currently residing in Victoria, Laguna. I\'m studying at FEU Institute of Technology with the course of Information Technology specialized in Service Management and Business Analytics. Welcome to our website i hope you like our simple portfolio website.',
        ]);

        DB::table('users')->insert([
            'first_name' => 'Anthony',
            'last_name' => 'Serrano',
            'mi' => 'S.',
            'email' => 'aserrano@admin.com',
            'password' => Hash::make('adminadmin'),
            'image_file' => 'default.png',
            'course' => 'BSITWMA',
            'background' => 'Hello, you can call my antsy and thank you for visiting! I was born and rasied in Daly City, San Francisco, California. I\'m currently residing in the Philippines studying at Far Eastern University Institute Of Technology. I am a forth year student taking up Information Technology, Specialization in Web and Mobile Applications. I aspire to be a web developer once i graduate. Please take a look at my groups portfolio and thank you once again for visiting! Xiexie Zaijian!',
        ]);

        DB::table('users')->insert([
            'first_name' => 'Gabriel',
            'last_name' => 'Zamora',
            'mi' => 'E.',
            'email' => 'gzamora@admin.com',
            'password' => Hash::make('adminadmin'),
            'image_file' => 'default.png',
            'course' => 'BSITAGD',
            'background' => 'My name is Gabriel E. Zamora. I am 23 years old.I currently live in Meycauayan,Bulacan in the Philippines. I am a student of FEU Institute of Technology, where I am taking up BSIT with specialization in Animation and Game Development. I am aiming to be a flexible game developer one day.',
        ]);
    }
}