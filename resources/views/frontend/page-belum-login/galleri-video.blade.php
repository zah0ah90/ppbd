@extends('frontend.page-belum-login.layouts.app')
@section('content')
<div style="font-size: 26px;"><b>GALERI VIDEO</b></div>
<div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
<br>
<!-- isi content -->
<div class="row">
    @foreach ($video as $item)
    <div class="col-md-4">
        <div class="card">
            <div class="card-title p-3 text-center"><b>{{$item->nama}}</b></div>
            <div class="card-body">
                <iframe width="300" height="315" src={{$item->embed_link}} frameborder="0" allowfullscreen>
                </iframe>


            </div>
        </div>
    </div>
    @endforeach




</div>
@endsection