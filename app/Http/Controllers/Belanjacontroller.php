<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ecommerce;

class Belanjacontroller extends Controller
{
    public function index(){
        $ecommerces = Ecommerce::orderBy('nama_barang', 'ASC')->get();
        return view('Users.index', [
            'ecommerces'=> $ecommerces
        ]);

    }
}
