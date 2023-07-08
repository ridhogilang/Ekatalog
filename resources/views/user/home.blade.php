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

        /* CSS untuk kontainer kotak di atas */
        .top-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .title {
            margin-bottom: 20px;
            font-size: 30px;
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
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

        /* CSS untuk kotak terakhir */
        .last-box {
            margin-top: 20px;
        }
    </style>
@endpush

@section('container')
    <div class="title">Dashboard</div>
    <br>
    <br>
    <div class="top-container">
        <a href="user" class="box">
            <img src="image/user.png" alt="Gambar" class="box-image">
            <div class="box-caption">User</div>
        </a>
        <a href="mobil/Toyota" class="box">
            <img src="image/sparepart.png" alt="Gambar" class="box-image">
            <div class="box-caption">Sparepart</div>
        </a>
        <a href="/setting" class="box">
            <img src="image/manage.png" alt="Gambar" class="box-image">
            <div class="box-caption">Manage</div>
        </a>
    </div>
    <a href="/control" class="box last-box">
        <img src="image/setting.png" alt="Gambar" class="box-image">
        <div class="box-caption">Setting</div>
    </a>

    <div class="button-container">
        <a class="button" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Log Out
        </a>
        
        <form id="logout-form" class="button" action="/logout" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endsection
