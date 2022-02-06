@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Galleri foto</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('galleri_foto.index') }}">Galleri foto</a>
                    <li class="breadcrumb-item active">Tambah Galleri foto</li>
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
                    @if (session()->has('message'))
                    <p>{{ session()->get('message') }}</p>
                    @endif
                    <!-- /.card-header -->
                    <div class="card-body table-responsive ">
                        <form action="{{ route('galleri_foto.store') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Nama </label>
                                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}">
                                @if ($errors->has('nama'))
                                <small class="text-danger">{{ $errors->first('nama') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <div class="input-group hdtuto control-group lst increment">
                                    <input type="file" name="image" class="myfrm form-control">
                                    <div class="input-group-btn">
                                        @if ($errors->has('image'))
                                        <small class="text-danger">{{ $errors->first('image') }}</small>
                                        @endif
                                        {{-- <button class="btn btn-success" type="button"><i
                                                class="fldemo glyphicon glyphicon-plus"></i>Add</button> --}}
                                    </div>
                                </div>
                                {{-- <div class="clone hide">
                                    <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                        <input type="file" name="image[]" class="myfrm form-control">
                                        <div class="input-group-btn">
                                            <button class="btn btn-danger" type="button"><i
                                                    class="fldemo glyphicon glyphicon-remove test"></i> Remove</button>
                                        </div>
                                    </div>

                                </div> --}}

                                @if ($errors->has('image'))
                                <small class="text-danger">{{ $errors->first('image') }}</small>
                                @endif
                            </div>





                            <a href="{{ route('galleri_foto.index') }}" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
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

<script type="text/javascript">
    $(document).ready(function() {
            $(".btn-success").click(function() {
                var lsthmtl = $(".clone").html();
                $(".increment").after(lsthmtl);
            });

            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".hdtuto").remove();
            });

        });
</script>
@endsection