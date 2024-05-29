<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecommerce_orders', function (Blueprint $table) {
            $table->id();
            $table->string('name_client', 50);
            $table->decimal('price_delivery', 8,2);
            $table->interger('number_order', 25);
            $table->string('payment_type', 25);
            $table->tinyint('payment_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecommerce_orders');
    }
};
