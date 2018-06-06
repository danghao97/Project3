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
        // $this->save('Cấp độ 1', 'Bình thường');
        // $this->save('Cấp độ 2', 'Nguy hiểm');
        // $this->save('Cấp độ 3', 'Cực kì nguy hiểm');
    }

    public function save($ten_cap_do, $muc_do_anh_huong)
    {
        $capdo = new \App\CapDo();
        $capdo->ten_cap_do = $ten_cap_do;
        $capdo->muc_do_anh_huong = $muc_do_anh_huong;
        $capdo->save();
    }
}
