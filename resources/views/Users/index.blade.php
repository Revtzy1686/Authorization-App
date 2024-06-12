@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="dashboard.css">
<header class="Kepala">
    <h1 style="font-weight: bold">{{ auth()->user()->name}}</h1>
    <h1 style="font-weight: bold">Belanja</h1>
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
    <h2>Belanja</h2>
    
    <table class="table">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ecommerces as $barang)
              <tr>
                <td>{{ $barang->nama_barang }}</td>
              <td>{{ $barang->harga }}</td>
                <td>
                    <a onclick="return alert('Barang Berhasil Di Tambahkan')" class="btn btn-success"><i class="bi bi-cart-plus-fill"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
