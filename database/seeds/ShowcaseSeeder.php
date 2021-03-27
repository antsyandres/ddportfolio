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
            'users_id' => '4',
            'file_name' => "1616674809.mp4",
            'activity_name' => "Module 1",
            'activity_title' => "Frame by Frame Animation",
            'activity_description' => "My first 2d animation, bird that fly across the screen",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '4',
            'file_name' => "1616674840.mp4",
            'activity_name' => "Module 2",
            'activity_title' => "Interactive Button",
            'activity_description' => "My 2nd 2d animation, buttons with sounds and pictures.",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '4',
            'file_name' => "1616674871.mp4",
            'activity_name' => "Module 3",
            'activity_title' => "E-Signature",
            'activity_description' => "My 3rd 2d animation, Esignature",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '4',
            'file_name' => "1616674915.mp4",
            'activity_name' => "Module 4",
            'activity_title' => "Sounds",
            'activity_description' => "My 4th 2d animation, Play button with sounds",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '4',
            'file_name' => "1616674969.mp4",
            'activity_name' => "Module 5",
            'activity_title' => "Action Script",
            'activity_description' => "My 5th 2d animation , keyboard control it controlls the object on your screen",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '4',
            'file_name' => "1616675010.mp4",
            'activity_name' => "Module 6",
            'activity_title' => "Thumbnail",
            'activity_description' => "My 6th 2d animation, image with button that has a action script that needs to show the image",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '4',
            'file_name' => "1616675048.mp4",
            'activity_name' => "Module 7-10",
            'activity_title' => "Page Loader 1",
            'activity_description' => "My final 2d animation, 1st page loader",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '4',
            'file_name' => "1616675075.mp4",
            'activity_name' => "Module 7-10",
            'activity_title' => "Page Loader 2",
            'activity_description' => "My final 2d animation, 2nd page loader",
        ]);

        DB::table('showcases')->insert([
            'users_id' => '14',
            'file_name' => "1616673290.mp4",
            'activity_name' => "[M1-TECHNICAL] MODULE 1",
            'activity_title' => "Frame by Frame Animation",
            'activity_description' => "Moving Animation using Frame by Frame",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '14',
            'file_name' => "1616673305.mkv",
            'activity_name' => "[M1-TECHNICAL] MODULE 2",
            'activity_title' => "Interactive Button",
            'activity_description' => "Using Simple Buttons in Animate",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '14',
            'file_name' => "1616673338.mp4",
            'activity_name' => "[M1-TECHNICAL] MODULE 3",
            'activity_title' => "E-Signature",
            'activity_description' => "Digital E-Signature with Sounds",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '14',
            'file_name' => "1616673367.mkv",
            'activity_name' => "[M1-TECHNICAL] MODULE 4",
            'activity_title' => "SOUNDS",
            'activity_description' => "Creating animation with sounds",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '14',
            'file_name' => "1616673408.mkv",
            'activity_name' => "[M1-TECHNICAL] MODULE 5",
            'activity_title' => "ACTION SCRIPT",
            'activity_description' => "Controlling object using AS3",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '14',
            'file_name' => "1616673431.mkv",
            'activity_name' => "[M1-TECHNICAL] MODULE 6",
            'activity_title' => "THUMBNAIL",
            'activity_description' => "Creating the Thumbnail and the Image Templates",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '14',
            'file_name' => "1616673455.mkv",
            'activity_name' => "[M1-TECHNICAL] MODULE 7-10",
            'activity_title' => "Page Loader 1",
            'activity_description' => "Creating a loader using UIloader",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '14',
            'file_name' => "1616673469.mkv",
            'activity_name' => "[M1-TECHNICAL] MODULE 7-10",
            'activity_title' => "Page Loader 2",
            'activity_description' => "Creating a loader using UIloader Second Part",
        ]);

        DB::table('showcases')->insert([
            'users_id' => '24',
            'file_name' => "1616671670.mp4",
            'activity_name' => "Technical 1",
            'activity_title' => "Frame by Frame Animation",
            'activity_description' => "this is a simple frame by frame animation for a flying bird to the other side.",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '24',
            'file_name' => "1616671865.mp4",
            'activity_name' => "Technical 2",
            'activity_title' => "Interactive Button",
            'activity_description' => "a simple button with 3 interactive states.",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '24',
            'file_name' => "1616671889.mp4",
            'activity_name' => "Technical 3",
            'activity_title' => "Electronic Signature",
            'activity_description' => "an E-Signature animation with some sound effects",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '24',
            'file_name' => "1616671978.mp4",
            'activity_name' => "Technical 4",
            'activity_title' => "Sounds and Video",
            'activity_description' => "an Interactive Sound Tester/ Sound board, with a simple animation",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '24',
            'file_name' => "1616672022.mp4",
            'activity_name' => "Technical 5",
            'activity_title' => "Introducting ActionScript 3.0",
            'activity_description' => "using ActionScript 3.0, you can move the image using arrow keys",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '24',
            'file_name' => "1616672040.mp4",
            'activity_name' => "Technical 6",
            'activity_title' => "Creating Thumbnail and Image Templates",
            'activity_description' => "by using ActionScript 3.0, Event Handlers are utilized to view the text",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '24',
            'file_name' => "1616672068.mp4",
            'activity_name' => "Technical 7.1",
            'activity_title' => "Page Loader 1",
            'activity_description' => "a simple page loader animation for a website",
        ]);
        DB::table('showcases')->insert([
            'users_id' => '24',
            'file_name' => "1616672083.mp4",
            'activity_name' => "Technical 7.2",
            'activity_title' => "Page Loader 2",
            'activity_description' => "a page loader animation for a website",
        ]);
    }
}
