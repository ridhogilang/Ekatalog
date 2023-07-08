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

        select {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        option {
            font-family: 'Poppins', sans-serif;
        }

        .input-with-upload {
            display: flex;
            align-items: center;
        }

        .input-with-upload .upload-button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            margin-left: 10px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
        }

        .input-with-upload .file-info {
            margin-left: 10px;
            font-family: 'Poppins', sans-serif;
        }

        
        img {
            max-width: 30%;
            max-height: 200px;
            /* Sesuaikan dengan tinggi yang diinginkan */
        }

        .input-with-upload {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .input-with-upload input[type="file"] {
            margin-top: 4px;
        }
    </style>
@endpush

@section('container')
    <div class="form-container">
        <div class="title">Update Data Mobil</div>
        @if (session('status') === 'success')
            <div id="alert" class="alert">Registrasi berhasil!</div>
        @elseif (session('status') === 'error')
            <div id="alert" class="alert">Registrasi Gagal, Silahkan coba lagi!</div>
        @endif
        <br>
        <br>
        <form action="/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="mobil">Nama Mobil:</label>
                <input type="text" id="mobil" name="mobil" required value="{{ old('mobil', $mobil->mobil) }}">
            </div>
            <div class="form-group">
                <label for="merk_mobil_id">Merk Mobil:</label>
                <select type="merk_mobil_id" id="merk_mobil_id" name="merk_mobil_id" required>
                    <option>Pilih Merk Mobil</option>
                    @foreach ($mobilall as $item)
                    <option value="{{ $item->id }}"
                        {{ $item->id == old('merk_mobil_id', $mobil->merk_mobil_id) ? 'selected' : '' }}>
                        {{ $item->merk }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Upload Gambar</label>
                <div class="input-with-upload">
                    @if ($mobil->image)
                        <p>Gambar saat ini: <br><img src="{{ asset($mobil->image) }}" alt="Gambar saat ini"></p>
                    @endif
                    <input type="file" id="image" name="image">
                </div>
            </div>
            <br><br>
            <div class="button-container">
                <button type="submit" value="Submit" class="button">Update Data</button>
                <a href="{{ URL::previous() }}" class="button">Kembali</a>
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
