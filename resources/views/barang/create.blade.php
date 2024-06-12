@extends('layouts.app')
 
@section('content')
    <style>
        .Kepala {
            text-align: center;
            margin-bottom: 20px; 
            text-align: center;
            display: flex;
            color: aliceblue;
            justify-content: space-between;
            align-items: center;
            padding: 10px 10%;
            background-color: rgb(67, 74, 90);
            margin-bottom: 20px; 
        }

        .Kepala h1 {
            float: left;
            margin-right: 20px;
            font-size: 24px;
        }

        .Kepala h2 {
            font-size: 24px;
            display: inline-block;
            margin: 0 auto;
        }
    </style>

    <header class="Kepala">
        <h1 style="font-weight: bold">Admin</h1>
        <h2 style="font-weight: bold">Ubah Data</h2>
    </header>

    <div class="container">
        <h2>Tambah Barang</h2>
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
