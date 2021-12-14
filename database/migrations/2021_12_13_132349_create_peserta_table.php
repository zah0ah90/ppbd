<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::dropIfExists('tbl_peserta');
        Schema::create('tbl_peserta', function (Blueprint $table) {
            $table->bigIncrements('id');

            

            $table->unsignedBigInteger('wali_id');
            $table->unsignedBigInteger('berkas_id');

            $table->string('no_pendaftaran',100);
            $table->date('tanggal_daftar');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin',10);
            $table->string('status',10);
            $table->string('nama_lengkap_siswa',100);
            $table->string('nama_panggilan',100);
            $table->string('agama',10);
            $table->string('kewarganegaraan',10);
            $table->string('anak_ke',10);
            $table->string('banyak_sdr_kandung',10);
            $table->string('banyak_sdr_tiri',10);
            $table->string('banyak_sdr_angkat',10);
            $table->string('bahasa',10);
            $table->string('berat_badan',10);
            $table->string('tinggi_badan',10);
            $table->string('golongan_darah',10);
            $table->string('riwayat_penyakit',10);
            $table->text('alamat');
            $table->text('bertempat_tinggal_bersama');
            
            
            $table->foreign('wali_id')->references('id')->on('tbl_wali');
            $table->foreign('berkas_id')->references('id')->on('tbl_berkas');


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
        Schema::dropIfExists('tbl_peserta');
    }
}