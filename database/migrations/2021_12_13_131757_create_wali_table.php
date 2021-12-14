<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::dropIfExists('tbl_wali');
        Schema::create('tbl_wali', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
         
            $table->string('nama_ibu_kandung',100);
            $table->string('nama_ayah_kandung',100);
            $table->string('nomor_kk',100);
            $table->text('alamat');
            $table->string('agama',10);
            $table->string('nomor_handphone_ibu',20);
            $table->string('nomor_handphone_ayah',20);
            $table->string('pendidikan_akhir_ayah',20);
            $table->string('pendidikan_akhir_ibu',20);
            $table->string('pekerjaan_ayah',20);
            $table->string('pekerjaan_ibu',20);
            $table->string('hubungan_terhadap_anak',20);
            $table->string('foto_berkas');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });


      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_wali');
    }
}