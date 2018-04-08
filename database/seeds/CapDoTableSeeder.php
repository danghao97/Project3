<?php

use Illuminate\Database\Seeder;

class CapDoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $capdo = new \App\CapDo();
        $capdo->ten_cap_do = 'Cấp độ 1';
        $capdo->muc_do_anh_huong = 'Bình thường';
        $capdo->save();

        $capdo = new \App\CapDo();
        $capdo->ten_cap_do = 'Cấp độ 3';
        $capdo->muc_do_anh_huong = 'Nguy hiểm';
        $capdo->save();

        $capdo = new \App\CapDo();
        $capdo->ten_cap_do = 'Cấp độ 3';
        $capdo->muc_do_anh_huong = 'Cực kì nguy hiểm';
        $capdo->save();
    }
}
