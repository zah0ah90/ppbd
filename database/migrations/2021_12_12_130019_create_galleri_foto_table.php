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
            $table->enum('status', ['1', '0'])->default('1');
            $table->softDeletes();
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
        Schema::dropIfExists('tbl_galleri_foto');
    }
}