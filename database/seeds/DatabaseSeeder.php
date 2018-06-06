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
        $this->call(UserTableSeeder::class);
        $this->call(CapDoTableSeeder::class);
        $this->call(LoaiDoiTuongTableSeeder::class);
        $this->call(DoiTuongTableSeeder::class);
        $this->call(VideoTableSeeder::class);
        $this->call(CanhBaoTableSeeder::class);
    }
}
