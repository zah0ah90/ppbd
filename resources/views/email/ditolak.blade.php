@extends('layouts.email')
@section('content')
<tr>
    <td height="35"></td>
</tr>

<tr>
    <td align="center" style="font-family: 'Raleway', sans-serif; font-size:22px; font-weight: bold; color:#2a3a4b;">
        Mohon maaf proses tidak dapat di lanjut oleh <br> <b>SDN NEGERI NURUL SALAM</b></td>
</tr>

<tr>
    <td height="10"></td>
</tr>


<tr>
    <td align="center" style="font-family: 'Lato', sans-serif; font-size:14px; color:#2a3a4b; line-height:24px; font-weight: 300;">
        Mohon maaf siswa/siswi {{ $data['nama_lengkap'] }} ,
        Data yang anda kirim belum memenuhi syarat pendaftaran!'
        Untuk info lebih lanjut silahkan tanyakan <b><a href="https://wa.me/6281234567890">disinih / Klik disini</a></b>
        <br> terimakasih sudah
        mendaftar ppdb online SDN NURUL SALAM
    </td>
</tr>
@endsection