<?php

use App\Coupon;
use Illuminate\Database\Seeder;

class CouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code' => 'Linn19',
            'type' => 'fixed',
            'value' => 30
        ]);

        Coupon::create([
            'code' => 'QWER89',
            'type' => 'percent',
            'percent_off' => 50
        ]);

    }
}
