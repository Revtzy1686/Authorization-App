@extends('layouts.app')
 
@section('content')
    <div class="container">
        <h2>Data Barang</h2>
        <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Barang</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ecommerces as $barang)
                    <tr>
                        <td>{{ $barang->kode_barang }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->harga }}</td>
                        <td>
                            <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection