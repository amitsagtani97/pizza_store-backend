<?php

use App\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {
        $size = (integer)Config::get('mcs-helper.seeder.row_count');
        factory(Order::class, $size)->create();
    }
}
