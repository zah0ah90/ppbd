@extends('frontend.page-sesudah-login.layouts.app')
@section('content')
<div class="row">
    <div class="col-6">
        <p style="text-align: center;"><b style="font-size: 30px;">
                Hai Andri Agustiana <br>
                Selamat Datang Di (PPDB) Online <br>
                SD Negeri Nurul Salam <br>
                2021/2022 <br>
            </b>
            <br>
            <a class="btn btn-primary w-50 text-dark" style="background: #288BFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;" href="{{route('alur_pendaftaran')}}">ALUR PENDAFATARAN</a>
        </p>
    </div>
    <div class="col-6">
        <img src="{{asset('frontend/gambar/frontend-sesudah-login-home1.png')}}" style="margin-top: -20px;" alt="">
    </div>
</div>

@endsection