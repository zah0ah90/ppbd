@extends('layouts.print')

@section('content')
<hr style="border-top: 5px solid;">
<p>Tanggal Cetak : {{ date('d-m-Y')}}</p>
<p class="text-center" style="font-size: 18px">LAPORAN PPDB {{ date('Y', strtotime('-1 year')) . '/' .
    date('Y') }}
</p>
<div class="row table-responsive">
    <table class="table table-bordered  " style="zoom: 75%">
        <thead>

            <tr>
                <th>No</th>
                <th>NOP</th>
                <th>Nama Siswa</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>No HP</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @if($peserta)
            @php($index = 1)
            @foreach($peserta as $data)
            <tr>
                <td align="center">{{ $index++ }}</td>
                <td>{{ $data->no_pendaftaran }}</td>
                <td>{{ $data->nama_lengkap_siswa }}</td>
                <td>{{ $data->nama_ayah_kandung }}</td>
                <td>{{ $data->nama_ibu_kandung }}</td>
                <td>{{ $data->nomor_handphone_ayah}}
                    <br>
                    {{ $data->nomor_handphone_ibu}}
                </td>
                <td>{{ $data->alamat }}</td>
            </tr>
            @endforeach
            @else
            <tr>
                <td align="center" colspan="6">Data tidak tersedia</td>
            </tr>
            @endif
        </tbody>

    </table>
</div>
@endsection