@extends('frontend.page-belum-login.layouts.app')
@section('content')
<div class="card mx-auto w-50" style="background: rgba(255, 255, 255, 0.58);
            border-radius: 5px;">

    <div class="card-body">
        <p style="text-align: center;"><b style="font-size: 23px;">BUAT AKUN</b></p>
        <form action="#">

            <div class="form-group row">
                <div class="col-sm-2 ">
                    <i class="fas fa-child" style="font-size: 30px;
                                margin-top: 4px;
                                margin-left: 10px;"></i>
                </div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" style="background:#C4C4C4;" name="namaAnak"
                        placeholder="Nama Anak">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <i class="fas fa-user" style="font-size: 30px;
                                margin-top: 4px;
                                margin-left: 10px;"></i>
                </div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" style="background:#C4C4C4;" name="namaWali"
                        placeholder="Nama Wali">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <i class="far fa-envelope" style="font-size: 30px;
                                margin-top: 4px;
                                margin-left: 10px;"></i>
                </div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" style="background:#C4C4C4;" name="emailWali"
                        placeholder="Email Wali">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <i class="fas fa-phone-alt" style="font-size: 30px;
                                margin-top: 4px;
                                margin-left: 10px;"></i>
                </div>
                <div class="col-sm-10">
                    <input type="number" class="form-control" style="background:#C4C4C4;" name="noHandphone"
                        placeholder="No. Handphone">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <i class="fas fa-unlock-alt" style="font-size: 30px;
                                margin-top: 4px;
                                margin-left: 10px;"></i>
                </div>
                <div class="col-sm-10">
                    <input type="password" class="form-control" style="background:#C4C4C4;" name="Password"
                        placeholder="Password">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <i class="fas fa-unlock-alt" style="font-size: 30px;
                                margin-top: 4px;
                                margin-left: 10px;"></i>
                </div>
                <div class="col-sm-10">
                    <input type="password" class="form-control" style="background:#C4C4C4;" name="PasswordConfirm"
                        placeholder="Password">
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary text-dark text-center" style="width: 150px;background: #288BFF;
                            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                            border-radius: 5px;">Daftar</button>
            </div>
        </form>
    </div>
</div>
@endsection