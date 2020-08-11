<?php

use Illuminate\Database\Seeder;

class
 DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionTableSeeder::class,
            RoleTableSeeder::class,
            UserTableSeeder::class,
            AdminTableSeeder::class,
            CategoryTableSeeder::class,
            CouponTableSeeder::class,
            //ProductTableSeeder::class,
            AuthorSeederTable::class,
            PublicationSeederTable::class,
            LanguageSeederTable::class
        ]);

    }
}
