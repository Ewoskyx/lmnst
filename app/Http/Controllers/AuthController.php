<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('auth.login');
    }

    public function userLogin(AuthRequest $request)
    {        
        $validated = $request->validated(); 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
        return redirect()->route('login')->withError('Şifre yanlış!');
    }
    
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }

}