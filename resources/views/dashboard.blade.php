@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="callout callout-info">
    <h4>SELAMAT DATANG</h4>
    Selamat Datang di Aplikasi Pembelajaran Hardware Komputer Berbasis Android
    </div>
    <style type="text/css">
        #img-wel {
            text-align: center;
        }

        .img-wel {
            width: 900px;
            border-radius:30px;
            height: 500px;
        }
    </style>
    <div id="img-wel"><img src="{{ asset('wel.jpg') }}" alt="" title="" name="slide" class="img-wel"></div>
@endsection