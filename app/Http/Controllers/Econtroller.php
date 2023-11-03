<?php

namespace App\Http\Controllers;

use App\Models\Ecommerce;
use Illuminate\Http\Request;

class Econtroller extends Controller
{
public function index()
{
$ecommerces = Ecommerce::all();
return view('barang.index', compact('ecommerces'));
}
public function create()
{ return view('barang.create');
}
public function store(Request $request)
{
$request->validate([
'kode_barang' => 'required|unique:ecommerces',
'nama_barang' => 'required',
'harga' => 'required',
]);
Ecommerce::create($request->all());
return redirect()->route('barang.index')
->with('success', 'Barang berhasil ditambahkan');
}
public function edit($id)
{
$barang = Ecommerce::find($id);
return view('barang.edit', compact('barang'));
}
public function update(Request $request, $id)
{
$request->validate([
'nama_barang' => 'required',
'harga' => 'required',
]);
$barang = Ecommerce::find($id);
$barang->update($request->all());
return redirect()->route('barang.index')
->with('success', 'Barang berhasil diperbarui');
}
public function destroy($id)
{
$barang = Ecommerce::find($id); $barang->delete();
return redirect()->route('barang.index') ->with('success', 'Barang berhasil dihapus');
}

}
