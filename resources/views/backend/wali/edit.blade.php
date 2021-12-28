@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Wali</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('wali.index') }}">Wali</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Wali</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if(session()->has('message'))
                    <p>{{ session()->get('message') }}</p>
                    @endif
                    <!-- /.card-header -->
                    <div class="card-body table-responsive ">
                        <form action="{{ route('wali.update',$wali->id) }}" method="POST">
                            @csrf
                            @method('PUT')


                            <div class="form-group">
                                <label>Nama Ayah</label>
                                <input type="text" class="form-control" name="nama_ayah_kandung" id="nama_ayah_kandung"
                                    value="{{ $wali->nama_ayah_kandung }}">
                                @if($errors->has('nama_ayah_kandung'))
                                <small class="text-danger">{{ $errors->first('nama_ayah_kandung') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Nama Ibu</label>
                                <input type="text" class="form-control" name="nama_ibu_kandung" id="nama_ibu_kandung"
                                    value="{{ $wali->nama_ibu_kandung }}">
                                @if($errors->has('nama_ibu_kandung'))
                                <small class="text-danger">{{ $errors->first('nama_ibu_kandung') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Nomor KK</label>
                                <input type="text" class="form-control" name="nomor_kk" id="nomor_kk"
                                    value="{{ $wali->nomor_kk }}">
                                @if($errors->has('nomor_kk'))
                                <small class="text-danger">{{ $errors->first('nomor_kk') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat"
                                    value="{{ $wali->alamat }}">
                                @if($errors->has('alamat'))
                                <small class="text-danger">{{ $errors->first('alamat') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Agama</label>
                                <input type="text" class="form-control" name="agama" id="agama"
                                    value="{{ $wali->agama }}">
                                @if($errors->has('agama'))
                                <small class="text-danger">{{ $errors->first('agama') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Nomor Handphone Ayah</label>
                                <input type="text" class="form-control" name="nomor_handphone_ayah" id="nomor_handphone_ayah"
                                    value="{{ $wali->nomor_handphone_ayah }}">
                                @if($errors->has('nomor_handphone_ayah'))
                                <small class="text-danger">{{ $errors->first('nomor_handphone_ayah') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Nomor Handphone Ibu</label>
                                <input type="text" class="form-control" name="nomor_handphone_ibu" id="nomor_handphone_ibu"
                                    value="{{ $wali->nomor_handphone_ibu }}">
                                @if($errors->has('nomor_handphone_ibu'))
                                <small class="text-danger">{{ $errors->first('nomor_handphone_ibu') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Pendidikan Akhir Ayah</label>
                                <input type="text" class="form-control" name="pendidikan_akhir_ayah" id="pendidikan_akhir_ayah"
                                    value="{{ $wali->pendidikan_akhir_ayah }}">
                                @if($errors->has('pendidikan_akhir_ayah'))
                                <small class="text-danger">{{ $errors->first('pendidikan_akhir_ayah') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Pendidikan Akhir Ibu</label>
                                <input type="text" class="form-control" name="pendidikan_akhir_ibu" id="pendidikan_akhir_ibu"
                                    value="{{ $wali->pendidikan_akhir_ibu }}">
                                @if($errors->has('pendidikan_akhir_ibu'))
                                <small class="text-danger">{{ $errors->first('pendidikan_akhir_ibu') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Pekerjaan Ayah</label>
                                <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah"
                                    value="{{ $wali->pekerjaan_ayah }}">
                                @if($errors->has('pekerjaan_ayah'))
                                <small class="text-danger">{{ $errors->first('pekerjaan_ayah') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Hubungan Terhadap Anak</label>
                                <input type="text" class="form-control" name="hubungan_terhadap_anak" id="hubungan_terhadap_anak"
                                    value="{{ $wali->hubungan_terhadap_anak }}">
                                @if($errors->has('hubungan_terhadap_anak'))
                                <small class="text-danger">{{ $errors->first('hubungan_terhadap_anak') }}</small>
                                @endif
                            </div>

                            <a href="{{ route('wali.index') }}" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>




    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection