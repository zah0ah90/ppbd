@extends('frontend.page-belum-login.layouts.app')
@section('content')
<div style="font-size: 26px;"><b>PENGUMUMAN</b></div>
<div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
<br>
<div class="row">

    <div class="col-sm-6 offset-md-3">
        <img src="{{ asset('frontend/gambar/pengumuman-home.png')}}" alt=""
            style="width: 465px;border-radius: .50rem !important">
    </div>
</div>


<div class="row mt-5">
    @foreach ($pengumuman as $item)
    <div class="col-md-4 text-center">
        <div class="card rounded" style="background-color: #CCC7DD;border-radius: 1rem !important">
            <div class="card-title mt-3">
                <b>
                    {{$item->nama}}
                </b>
            </div>
            <h6 class="card-subtitle mb-2 text-muted">{{$item->tanggal_posting}}</h6>
            <div class="card-body text-wrap">
                {{$item->keterangan}}
            </div>
        </div>

    </div>

    @endforeach
</div>
@endsection