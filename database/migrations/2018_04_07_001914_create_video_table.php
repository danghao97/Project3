<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {
            $table->increments('id_video');
            $table->integer('id_doi_tuong')->unsigned()->nullable();
            $table->foreign('id_doi_tuong')->references('id_doi_tuong')->on('doituong')->onDelete('cascade');
            $table->string('ten_video');
            $table->string('duong_dan');
            $table->string('kich_thuoc');
            $table->dateTime('thoigian_batdau')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('thoi_gian');
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
        Schema::dropIfExists('video');
    }
}
