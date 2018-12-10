<?php

use App\Coupons;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupons::create([
        	'code' => 'ABC123',
        	'type' => 'fixed',
        	'value' => 3000,
        ]);

        
    }
}
