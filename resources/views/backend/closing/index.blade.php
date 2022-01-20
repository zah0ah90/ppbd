@extends('backend.layouts.app')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Status Closing</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Status Closing</li>
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
                            <div class="row">
                                <div class="col-6">
                                    <form action="{{ route('closing-post') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Status OPEN CLOSE</label>
                                            <select name="status" class="form-control">
                                                <option value="open" {{ $closing->status == 'open' ? 'selected' : '' }}>
                                                    open
                                                </option>
                                                <option value="close" {{ $closing->status == 'close' ? 'selected' : '' }}>
                                                    close
                                                </option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Data</button>
                                    </form>
                                </div>
                                <div class="col-6"></div>
                            </div>

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
