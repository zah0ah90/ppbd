@extends('layouts.email')
@section('content')
    <tr>
        <td height="35"></td>
    </tr>

    <tr>
        <td align="center" style="font-family: 'Raleway', sans-serif; font-size:22px; font-weight: bold; color:#2a3a4b;">
            RESET PASSWORD LOGIN <br> <b>SDN NEGERI NURUL SALAM</b></td>
    </tr>

    <tr>
        <td height="10"></td>
    </tr>


    <tr>
        <td align="center"
            style="font-family: 'Lato', sans-serif; font-size:14px; color:#2a3a4b; line-height:24px; font-weight: 300;">
            untuk mereset password mohon untuk mengklik <a
                href="{{ route('reset.password.get', $data['token']) }}">Disini!</a><br>

        </td>
    </tr>
@endsection
