@extends('frontend.page-sesudah-login.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div style="font-size: 26px;"><b>ALUR PENDAFTARAN</b></div>
        <div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
        <br>

        <br>

        <table class="table">
            <tr class="table-dark text-dark">
                <th>Nama Siswa</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Daftar</th>
                <th>Nama Orang Tua/Wali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <tr class="table-secondary text-dark">
                <td>Andri Agustina</td>
                <td>00-00-0000</td>
                <td>Laki - Laki</td>
                <td>00-00-0000</td>
                <td>Asdfffwkwkwk</td>
                <td class="text-success">Diterima</td>
                <td><button class="btn btn-primary text-dark button-tambahan-shadow">Lihat
                        Detail</button>
                </td>

            </tr>
        </table>

    </div>
</div>

@endsection