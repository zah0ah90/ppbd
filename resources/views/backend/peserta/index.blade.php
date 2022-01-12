@extends('backend.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Peserta</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Peserta</li>
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
                            <a target="_blank" href="{{ route('print-peserta-semua') }}" class="btn btn-success">Cetak
                                Semua
                                <i class="fas fa-print"></i></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Pendaftaran</th>
                                        <th>Nama Siswa</th>
                                        <th>Nama Panggilan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Nama Ayah</th>
                                        <th>Nama Ibu</th>
                                        <th>Agama</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($peserta)
                                        @php($index = 1)
                                        @foreach ($peserta as $data)
                                            <tr>
                                                <td align="center">{{ $index++ }}</td>
                                                <td>{{ $data->no_pendaftaran }}</td>
                                                <td>{{ $data->nama_lengkap_siswa }}</td>
                                                <td>{{ $data->nama_panggilan }}</td>
                                                <td>{{ $data->jenis_kelamin }}</td>
                                                <td>{{ $data->nama_ayah_kandung }}</td>
                                                <td>{{ $data->nama_ibu_kandung }}</td>
                                                <td>{{ $data->agama }}</td>
                                                {{-- $res = ( $rule1 ? true : ( $rule2 ? true : false ) ) --}}
                                                <td>
                                                    <b>
                                                        @if ($data->status == 1)
                                                            Di Terima
                                                        @endif

                                                        @if ($data->status == 0)
                                                            Di Tolak
                                                        @endif

                                                        @if ($data->status == 3)
                                                            Menunggu Konfirmasi
                                                        @endif

                                                        @if ($data->status == 2)
                                                            Di Proses
                                                        @endif
                                                    </b>
                                                </td>

                                                {{-- <td>{{ $data->status == 1 ? 'Di Terima' : ( 0 ? 'Di Tolak' : 'Di Proses') }}
                                    </td> --}}
                                                <td>

                                                    <a class="btn btn-primary"
                                                        href="{{ route('peserta.edit', $data->id) }}">Edit <i
                                                            class="far fa-edit"></i></a>
                                                    <a class="btn btn-success" target="_blank"
                                                        href="{{ route('print-peserta-satu', $data->id) }}">Cetak
                                                        <i class="fas fa-print"></i></a>
                                                    {{-- <a href="#" data-id="{{ $data->id }}" class="btn btn-danger swal-confirm">
                                            <form action="{{ route('peserta-delete',$data->id) }}"
                                                id="delete{{ $data->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                            </form>
                                            Delete
                                        </a> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td align="center" colspan="5">Data tidak tersedia</td>
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


@push('page-script')
    <script>
        $(".swal-confirm").click(function(e) {
            id = e.target.dataset.id;
            swal({
                    title: 'Apakah anda yakin?',
                    text: 'Apakah anda yakin untuk menghapus nya?',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal('Berhasil menghapus', {
                            icon: 'success',
                        });
                        $(`#delete${id}`).submit();
                    } else {
                        swal('Batal Hapus');
                    }
                });
        });
    </script>
@endpush
