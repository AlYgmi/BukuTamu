<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Session;
use Session;

class LoginController extends Controller
{
    public function index() 
    {
        return view('login.index');
    }
    public function authenticate(Request $request)
    {
//        $this->authenticate($request, [
//            'email' => 'required|email', 
//            'password' => 'required']) ;
         
         
//         if (!auth()->attempt($requesr->only('email', 'password'))) { 
//         return back();
//         }
//         return redirect('/');
         
         $credentials = $request->validate([
             'email' => 'required|email:dns',
             'password' => 'required'
         ]);

         if(Auth::attempt($credentials)) {
             $request->session()->regenerate();

             return redirect()->intended('show');
         }

         return back()->with('loginError', 'Login Gagal');

    }

    public function logout() 
    {
	    return view('login.logout');
    }

    public function proses_logout(Request $request) 
    {
	    Auth::logout();
        //    auth()->logout;
            
        //    return redirect('index') ;
            
            
        // Auth::logout();

         // $request->session()->invalidate();

         // $request->session()->regeneratedToken();

         return redirect('/');
    }
}
