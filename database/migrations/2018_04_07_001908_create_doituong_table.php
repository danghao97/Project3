<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoituongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doituong', function (Blueprint $table) {
            $table->increments('id_doi_tuong');
            $table->string('ten_doi_tuong');
            $table->string('tuoi');
            $table->string('nghe_nghiep');
            $table->string('chuc_vu');
            $table->string('anh_chan_dung');
            $table->integer('id_loai_doi_tuong')->unsigned();
            $table->foreign('id_loai_doi_tuong')->references('id_loai_doi_tuong')->on('loaidoituong')->onDelete('cascade');
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
        Schema::dropIfExists('doituong');
    }
}
