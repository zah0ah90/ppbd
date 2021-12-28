@extends('frontend.page-belum-login.layouts.app')
@section('content')
<div class="card mx-auto w-50" style="background: rgba(255, 255, 255, 0.58);
            border-radius: 5px;">

    <div class="card-body">
        <p style="text-align: center;"><b style="font-size: 23px;">BUAT AKUN</b></p>
        <form action="{{ route('proses_register') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group row">
                <div class="col-sm-2 ">
                    <i class="fas fa-child" style="font-size: 30px;
                                margin-top: 4px;
                                margin-left: 10px;"></i>
                </div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" style="background:#C4C4C4;" name="namaanak"
                        placeholder="Nama Panggilan Anak">
                    @if($errors->has('namaanak'))
                    <small class="text-danger">{{ $errors->first('namaanak') }}</small>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <i class="fas fa-user" style="font-size: 30px;
                                margin-top: 4px;
                                margin-left: 10px;"></i>
                </div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" style="background:#C4C4C4;" name="username"
                        placeholder="Username">
                    @if($errors->has('username'))
                    <small class="text-danger">{{ $errors->first('username') }}</small>
                    @endif
                </div>
               
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <i class="fas fa-user" style="font-size: 30px;
                                margin-top: 4px;
                                margin-left: 10px;"></i>
                </div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" style="background:#C4C4C4;" name="nama"
                        placeholder="Nama Bapak Wali">
                    @if($errors->has('nama'))
                    <small class="text-danger">{{ $errors->first('nama') }}</small>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <i class="far fa-envelope" style="font-size: 30px;
                                margin-top: 4px;
                                margin-left: 10px;"></i>
                </div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" style="background:#C4C4C4;" name="email"
                        placeholder="Email Wali">
                    @if($errors->has('email'))
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <i class="fas fa-phone-alt" style="font-size: 30px;
                                margin-top: 4px;
                                margin-left: 10px;"></i>
                </div>
                <div class="col-sm-10">
                    <input type="number" class="form-control" style="background:#C4C4C4;" name="nomor_handphone"
                        placeholder="Nomor Handphone">
                    @if($errors->has('nomor_handphone'))
                    <small class="text-danger">{{ $errors->first('nomor_handphone') }}</small>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <i class="fas fa-unlock-alt" style="font-size: 30px;
                                margin-top: 4px;
                                margin-left: 10px;"></i>
                </div>
                <div class="col-sm-10">
                    <input type="password" class="form-control" style="background:#C4C4C4;" name="password"
                        placeholder="Password">
                    @if($errors->has('password'))
                    <small class="text-danger">{{ $errors->first('password') }}</small>
                    @endif
                </div>
                
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <i class="fas fa-unlock-alt" style="font-size: 30px;
                                margin-top: 4px;
                                margin-left: 10px;"></i>
                </div>
                <div class="col-sm-10">
                    <input type="password" class="form-control" style="background:#C4C4C4;" name="password_confirmation"
                        placeholder="Password Confirmation">
                    @if($errors->has('password_confirmation'))
                    <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                    @endif
                </div>
            </div>
            <div class="text-center">
                <button type="submit"  class="btn btn-primary text-dark text-center" style="width: 150px;background: #288BFF;
                            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                            border-radius: 5px;">Daftar</button>
            </div>
        </form>
    </div>
</div>
@endsection