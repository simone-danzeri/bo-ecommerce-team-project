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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ecommerce_user_id')->constrained('ecommerce_users');
            $table->foreignId('ecommerce_order_id')->constrained('ecommerce_orders');
            $table->string('title', 100);
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->boolean('is_available')->default(true);
            $table->float('weight', 8, 2);
            $table->smallInteger('quantity')->unsigned();
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
        Schema::dropIfExists('products');
    }
};