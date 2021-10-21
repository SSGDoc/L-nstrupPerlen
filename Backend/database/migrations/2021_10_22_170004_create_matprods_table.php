<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatprodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('matprods', function (Blueprint $table) {
        //     $table->bigInteger('prodId')->unsigned()->nullable();
        //     $table->bigInteger('matId')->unsigned()->nullable();
        //     $table->primary(['prodId','matId']);

        //     $table->foreign('prodId')->references('prod_id')->on('products')->onDelete('cascade');
        //     $table->foreign('matId')->references('mat_id')->on('materials')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matprods');
    }
}
