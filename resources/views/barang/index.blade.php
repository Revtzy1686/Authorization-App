@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="dashboard.css">
<header class="Kepala">
    <h1 style="font-weight: bold">Admin</h1>
    <h1 style="font-weight: bold">Dashboard</h1>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="btn btn-logout" type="submit"><i class="bi bi-box-arrow-right"></i>Logout</button>
    </form>

</header>
<div class="container">
    @if(session()->has('logSuccess'))
    <script>
        alert("Login success");
        </script>
    @endif
    <h2>Data Barang</h2>
    <form action="{{ route('barang.create') }}" method="GET">
        @csrf
        <button type="submit" class="btn btn-primary">Tambah Barang</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
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
