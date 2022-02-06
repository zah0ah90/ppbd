@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Galleri foto</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Galleri foto</li>
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
                        <a href="{{ route('galleri_foto.create') }}" class="text-white btn btn-sm btn-primary tambah">
                            <i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($gallerifoto)
                                @php($index = 1)
                                @foreach ($gallerifoto as $data)
                                <tr>
                                    <td align="center">{{ $index++ }}</td>
                                    <td>{{ $data->nama }}</td>

                                    <td><img src="{{ asset('image/' . $data->image)  }}" alt="" width="200">

                                    </td>
                                    <td>
                                        <a href="#" data-id="{{ $data->id }}" class="btn btn-danger swal-confirm">
                                            <form action="{{ route('galleri_foto.destroy',$data->id) }}"
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
                                    <td align="center" colspan="9">Data tidak tersedia</td>
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