@extends('layouts.print')

@section('content')
    <hr style="border-top: 5px solid;">
    <p>Tanggal Cetak : {{ date('d-m-Y') }}</p>
    <p class="text-center" style="font-size: 18px">LAPORAN DATA CALON SISWA
        <hr style="border-top: 2px solid">
    </p>
    <div class="row ">
        <div class="col-8">
            <table class="table table-borderless" style="zoom: 90%">
                <tr>
                    <th>NOP</th>
                    <td>: {{ $peserta->no_pendaftaran }}</td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>: {{ $peserta->nama_lengkap_siswa }}</td>
                </tr>
                <tr>
                    <th>Tgl Lahir</th>
                    <td>: {{ $peserta->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <th>Nama Ayah</th>
                    <td>: {{ $peserta->nama_ayah_kandung }}</td>
                </tr>
                <tr>
                    <th>Nama Ibu</th>
                    <td>: {{ $peserta->nama_ibu_kandung }}</td>
                </tr>
                <tr>
                    <th>Anak Ke</th>
                    <td>: {{ $peserta->anak_ke }}</td>
                </tr>
                <tr>
                    <th>Kewarganegaraan</th>
                    <td>: {{ $peserta->kewarganegaraan }}</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>: {{ $peserta->agama }}</td>
                </tr>
                <tr>
                    <th>Bahasa</th>
                    <td>: {{ $peserta->bahasa }}</td>
                </tr>
                <tr>
                    <th>Golongan Darah</th>
                    <td>: {{ $peserta->golongan_darah }}</td>
                </tr>
                <tr>
                    <th>Riwayat Penyakit</th>
                    <td>: {{ $peserta->riwayat_penyakit }}</td>
                </tr>
                <tr>
                    <th>Berat Badan</th>
                    <td>: {{ $peserta->berat_badan }}</td>
                </tr>
                <tr>
                    <th>Tinggi Badan</th>
                    <td>: {{ $peserta->tinggi_badan }}</td>
                </tr>
                <tr>
                    <th>Nomor HP</th>
                    <td>: {{ $peserta->nomor_handphone_ayah }} <br> {{ $peserta->nomor_handphone_ibu }}</td>
                </tr>
            </table>
        </div>
        <div class="col-4">
            @if ($peserta->foto_siswa)
                <img src="{{ asset('backend/image/' . $peserta->foto_siswa) }}" style="width: 200px" alt=''>

            @else
                <h4 class="text-center">Belum Upload FOTO SISWA</h4>
            @endif

        </div>

    </div>
@endsection
