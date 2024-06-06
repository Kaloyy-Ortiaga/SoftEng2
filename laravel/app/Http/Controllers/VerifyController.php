<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class VerifyController extends Controller
{
    public function verify(Request $request)
    {
        $credentials = [
            'student_no' => $request->input('id'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            Session::put('user_id', Auth::user()->id);
            Session::put('role_id', Auth::user()->role_id);
            Session::put('user_type', Auth::user()->user_type);
            // Authentication passed...
            return redirect()->intended('home');
        } else {
            // Authentication failed...
            return back()->withErrors([
                'message' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}



