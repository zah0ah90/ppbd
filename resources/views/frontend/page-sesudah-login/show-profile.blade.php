@extends('frontend.page-sesudah-login.layouts.app')
@section('content')

    <div class="row">
        <div class="col-12">
            <div style="font-size: 26px;"><b>PROFILKU</b></div>
            <div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
            <br>

            <br>
            @foreach ($peserta as $data)
                <div class="w-75 mx-auto">
                    <div class="row">
                        <div class="col-5">Nama Siswa</div>
                        <div class="col-2">:</div>
                        <div class="col-5">{{ $data->nama_lengkap_siswa }}</div>
                    </div><br>
                    <div class="row">
                        <div class="col-5"> Tanggal Lahir</div>
                        <div class="col-2">:</div>
                        <div class="col-5">{{ $data->tanggal_lahir }}</div>
                    </div><br>
                    <div class="row">
                        <div class="col-5">Jenis Kelamin</div>
                        <div class="col-2">:</div>
                        <div class="col-5">{{ $data->jenis_kelamin }}</div>
                    </div><br>
                    <div class="row">
                        <div class="col-5">Nama Wali/ Orang Tua</div>
                        <div class="col-2">:</div>
                        <div class="col-5">{{ $data->nama_ayah_kandung }} | {{ $data->nama_ibu_kandung }}</div>
                    </div><br>
                    <div class="row">
                        <div class="col-5">Alamat</div>
                        <div class="col-2">:</div>
                        <div class="col-5">{{ $data->alamat }}</div>
                    </div><br>
                    <div class="row">
                        <div class="col-5">No. HP /Whatsapp</div>
                        <div class="col-2">:</div>
                        <div class="col-5">{{ $data->nomor_handphone_ayah }} | {{ $data->nomor_handphone_ibu }}
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-5">Email</div>
                        <div class="col-2">:</div>
                        <div class="col-5">{{ $data->email }}</div>
                    </div><br>
                </div>
            @endforeach

        </div>
    </div>

@endsection
