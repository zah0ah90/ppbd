@extends('frontend.page-belum-login.layouts.app')
@section('content')
<div class="card mx-auto w-50" style="background: rgba(255, 255, 255, 0.58);
                        border-radius: 5px;">

    <div class="card-body">
        <p style="text-align: center;"><b style="font-size: 23px;">RESET PASSWORD PENDAFTAR</b></p>

        <form action="{{ route('reset.password.post') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">

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
                    @if ($errors->has('password_confirmation'))
                    <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                    @endif
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary text-dark text-center" style="width: 250px;background: #288BFF;
                                        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                                        border-radius: 5px;">Send reset password</button>
            </div>
        </form>
        <br>
        <br>
        <p style="margin-bottom: 0px;">Belum Punya Akun? <a href="{{ route('register') }}">Daftar Disini!</a></p>
        <p style="margin-bottom: 0px;">Login <a href="{{ route('login') }}">Klik!</a></p>
    </div>
</div>
@endsection