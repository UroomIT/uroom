<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use MercurySeries\Flashy\Flashy as FlashyFlashy;

class LoginController extends Controller
{
    //
    public function loginView(){
        
        return view('auth.login');
    }

    public function defLogUser(LoginRequest $request){
        $credentials = $request->validated();
        // $remember = $request->filled('remember');
        if (Auth::attempt($credentials)) {
            # regenerate a session for user with request object
            $request->session()->regenerate();
            FlashyFlashy::success('Welcome to your dashboard ');
            // Assuming the user has been authenticated successfully
            return redirect()->intended(route('dashboard'));
        }
        return to_route('login')->withErrors([
            'email' => 'Your informations are incorrect, please contact your admin',
            'password' => 'Your informations are incorrect, please contact your admin',
        ])->onlyInput(['email','password']);
        
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
