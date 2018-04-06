<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguoidungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoidung', function (Blueprint $table) {
            $table->increments('id_nguoi_dung');
            $table->string('ten_dang_nhap');
            $table->string('ten_that');
            $table->string('mat_khau');
            $table->string('que_quan');
            $table->string('nam_sinh');
            $table->string('gioi_tinh');
            $table->string('don_vi');
            $table->string('email');
            $table->string('so_dien_thoai');
            $table->string('chuc_vu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoidung');
    }
}
