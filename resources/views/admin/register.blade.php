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

        .form-container {
            width: 500px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
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

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .form-group input[type="submit"] {
            background-color: #4a325d;
            color: white;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
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
            margin-right: 20px;
        }

        .alert {
            display: none;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
        }

        .alert.show {
            display: block;
        }
    </style>
@endpush

@section('container')
    <div class="form-container">
        <div class="title">Regrestasi</div>
        @if (session('status') === 'success')
            <div id="alert" class="alert">Registrasi berhasil!</div>
        @elseif (session('status') === 'error')
            <div id="alert" class="alert">Registrasi Gagal, Silahkan coba lagi!</div>
        @endif
        <br>
        <br>
        <form action="/register" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Nama:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" rows="3" required>
            </div>
            <div class="button-container">
                <button type="submit" value="Submit" class="button">Registrasi</button>
                <a href="/home" class="button">Kembali</a>
            </div>
        </form>
    </div>
@endsection

@push('footer')
    <script>
        function toggleDropdown(event) {
            event.preventDefault();
            const dropdown = event.target.nextElementSibling;
            const sidebar = event.target.closest('.sidebar');

            if (dropdown.style.display === 'block') {
                dropdown.style.display = 'none';
                sidebar.style.zIndex = ''; // Menghapus pengaturan z-index pada sidebar
            } else {
                dropdown.style.display = 'block';
                sidebar.style.zIndex = '2'; // Menambahkan z-index: 2; pada sidebar saat dropdown muncul

                const nextSibling = event.target.parentElement.nextElementSibling;
                if (nextSibling) {
                    nextSibling.style.order = '2';
                }
            }
        }
    </script>
@endpush
