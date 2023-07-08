@extends('layout.main')

@push('header')
<style>
    /* CSS untuk tata letak halaman */
    html, body {
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

    .navbar-item a.active {
      color: white;
      border-bottom: 2px solid white;
      padding-bottom: 1px;
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
      width: 30%;
      max-height: 80%;
      margin-left: 250px;
      object-fit: contain;
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
      font-family: 'Poppins', sans-serif; /* Menyembunyikan garis bawah */
    }

    .box-caption2 {
      margin-top: 10px;
      font-size: 14px;
      font-weight: bold;
      color: black;
      text-align: center;
      text-decoration: none;
      font-family: 'Poppins', sans-serif; /* Menyembunyikan garis bawah */
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
      margin-right: 20px;
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
      margin-top: 20px;
      font-family: 'Poppins', sans-serif;
    }

    .deskripsi-box {
      width: 100%;
      max-width: 400px;
      background-color: #F0F0F0;
      padding: 20px;
      text-align: center;
      margin-top: 10px;
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
<div class="top-container">
  <div style="width: 100%; display: flex; justify-content: center;">
    <div>
      <div class="box-caption">Detail Sparepart</div>
      <img src="{{ $sparepart->image }}" alt="Gambar 1" class="box-image" style="">
      <div class="box-caption2">{{ $sparepart->mobil->mobil }}, {{ $sparepart->merek }}</div>
      <div class="deskripsi-container">
        <div class="deskripsi-box">
          <h2>{{ $sparepart->nama }}</h2>
          <p>{{ $sparepart->detail }}</p>
          <p>Harga:  Rp. {{ number_format($sparepart->harga, 0, ',', '.') }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="button-container">
  <a href="{{ URL::previous() }}" class="button">Kembali</a><br>
  <a href="/home" class="buttonmenu">Menu Utama</a>
</div>
@endsection