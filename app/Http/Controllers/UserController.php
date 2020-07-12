<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }

    public function index() {

        $users = User::all();
        return view('pages.dashboard.user.userList', compact('users'));

    }

    public function checkUserDetail($id, $name) {

        $user = User::where('id', $id)->firstOrFail();
        return view('pages.dashboard.user.userDetailProfile', compact('user'));
    }


}
