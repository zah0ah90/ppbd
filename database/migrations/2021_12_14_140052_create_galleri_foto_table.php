<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tbl_galleri_foto');
        Schema::create('tbl_galleri_foto', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nama', 100);
            $table->enum('type', ['Prestasi', 'Galeri Foto'])->default('Prestasi');
        
            $table->unsignedBigInteger('foto_id');

            $table->softDeletes();
            $table->timestamps();

       
            $table->foreign('foto_id')->references('id')->on('tbl_galleri_foto_detail');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_galleri_foto');
    }
}