@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Galleri Video</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Galleri Video</li>
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
                    <div class="card-header">
                        <a href="{{ route('galleri_video.create') }}" class="text-white btn btn-sm btn-primary tambah">
                            <i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Embed Link</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($galleri_video->count())
                                @php($index = 1)
                                @foreach($galleri_video as $data)
                                <tr>
                                    <td align="center">{{ $index++ }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->embed_link }}</td>
                                    <td>{{ $data->status == 1 ? 'Tampilkan' : 'Tidak Tampilkan' }}</td>
                                    <td>
                                        <form action="{{ route('galleri_video.destroy',$data->id) }}" method="POST">
                                            <a class="btn btn-primary"
                                                href="{{ route('galleri_video.edit',$data->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah akan anda yakin akan menghapus nya? Judul: {{$data->nama}}')">Delete</button>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td align="center" colspan="4">Data tidak tersedia</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
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