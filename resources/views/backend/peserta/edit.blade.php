@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Pengumuman</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('pengumuman.index') }}">Pengumuman</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Pengumuman</li>
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
                        <form action="{{ route('pengumuman.update',$pengumuman->id) }}" method="POST">
                            @csrf
                            @method('PUT')


                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    value="{{ $pengumuman->nama }}">
                                @if($errors->has('nama'))
                                <small class="text-danger">{{ $errors->first('nama') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Tanggal Posting</label>
                                <input type="date" class="form-control" name="tanggal_posting" id="tanggal_posting"
                                    value="{{ $pengumuman->tanggal_posting }}">
                                @if($errors->has('tanggal_posting'))
                                <small class="text-danger">{{ $errors->first('tanggal_posting') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea type="text" class="form-control" rows="3" name="keterangan" id="keterangan">{{ $pengumuman->keterangan }}
                                </textarea>
                                @if($errors->has('keterangan'))
                                <small class="text-danger">{{ $errors->first('keterangan') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" {{ $data->status == 1 ? 'selected' : ''}}>Tampilkan</option>
                                    <option value="0" {{ $data->status == 0 ? 'selected' : ''}}>Tidak Di Tampilkan
                                    </option>
                                </select>
                            </div>
                            <a href="{{ route('pengumuman.index') }}" class="btn btn-danger">Kembali</a>
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