<?php

use App\Admin;
use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('slug', 'admin')->first();
        $permission = Permission::where('slug', 'banned')->first();

        $admins = Admin::create([

            'name' => 'linn',
            'email' => 'linn@gmail.com',
            'password' => Hash::make('123456789')
        ]);

        //attach role and permission to the admin
        $admins->roles()->attach($role);
        $admins->permissions()->attach($permission);
    }
}
