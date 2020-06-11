<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }

    public function returnDashboard() {
        return view('pages.dashboard.index');
    }


    public function returnAdminRegisterPage() {
        return view('pages.dashboard.register');

    }

    public function postRegister(Request $request) {

        request()->validate([

            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $data = $request->all();

        $this->create($data);

        return redirect()->route('admin.dashboard');

    }

    public function create(array $data) {

        $admin = Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        $admin
            ->roles()
            ->attach(Role::where('slug', 'admin')->first());

        $admin
            ->permissions()
            ->attach(Permission::where('slug', 'banned')->first());

        return $admin;

    }
}
