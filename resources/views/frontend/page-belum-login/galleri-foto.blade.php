@extends('frontend.page-belum-login.layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/zoom.css') }}">
<script src="{{ asset('frontend/js/zoom.js') }}"></script>
<style>
    img[data-action="zoom"] {
        cursor: pointer;
        cursor: -webkit-zoom-in;
        cursor: -moz-zoom-in;
    }

    .zoom-img,
    .zoom-img-wrap {
        position: relative;
        z-index: 666;
        -webkit-transition: all 300ms;
        -o-transition: all 300ms;
        transition: all 300ms;
    }

    img.zoom-img {
        cursor: pointer;
        cursor: -webkit-zoom-out;
        cursor: -moz-zoom-out;
    }

    .zoom-overlay {
        z-index: 420;
        background: #fff;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
        filter: "alpha(opacity=0)";
        opacity: 0;
        -webkit-transition: opacity 300ms;
        -o-transition: opacity 300ms;
        transition: opacity 300ms;
    }

    .zoom-overlay-open .zoom-overlay {
        filter: "alpha(opacity=100)";
        opacity: 1;
    }

    .zoom-overlay-open,
    .zoom-overlay-transitioning {
        cursor: default;
    }
</style>
<div style="font-size: 26px;"><b>GALERI PENDIDIK</b></div>
<div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
<br>
<!-- isi content -->
<div class="row">
    @foreach ($foto as $item)
    <div class="col-md-4">
        <div class="card">
            <div class="card-title text-center mt-5"><b>
                    {{$item->nama}}</b>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <img data-action="zoom" src="{{ asset('image/' . $item->image)  }}" class="" alt="" width="300"
                        height="200">

            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection