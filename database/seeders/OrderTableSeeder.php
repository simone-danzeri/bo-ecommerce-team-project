<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Order;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $newOrder = new Order();
            $newOrder->name_client = $faker->word();
            $newOrder->price_delivery = $faker->randomFloat(2, 1, 100);
            $newOrder->number_order = $faker->randomNumber(1, true);
            $newOrder->payment_type = $faker->creditCardType();
            $newOrder->payment_status = $faker->boolean();
            $newOrder->save();
        }
    }
}
