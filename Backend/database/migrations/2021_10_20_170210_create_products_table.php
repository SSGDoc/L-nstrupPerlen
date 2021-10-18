<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('prod_id');
            $table->float('price');
            $table->string('size');
            $table->binary('prodImg');
            $table->bigInteger('catId')->unsigned()->nullable();
            $table->bigInteger('subCatId')->unsigned()->nullable();
            $table->foreign('catId')->references('cat_id')->on('catagories')->onDelete('cascade');
            $table->foreign('subCatId')->references('subCat_id')->on('sub_catagories')->onDelete('cascade');
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
}
