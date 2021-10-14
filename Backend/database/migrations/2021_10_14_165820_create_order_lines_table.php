<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_lines', function (Blueprint $table) {
            $table->bigIncrements('orderLine_id');
            $table->integer('amount');
            $table->float('subtotal');

            $table->bigInteger('productId')->unsigned()->nullable();
            $table->bigInteger('orderId')->unsigned()->nullable();

            $table->foreign('productId')->references('prod_id')->on('products')->onDelete('cascade');
            $table->foreign('orderId')->references('order_id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_lines');
    }
}
