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
        $this->save('Video 1', 'F:\video.mp4', '3MB', '00:43');
        $this->save('Video 2', 'F:\video.mp4', '6MB', '04:24');
        $this->save('Video 3', 'F:\video.mp4', '5MB', '00:59');
        $this->save('Video 4', 'F:\video.mp4', '2MB', '01:30');
        $this->save('Video 5', 'F:\video.mp4', '6MB', '05:22');
        $this->save('Video 6', 'F:\video.mp4', '1MB', '06:37');
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
