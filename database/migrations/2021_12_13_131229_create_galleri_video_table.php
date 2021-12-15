<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::dropIfExists('tbl_galleri_video');
        Schema::create('tbl_galleri_video', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('embed_link');
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
        Schema::dropIfExists('tbl_galleri_video');
    }
}