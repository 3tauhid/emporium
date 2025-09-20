<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'seller_id' => 2,
            'buyer_id' => 3,
            'name' => 'Order1',
            'status' => 'Processing',
        ]);
        Order::create([
            'seller_id' => 2,
            'buyer_id' => 3,
            'name' => 'Order2',
            'status' => 'Deliver',
        ]);
        Order::create([
            'seller_id' => 2,
            'buyer_id' => 3,
            'name' => 'Order3',
            'status' => 'Canceled',
        ]);
    }
}
