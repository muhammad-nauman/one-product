<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id')->index();
            $table->string('customer_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('restaurant_name');
            $table->string('address');
            $table->unsignedInteger('product_count');
            $table->unsignedInteger('delivery_charges')->default(0);
            $table->unsignedTinyInteger('payment_status')->default(0)->comment('1 will represent the successful payment, 0 will represent the payment due');
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
        Schema::dropIfExists('order_details');
    }
}
