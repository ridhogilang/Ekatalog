@extends('layout.mainsetting')

@push('header')
    <style>
        /* CSS untuk tata letak halaman */
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: row;
            /* Mengubah flex-direction menjadi row */
            justify-content: center;
            align-items: center;
        }

        .sidebar {
            width: 200px;
            padding: 20px;
            height: 68%;
            background-color: blue;
            color: white;
            font-family: 'Poppins', sans-serif;
            border-right: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            justify-content: flex-start;
            position: relative;
            overflow: hidden;
            z-index: unset;
        }

        .active,
        .sidebar li a:hover {
            font-weight: bold;
            color: red;
        }

        .sidebar h3 {
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
            position: relative;
        }

        .sidebar li a {
            text-decoration: none;
            color: #333;
            display: block;
            width: 180px;
            padding: 5px 20px;
        }

        .sidebar ul li a {
            color: white;
        }

        .sidebar li a:hover,
        .sidebar .active {
            background-color: navy;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            /* Mengatur posisi absolut */
            background-color: blue;
            width: 180px;
            z-index: 3;
            top: 100%;
            /* Menggeser dropdown ke bawah elemen li */
            left: 0;
            /* Mengatur posisi dropdown sejajar dengan elemen induk */
        }

        .sidebar li:hover .dropdown-content {
            display: block;
        }

        .sidebar li {
            margin-top: 10px;
            /* Memberikan jarak antara elemen <li> */
        }

        .dropdown-content a {
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: navy;
        }

        .top-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .title {
            margin-bottom: 30px;
            font-size: 30px;
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            margin-top: 50px;
            /* Tambahkan margin-top untuk membuatnya sejajar dengan judul form */
        }

        /* CSS untuk kotak */
        .box {
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
            margin: auto;
            /* object-fit: contain; */
        }

        .box:hover .box-image {
            /* Ubah gambar saat kursor berada di atasnya */
            /* Ganti URL gambar dengan URL yang diinginkan */
            content: url(image/mobil/inova.png);
        }

        /* CSS untuk caption di bawah kotak */
        .box-caption {
            margin-top: 10px;
            font-size: 25px;
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

        .buttonmenu {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
        }

        /* CSS untuk deskripsi */
        .deskripsi-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            /* margin-top: 20px; */
            font-family: 'Poppins', sans-serif;
        }

        .deskripsi-box {
            width: 100%;
            max-width: 400px;
            background-color: #F0F0F0;
            padding: 20px;
            text-align: center;
            margin-top: 2px;
            font-family: 'Poppins', sans-serif;
        }

        .deskripsi-box h2 {
            margin-bottom: 10px;
        }

        .deskripsi-box p {
            margin-bottom: 0;
        }
    </style>
@endpush

@section('container')
    <div class="deskripsi-container">
        <div style="width: 100%; display: flex; justify-content: center;">
            <div>
                <div style="display: flex; justify-content: center;">
                    <img src="image/manage.png" alt="Gambar 1" class="box-image" style="width: 30%; max-height: 100%;">
                </div><br>
                <div class="box-caption">Halaman Setting Admin</div>
                <div class="top-container">
                    <div class="deskripsi-box">
                        {{-- <h2>Evaporator Alphard Lama Denso</h2> --}}
                        <h4>Hello, {{ auth()->user()->username }}. <br> Ini adalah halaman setting admin, anda bisa melihat, mengedit dan menambahkan data pada E-Katalog</h4>
                        <br><br><p>E-Katalog</p>
                    </div>
                </div>
                <div class="button-container">
                    <a href="/home" class="button">kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
