<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_number');
            $table->unsignedInteger('total_amount');
            $table->string('order_notes')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 for new, 1 for approved, 2 for in process, 3 for ready, 4 for delivered, 5 for completed');
            $table->unsignedTinyInteger('payment_method')->default(0)->comment('0 for COD, 1 for bank transfer, 2 for credit card');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
