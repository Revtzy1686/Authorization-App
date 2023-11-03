@extends('layouts.app')
 
@section('content')
    <div class="container">
        <h2>Edit Barang</h2>
        <form action="{{ route('barang.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control" value="{{ $barang->kode_barang }}" required>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="form-control" value="{{ $barang->harga }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection