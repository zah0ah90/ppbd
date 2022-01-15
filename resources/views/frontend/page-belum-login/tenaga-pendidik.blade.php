@extends('frontend.page-belum-login.layouts.app')
@section('content')

    <div style="font-size: 26px;"><b>TENAGA PENDIDIK</b></div>
    <div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
    <br>
    <div class="row">

        <div class="row">
            @foreach ($guru as $data)
                <div class="col-lg-3">
                    <div class="card card-" style="width: 17rem;">
                        <img src=" {{ asset('backend/image') . '/' . $data->image }}" class="card-img-top">
                        <div class="card-body">
                            <table class="table-borderless">
                                <tr>
                                    <th colspan="2">
                                        {{ $data->nama }}
                                    </th>

                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ $data->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <th>Wali Kelas</th>
                                    <td>{{ $data->wali_kelas }}</td>
                                </tr>
                                <tr>
                                    <th>Mengajar Sejak</th>
                                    <td>{{ $data->mengajar_sejak }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
