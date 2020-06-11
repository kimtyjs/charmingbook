<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buying = Permission::where('slug', 'buying-Product')->first();
        $banning = Permission::where('slug', 'banned')->first();
        $creating = Permission::where('slug', 'create-task')->first();
        $approving = Permission::where('slug', 'approved')->first();

        $userRole = Role::create(['slug' => 'user', 'name' => 'simpleUser']);
        $adminRole = Role::create(['slug' => 'admin', 'name' => 'admin']);
        $moderatorRole = Role::create(['slug' => 'moderator', 'name' => 'superAdmin']);

        $userRole->permissions()->attach($buying);
        $userRole->permissions()->attach($creating);

        $adminRole->permissions()->attach($banning);
        $adminRole->permissions()->attach($approving);
        $adminRole->permissions()->attach($creating);

        $moderatorRole->permissions()->attach($creating);
        $moderatorRole->permissions()->attach($banning);
    }
}
