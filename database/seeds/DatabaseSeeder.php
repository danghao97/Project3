<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('video')->insert([
            [
                'ten_video'     => 'Video 1',
                'duong_dan'     => 'F:\video.mp4',
                'kich_thuoc'    => '6MB',
                'thoi_gian'     => '00:03'
            ],
            [
                'ten_video'     => 'Video 2',
                'duong_dan'     => 'F:\video.mp4',
                'kich_thuoc'    => '18MB',
                'thoi_gian'     => '03:00'
            ]
        ]);
    }
}
