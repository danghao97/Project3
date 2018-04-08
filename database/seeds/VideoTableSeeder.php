<?php

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video = new \App\Video();
        $video->ten_video = 'Video 15';
        $video->duong_dan = 'F:\video.mp4';
        $video->kich_thuoc = '6MB';
        $video->thoi_gian = '00:03';
        $video->save();
    }
}
