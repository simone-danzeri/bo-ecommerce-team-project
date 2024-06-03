<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Product;
use App\Models\Employee;
use App\Models\Order;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $employee = Employee::first();
        $order = Order::first();

        for($i = 0; $i < 10; $i++) {
            $newProduct = new Product();
            $newProduct->title = $faker->sentence(3);
            $newProduct->description = $faker->text(600);
            $newProduct->price = $faker->randomFloat(2, 1, 999999);
            $newProduct->is_available = $faker->boolean();
            $newProduct->weight = $faker->numberBetween(0, 500);
            $newProduct->quantity = $faker->numberBetween(0, 2000);
            $newProduct->employee_id = $employee->id;
            $newProduct->order_id = $order->id;
            $newProduct->save();
        }
    }
}
