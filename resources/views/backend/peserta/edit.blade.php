@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Peserta</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('peserta.index') }}">Peserta</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Peserta</li>
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
                    <div class="card-body table-responsive ">

                        <form method="POST" action="{{ route('peserta-update', $peserta->id ) }}">
                            @csrf
                            @method('PUT')


                            <div class="form-group">
                                <label>No Pendaftaran</label>
                                <input type="text" class="form-control" disabled name="no_pendaftaran"
                                    id="no_pendaftaran" value="{{ $peserta->no_pendaftaran }}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Daftar</label>
                                        <input type="date" class="form-control" disabled name="tanggal_daftar"
                                            id="tanggal_daftar" value="{{ $peserta->tanggal_daftar }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap Siswa</label>
                                        <input type="text" disabled class="form-control" name="nama_lengkap_siswa"
                                            id="nama_lengkap_siswa" value="{{ $peserta->nama_lengkap_siswa }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <input type="text" disabled class="form-control" name="agama" id="agama"
                                            value="{{ $peserta->agama }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Anak Ke </label>
                                        <input type="text" disabled class="form-control" name="anak_ke" id="anak_ke"
                                            value="{{ $peserta->anak_ke }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Banyak Sodara Tiri </label>
                                        <input type="text" disabled class="form-control" name="banyak_sdr_tiri"
                                            id="banyak_sdr_tiri" value="{{ $peserta->banyak_sdr_tiri }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Berat Badan </label>
                                        <input type="text" disabled class="form-control" name="berat_badan"
                                            id="berat_badan" value="{{ $peserta->berat_badan }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Golongan Darah </label>
                                        <input type="text" disabled class="form-control" name="golongan_darah"
                                            id="golongan_darah" value="{{ $peserta->golongan_darah }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat </label>
                                        <input type="text" disabled class="form-control" name="alamat" id="alamat"
                                            value="{{ $peserta->alamat }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Kartu Keluarga </label>
                                        @if($peserta->foto_kartu_keluarga)
                                        <img src="{{ asset('frontend/peserta/' . $peserta->foto_kartu_keluarga)  }}"
                                            alt="" width="200">
                                        @else
                                        <br>
                                        <label class="text-danger">Tidak Ada Foto/ Belum Upload Kartu Keluarga </label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Surat Pernyataan </label>
                                        @if($peserta->foto_surat_pernyataan)
                                        <img src="{{ asset('frontend/peserta/' . $peserta->foto_surat_pernyataan)  }}"
                                            alt="" width="200">
                                        @else
                                        <br>
                                        <label class="text-danger">Tidak Ada Foto/ Belum Upload Surat Pernyataan
                                        </label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Siswa/ Siswi </label>
                                        @if($peserta->foto_siswa)
                                        <img src="{{ asset('frontend/peserta/' . $peserta->foto_siswa)  }}" alt=""
                                            width="200">
                                        @else
                                        <br>
                                        <label class="text-danger">Tidak Ada Foto/ Belum Upload Siswa Siswa </label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" disabled name="tanggal_lahir"
                                            id="tanggal_lahir" value="{{ $peserta->tanggal_lahir }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Panggilan Siswa</label>
                                        <input type="text" disabled class="form-control" name="nama_panggilan"
                                            id="nama_panggilan" value="{{ $peserta->nama_panggilan }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Kewarganegaraan</label>
                                        <input type="text" disabled class="form-control" name="kewarganegaraan"
                                            id="kewarganegaraan" value="{{ $peserta->kewarganegaraan }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Banyak Sodara Kandung </label>
                                        <input type="text" disabled class="form-control" name="banyak_sdr_kandung"
                                            id="banyak_sdr_kandung" value="{{ $peserta->banyak_sdr_kandung }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Banyak Sodara Angkat </label>
                                        <input type="text" disabled class="form-control" name="banyak_sdr_angkat"
                                            id="banyak_sdr_angkat" value="{{ $peserta->banyak_sdr_angkat }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Tinggi Badan </label>
                                        <input type="text" disabled class="form-control" name="tinggi_badan"
                                            id="tinggi_badan" value="{{ $peserta->tinggi_badan }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Riwayat Penyakit </label>
                                        <input type="text" disabled class="form-control" name="riwayat_penyakit"
                                            id="riwayat_penyakit" value="{{ $peserta->riwayat_penyakit }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Bahasa </label>
                                        <input type="text" disabled class="form-control" name="bahasa" id="bahasa"
                                            value="{{ $peserta->bahasa }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Akta </label>
                                        @if($peserta->foto_akta_lahir)
                                        <img src="{{ asset('frontend/peserta/' . $peserta->foto_akta_lahir)  }}" alt=""
                                            width="200">
                                        @else
                                        <br>
                                        <label class="text-danger">Tidak Ada Foto/ Belum Upload Akta </label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="">Pilih Status</option>
                                            <option value="1" {{ $peserta->status == '1' ? 'selected' : ''}}>Di Terima
                                            </option>
                                            <option value="0" {{ $peserta->status == '0' ? 'selected' : ''}}>Di Tolak
                                            </option>
                                            <option value="2" {{ $peserta->status == '2' ? 'selected' : ''}}>Di Proses
                                            </option>

                                        </select>
                                        @if($errors->has('status'))
                                        <small class="text-danger">{{ $errors->first('status') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('peserta.index') }}" class="btn btn-danger">Kembali</a>
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