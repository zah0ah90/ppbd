@extends('layouts.email')
@section('content')
<tr>
    <td height="35"></td>
</tr>

<tr>
    <td align="center" style="font-family: 'Raleway', sans-serif; font-size:22px; font-weight: bold; color:#2a3a4b;">
        Selamat anda terpilih untuk menjadi siswa <br> <b>SDN NEGERI NURUL SALAM</b></td>
</tr>

<tr>
    <td height="10"></td>
</tr>


<tr>
    <td align="center" style="font-family: 'Lato', sans-serif; font-size:14px; color:#2a3a4b; line-height:24px; font-weight: 300;">
        Selamat kepada peserta siswa/siswi {{ $data['nama_lengkap'] }} telah menjadi siswa/siswi, Terimakasih telah
        mendaftar di PPDB ONLINE
        SDN NURUL ALAM<br>
        untuk mendownload cetak pendaftaran bisa <b><a href="{{ route('print-peserta-satu', $data['id']) }}">Klik Disini</a></b>

    </td>
</tr>
@endsection