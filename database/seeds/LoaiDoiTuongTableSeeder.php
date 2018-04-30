<?php

use Illuminate\Database\Seeder;

class LoaiDoiTuongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->save('Nhân viên', '1');
        $this->save('Cán bộ', '1');
        $this->save('Giám đốc', '1');
        $this->save('Khách hàng', '1');
        $this->save('Trộm cắp', '2');
        $this->save('Xã hội đen', '2');
        $this->save('Tội phạm truy nã', '3');
    }

    public function save($ten_loai, $id_cap_do)
    {
        $object = new \App\LoaiDoiTuong();
        $object->ten_loai = $ten_loai;
        $object->id_cap_do = $id_cap_do;
        $object->save();
    }
}
