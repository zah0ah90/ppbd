<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_berita', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 100);
            $table->date('tanggal_posting');
            $table->string('keterangan');
            $table->enum('type', ['Berita', 'Pengumuman'])->default('Berita');
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
        Schema::dropIfExists('tbl_berita');
    }
}