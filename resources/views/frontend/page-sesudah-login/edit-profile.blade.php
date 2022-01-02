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
                <form action="{{ route('ubah-password-wali') }}" method="POST">
                    @csrf
                    <div class="row form-group">
                        <div class="col-4">
                            <label for="">Username</label>
                        </div>
                        <div class="col-8">
                            <input type="text" class="input-tambahan-shadow form-control" value="{{$akun->username}}"
                                disabled>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-4">
                            <label for="">Email </label>
                        </div>
                        <div class="col-8">
                            <input type="text" class="input-tambahan-shadow form-control" value="{{$akun->email}}"
                                disabled>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-4">
                            <label for="">Password </label>
                        </div>
                        <div class="col-8">
                            <input type="password" class="input-tambahan-shadow form-control" name="password"
                                placeholder="Password">
                            @if ($errors->has('password'))
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-4">
                            <label for="">Password Confirmation </label>
                        </div>
                        <div class="col-8">
                            <input type="password" class="input-tambahan-shadow form-control"
                                name="password_confirmation" placeholder="Password Confirmation">
                            @if ($errors->has('password_confirmation'))
                            <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                            @endif
                        </div>
                    </div>


                    <button class="btn btn-primary text-light button-tambahan-shadow">Edit Password</button>
                </form>

            </div>
        </div>


    </div>
</div>

@endsection