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
            margin-right: 20px;
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

        .form-container {
            /* width: 500px; */
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
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
            max-width: 1000px;
            background-color: #ffffff;
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

        /* CSS untuk tabel */
        .table-container {
            max-height: 400px;
            /* Atur ketinggian maksimum tabel */
            max-width: 1000px;
            /* Atur lebar maksimum tabel */
            overflow-y: auto;
            /* Aktifkan overflow vertikal */
            overflow-x: scroll;
            /* Selalu tampilkan scroll horizontal */
        }

        #searchInput {
            top: 0px;
            right: 0;
            margin: 10px;
            padding: 5px;
            font-family: 'Poppins', sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
        }

        td {
            border: 1px solid #ddd;
        }

        td.role {
            display: flex;
            align-items: center;
        }

        td.role a {
            margin-right: 1px;
            /* Tambahkan margin kanan antara ikon */
        }

        /* CSS untuk Modal Edit Data */
        .modal-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .modal-body {
            padding: 1rem 2rem;
        }

        .modal-footer {
            padding: 1rem 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-control {
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-secondary {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-secondary:hover,
        .btn-secondary:focus {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .close {
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            opacity: 0.5;
            text-shadow: none;
            transition: opacity 0.15s ease-in-out;
        }

        .close:hover,
        .close:focus {
            color: #000;
            opacity: 0.75;
            text-decoration: none;
            outline: none;
        }

        .action-btn {
            display: inline-block;
            color: #0b41a5;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
            margin-right: 5px;
            /* Atur lebar yang diinginkan */
            text-align: center;
            text-decoration: none;
            box-sizing: border-box;
        }

        .edit-btn,
        .delete-btn {
            font-size: 16px;
            /* Atur ukuran ikon yang diinginkan */
        }
    </style>
@endpush

@section('container')
    <div class="form-container">
        <div class="deskripsi-container">
            <div style="width: 100%; justify-content: center;">
                <div>
                    <div class="top-container">
                        <div class="deskripsi-box">
                            <h2>Data Mobil</h2>
                            <input type="text" id="searchInput" placeholder="Cari...">
                            <div class="table-container">
                                <table id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Mobil</th>
                                            <th>Merk</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($mobil as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->mobil }}</td>
                                            <td>{{ $item->merkmobil->merk }}</td>
                                            <td class="role">
                                                <a href="datamobil/edit/{{ $item->id }}" class="action-btn edit-btn"><i
                                                        class="fas fa-edit"></i></a>
                                                <form id="delete-form" action="/deletemobil/{{ $item->id }}"
                                                    method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="action-btn delete-btn"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="button-container">
                        <a href="/home" class="button">Kembali</a>
                        <a href="/datamobil/create" class="button">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#searchInput').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('#dataTable tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endpush

