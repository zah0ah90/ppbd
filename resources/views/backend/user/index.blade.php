@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">User</li>
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

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Nama</th>
                                    <th>Nomor Handphone</th>
                                    <th>Level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($user)
                                @php($index = 1)
                                @foreach($user as $data)
                                <tr>
                                    <td align="center">{{ $index++ }}</td>
                                    <td>{{ $data->username }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->nomor_handphone }}</td>
                                    <td>{{ $data->level }}</td>
                                    <td>

                                        <a href="{{ route('edit-akun-view',$data->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="#" data-id="{{ $data->id }}" class="btn btn-danger swal-confirm">
                                            <form action="{{ route('delete-akun-user',$data->id) }}"
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