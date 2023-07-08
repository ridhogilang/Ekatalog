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

        .title {
            margin-bottom: 20px;
            font-size: 30px;
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }

        /* CSS untuk form */
        .form-container {
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
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
            font-family: 'Poppins', sans-serif; /* Menyamakan gaya font dengan judul */
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
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
    </style>
@endpush

@section('container')
    <div class="form-container">
        <div class="title">Hello, {{ auth()->user()->username }}</div>
        <br>
        <br>
        <form action="proses.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required value="{{ auth()->user()->username }}" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" required>
            </div>
            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password" rows="3" required>
            </div>
        </form>
        <div class="button-container">
            <button type="submit" value="Submit" class="button">Update Data</button>
            <a href="{{ URL::previous() }}" class="button">Kembali</a>
        </div>
    </div>
@endsection
