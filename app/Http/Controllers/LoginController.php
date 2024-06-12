<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    { 
        return view('barang.login', [
            'title' => 'Login'
        ]);
    }
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            If(!auth()->check() || auth()->user()->name == 'Revan'){
                return redirect()->intended('/ecommerce')->with('logSuccess', '');
            }

            return redirect()->intended('/belanja')->with('logSuccess', '');
        }

        return back()->with('LoginError', '');
    }
    
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
  
        return redirect('/login');
 }
}
