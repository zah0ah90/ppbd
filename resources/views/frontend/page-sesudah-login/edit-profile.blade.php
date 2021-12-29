@extends('frontend.page-sesudah-login.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div style="font-size: 26px;"><b>EDIT PROFIL</b></div>
        <div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
        <br>
        <br>

        <div class="card w-75 mx-auto p-5" style="background: rgba(0, 0, 0, 0.08);">
            <div class="card-body">
                <form action="#">
                    <div class="row form-group">
                        <div class="col-4">
                            <label for="">Nama Siswa </label>
                        </div>
                        <div class="col-8">
                            <input type="text" class="input-tambahan-shadow form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-4">
                            <label for="">Tempat Tanggal Lahir </label>
                        </div>
                        <div class="col-8">
                            <input type="text" class="input-tambahan-shadow form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-4">
                            <label for="">Jenis Kelamin </label>
                        </div>
                        <div class="col-8">
                            <input type="text" class="input-tambahan-shadow form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-4">
                            <label for="">Nama Wali/ Orang Tua </label>
                        </div>
                        <div class="col-8">
                            <input type="text" class="input-tambahan-shadow form-control">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-4">
                            <label for="">Alamat</label>
                        </div>
                        <div class="col-8">
                            <input type="text" class="input-tambahan-shadow form-control">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-4">
                            <label for="">No. HP/ Whatsapp </label>
                        </div>
                        <div class="col-8">
                            <input type="text" class="input-tambahan-shadow form-control">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-4">
                            <label for="">Email </label>
                        </div>
                        <div class="col-8">
                            <input type="text" class="input-tambahan-shadow form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-4">
                            <label for="">Foto Siswa </label>
                        </div>
                        <div class="col-8">
                            <input type="text" class="w-50 input-tambahan-shadow form-control">
                            <br> <button class="button-tambahan-shadow btn btn-secondary text-dark">Unggah
                                Foto</button>
                        </div>
                    </div>
                    <button class="btn btn-primary text-dark button-tambahan-shadow">Simpan Data</button>
                </form>

            </div>
        </div>


    </div>
</div>

@endsection