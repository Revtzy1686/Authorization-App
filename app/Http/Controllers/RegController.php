<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    public function index()
    {
        return view('barang.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|max:255',
        ]);

        // Hash the password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Create the user
        User::create($validatedData);

        return redirect(route('login'))->with('success', 'Registration successful. Please login.');
    }
}
