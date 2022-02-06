@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pengumuman</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Pengumuman</li>
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
                        <a href="{{ route('pengumuman.create') }}" class="text-white btn btn-sm btn-primary tambah">
                            <i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Tanggal Posting</th>
                                    <th>status</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($pengumuman->count())
                                @php($index = 1)
                                @foreach($pengumuman as $data)
                                <tr>
                                    <td align="center">{{ $index++ }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->tanggal_posting }}</td>
                                    <td>{{ $data->status == 1 ? 'Tampilkan' : 'Tidak Tampilkan' }}</td>
                                    <td>{{ $data->keterangan }}</td>
                                    <td>

                                        <a class="btn btn-primary"
                                            href="{{ route('pengumuman.edit',$data->id) }}">Edit</a>
                                        <a href="#" data-id="{{ $data->id }}" class="btn btn-danger swal-confirm">
                                            <form action="{{ route('pengumuman.destroy',$data->id) }}"
                                                id="delete{{ $data->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                            </form>
                                            Delete
                                        </a>
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