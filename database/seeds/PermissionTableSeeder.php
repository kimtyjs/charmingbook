<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['slug' => 'buying-Product', 'name' => 'buyingProduct']);
        Permission::create(['slug' => 'banned', 'name' => 'banned']);
        Permission::create(['slug' => 'create-task', 'name' => 'create task']);
        Permission::create(['slug' => 'approved', 'name' => 'approved']);
    }
}
