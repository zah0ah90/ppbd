<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriFotoDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tbl_galleri_foto_detail');
        Schema::create('tbl_galleri_foto_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->unsignedBigInteger('galleri_foto_id');

            $table->softDeletes();
            $table->timestamps();


            $table->foreign('galleri_foto_id')->references('id')->on('tbl_galleri_foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_galleri_foto_detail');
    }
}