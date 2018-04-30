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
        // $this->save('Video 1', 'F:\video.mp4', '3MB', '00:43');
    }

    public function save($ten_video, $duong_dan, $kich_thuoc, $thoi_gian)
    {
        $video = new \App\Video();
        $video->ten_video = $ten_video;
        $video->duong_dan = $duong_dan;
        $video->kich_thuoc = $kich_thuoc;
        $video->thoi_gian = $thoi_gian;
        $video->save();
    }
}
