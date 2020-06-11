<?php

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('slug', 'user')->first();
        $permission = Permission::where('slug', 'buying-Product')->first();

        $user = User::create([
            'name' => 'denny',
            'email' => 'denny@gmail.com',
            'password' => Hash::make('123456789')
        ]);

        //attach role and permission to the user
        $user->roles()->attach($role);
        $user->permissions()->attach($permission);
    }
}
