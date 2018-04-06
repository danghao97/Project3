<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaidoituongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaidoituong', function (Blueprint $table) {
            $table->increments('id_loai_doi_tuong');
            $table->string('ten_loai');
            $table->integer('id_cap_do')->unsigned();
            $table->foreign('id_cap_do')->references('id_cap_do')->on('capdo');
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
        Schema::dropIfExists('loaidoituong');
    }
}
