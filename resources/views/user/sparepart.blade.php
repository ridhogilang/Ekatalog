@extends('layout.main')

@push('header')
    <style>
        /* CSS untuk tata letak halaman */
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* CSS untuk navbar */
        .navbar {
            background-color: red;
            padding: 10px;
        }

        .navbar-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }

        .navbar-item {
            margin: 0 20px;
        }

        .navbar-item a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        /* CSS untuk kontainer kotak di atas */
        .top-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* CSS untuk kotak */
        .box {
            width: 150px;
            height: 150px;
            background-color: transparent;
            border: none;
            margin: 0 20px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }

        /* CSS untuk gambar di dalam kotak */
        .box-image {
            width: 100%;
            max-height: 80%;
            object-fit: contain;
        }

        /* CSS untuk caption di bawah kotak */
        .box-caption {
            margin-top: 10px;
            font-size: 14px;
            font-weight: bold;
            color: black;
            text-align: center;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            /* Menyembunyikan garis bawah */
        }

        /* CSS untuk kotak terakhir */
        .last-box {
            margin-top: 20px;
        }

        /* CSS untuk tombol */
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
        }

        .title {
            margin-bottom: 10px;
            font-size: 30px;
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
        }

        .title1 {
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
        }
    </style>
@endpush

@section('container')
    <br>
    <div class="title">Pilih Sparepart</div>
    <div class="title1">- {{ $mobil->mobil }}, {{ $mobil->merkMobil->merk }} -</div>
    <br>
    <div class="top-container">
        <a href="/mobil/{{ $mobil->merkMobil->merk }}/{{ $mobil->id }}/sparepart/merkpart/1" class="box">
            <img src="{{ asset('image/evaporator.png') }}" alt="Gambar" class="box-image">
            <div class="box-caption">Evaporator</div>
        </a>
        <a href="/mobil/{{ $mobil->merkMobil->merk }}/{{ $mobil->id }}/sparepart/merkpart/2" class="box">
            <img src="{{ asset('') }}image/kondensor.png" alt="Gambar" class="box-image">
            <div class="box-caption">Kondensor </div>
        </a>
        <a href="/mobil/{{ $mobil->merkMobil->merk }}/{{ $mobil->id }}/sparepart/merkpart/3" class="box">
            <img src="{{ asset('') }}image/komp.png" alt="Gambar" class="box-image">
            <div class="box-caption">Compresor</div>
        </a>
    </div>
    <br>
    <div class="top-container">
        <a href="/mobil/{{ $mobil->merkMobil->merk }}/{{ $mobil->id }}/sparepart/merkpart/4" class="box">
            <img src="{{ asset('') }}image/mcp.png" alt="Gambar" class="box-image">
            <div class="box-caption">MCP</div>
        </a>
        <a href="/mobil/{{ $mobil->merkMobil->merk }}/{{ $mobil->id }}/sparepart/merkpart/5" class="box">
            <img src="{{ asset('') }}image/more.png" alt="Gambar" class="box-image">
            <div class="box-caption">Lain-lain </div>
        </a>
    </div>
    <br>
    <br>
    <div class="button-container">
        <a href="{{ url('/mobil', [request()->segment(2)]) }}" class="button">
            <<< Menu Sebelumnya</a>
    </div>
@endsection
