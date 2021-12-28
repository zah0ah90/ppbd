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
    {
        Schema::dropIfExists('tbl_peserta');
        Schema::create('tbl_peserta', function (Blueprint $table) {
            $table->bigIncrements('id');



            $table->unsignedBigInteger('wali_id');


            $table->string('no_pendaftaran', 100)->nullable();
            $table->date('tanggal_daftar')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin', 10)->nullable();
            $table->string('status', 10)->nullable();
            $table->string('nama_lengkap_siswa', 100)->nullable();
            $table->string('nama_panggilan', 100)->nullable();
            $table->string('agama', 10)->nullable();
            $table->string('kewarganegaraan', 10)->nullable();
            $table->string('anak_ke', 10)->nullable();
            $table->string('banyak_sdr_kandung', 10)->nullable();
            $table->string('banyak_sdr_tiri', 10)->nullable();
            $table->string('banyak_sdr_angkat', 10)->nullable();
            $table->string('bahasa', 10)->nullable();
            $table->string('berat_badan', 10)->nullable();
            $table->string('tinggi_badan', 10)->nullable();
            $table->string('golongan_darah', 10)->nullable();
            $table->string('riwayat_penyakit', 10)->nullable();

            $table->text('alamat')->nullable();
            $table->text('bertempat_tinggal_bersama')->nullable();

            $table->string('foto_akta_lahir')->nullable();
            $table->string('foto_kartu_keluarga')->nullable();
            $table->string('foto_surat_pernyataan')->nullable();



            $table->foreign('wali_id')->references('id')->on('tbl_wali');



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