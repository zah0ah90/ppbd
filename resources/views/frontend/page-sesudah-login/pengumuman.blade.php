@extends('frontend.page-sesudah-login.layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div style="font-size: 26px;"><b>STATUS PENDAFTARAN</b></div>
            <div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
            <br>

            <br>

            <table class="table">
                <tr class="table-dark text-dark ">
                    <th>No Pendaftaran</th>
                    <th>Nama Siswa</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Daftar</th>
                    <th>Nama Orang Tua/Wali</th>
                    <th>Status</th>

                </tr>
                <tr class="table-secondary text-dark">
                    @if ($peserta)
                        @php($index = 1)
                        @foreach ($peserta as $data)
                <tr>

                    <td>{{ $data->no_pendaftaran }}</td>
                    <td>{{ $data->nama_lengkap_siswa }}</td>
                    <td>{{ $data->tanggal_lahir }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->tanggal_daftar }}</td>
                    <td>{{ $data->nama_ayah_kandung }} | {{ $data->nama_ibu_kandung }}</td>
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

                </tr>
                @endforeach
            @else
                <tr>
                    <td align="center" colspan="5">Data tidak tersedia</td>
                </tr>
                @endif
                </tr>
            </table>

        </div>
    </div>

@endsection
