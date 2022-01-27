@extends('frontend.page-belum-login.layouts.app')
@section('content')
    <div class="card mx-auto w-50" style="background: rgba(255, 255, 255, 0.58);
            border-radius: 5px;">

        <div class="card-body">
            <p style="text-align: center;"><b style="font-size: 23px;">LOGIN PESERTA</b></p>
            <form action="{{ route('proses_login') }}" method="POST" id="logForm">
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-sm-2">
                        <i class="far fa-envelope" style="font-size: 30px;
                                margin-top: 4px;
                                margin-left: 10px;"></i>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" style="background:#C4C4C4;" name="username"
                            placeholder="Username">
                        @if ($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
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
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>


                <div class="text-center">
                    <button class="btn btn-primary text-dark text-center" style="width: 150px;background: #288BFF;
                            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                            border-radius: 5px;">Login</button>
                </div>
            </form>
            <br>
            <br>
            <p style="margin-bottom: 0px;">Belum Punya Akun? <a href="{{ route('register') }}">Daftar Disini!</a></p>
            <p style="margin-bottom: 0px;">Lupa password <a href="{{ route('forget.password.get') }}">Klik!</a></p>
        </div>
    </div>
@endsection
