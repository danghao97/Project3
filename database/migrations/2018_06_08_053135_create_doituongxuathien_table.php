<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoituongxuathienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doituongxuathien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_video')->unsigned();
            $table->foreign('id_video')->references('id_video')->on('video')->onDelete('cascade');
            $table->integer('id_doi_tuong')->unsigned();
            $table->foreign('id_doi_tuong')->references('id_doi_tuong')->on('doituong')->onDelete('cascade');
            $table->string('thoi_diem_xuat_hien');
            $table->string('thoi_gian_xuat_hien');
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
        Schema::dropIfExists('doituongxuathien');
    }
}
