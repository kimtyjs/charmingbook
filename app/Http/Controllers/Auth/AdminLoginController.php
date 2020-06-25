<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct() {

        $this->middleware('guest:admin')->except('adminLogout');
    }

    public function returnAdminLoginPage() {

        return view('pages.dashboard.login');
    }

    public function postLogin( Request $request) {

        request()->validate([

            'email' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('email', 'password');

        if(Auth::guard('admin')->attempt($credential)) {

            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));

    }

    protected function guard() {

        return Auth::guard('admin');
    }

    public function adminLogout(Request $request) {

        //Getting the session key for this user(admin)
        $sessionKey = $this->guard()->getName();

        //Logging out this user
        Auth::guard('admin')->logout();

        //Delete the session key (just for this user)
        $request->session()->forget($sessionKey);

        return redirect()->route('admin.login');

    }
}
