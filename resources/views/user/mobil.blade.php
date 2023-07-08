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

        .navbar-item.active a {
            color: white;
            border-bottom: 2px solid white;
            padding-bottom: 1px;
        }

        .top-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        /* CSS untuk baris pada tata letak 3x3 */
        .top-row {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        /* CSS untuk kotak pada tata letak 3x3 */
        .top-box {
            width: calc(100% / 3);
            height: auto;
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
    </style>
@endpush

@section('container')
    <nav class="navbar">
        <ul class="navbar-list">
            <li class="navbar-item {{ request()->is('mobil/Toyota') ? 'active' : '' }}"><a href="/mobil/Toyota">Toyota</a>
            </li>
            <li class="navbar-item {{ request()->is('mobil/Daihatsu') ? 'active' : '' }}"><a
                    href="/mobil/Daihatsu">Daihatsu</a></li>
            <li class="navbar-item {{ request()->is('mobil/Honda') ? 'active' : '' }}"><a href="/mobil/Honda">Honda</a></li>
            <li class="navbar-item {{ request()->is('mobil/Suzuki') ? 'active' : '' }}"><a href="/mobil/Suzuki">Suzuki</a>
            </li>
            <li class="navbar-item {{ request()->is('mobil/Mitsubishi') ? 'active' : '' }}"><a
                    href="/mobil/Mitsubishi">Mitsubishi</a></li>
            <li class="navbar-item {{ request()->is('mobil/Nissan') ? 'active' : '' }}"><a href="/mobil/Nissan">Nissan</a>
            </li>
        </ul>
    </nav>
    <br>
    <br>
    <div class="top-container">
        @php
            $count = 0;
            $totalItems = count($merkMobil) * 3; // Jumlah total item yang ingin ditampilkan
            $midPoint = ceil($totalItems / 2); // Titik tengah untuk membagi data menjadi bagian atas dan bagian tengah
            $rowNumber = 0;
        @endphp

        <div class="top-row">
            @foreach ($merkMobil as $merk)
                @foreach ($merk->mobil as $item)
                    @php $count++; @endphp

                    @if ($count <= 3)
                        <!-- Bagian atas -->
                        <a href="/mobil/{{ $merk->merk }}/{{ $item->id }}/sparepart" class="box top-box">
                            <img src="{{ asset($item->image) }}" alt="Gambar" class="box-image">
                            <div class="box-caption">{{ $item->mobil }}</div>
                        </a>
                    @elseif ($count <= $midPoint)
                        <!-- Bagian tengah -->
                        @if ($count == 4)
        </div>
        <div class="top-row">
            @endif

            <a href="/mobil/{{ $merk->merk }}/{{ $item->id }}/sparepart" class="box top-box">
                <img src="{{ asset($item->image) }}" alt="Gambar" class="box-image">
                <div class="box-caption">{{ $item->mobil }}</div>
            </a>
        @else
            <!-- Bagian bawah -->
            @if ($rowNumber == 3)
        </div>
        <div class="top-row">
            @php $rowNumber = 0; @endphp
            @endif

            <a href="/mobil/{{ $merk->merk }}/{{ $item->id }}/sparepart" class="box top-box">
                <img src="{{ asset($item->image) }}" alt="Gambar" class="box-image">
                <div class="box-caption">{{ $item->mobil }}</div>
            </a>
            @endif

            @php
                $rowNumber++;
            @endphp
            @endforeach
            @endforeach
        </div>
    </div>
    <br>
    <div class="button-container">
        <a href="/home" class="button">Kembali</a>
    </div> 
@endsection
