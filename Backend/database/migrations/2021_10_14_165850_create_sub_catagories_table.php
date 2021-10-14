<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCatagoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_catagories', function (Blueprint $table) {
            $table->bigIncrements('subCat_id');
            $table->string('subCatName');
            $table->string('subCatDescription');
            $table->binary('subCatImage');

            $table->bigInteger('catId')->unsigned()->nullable();
            $table->foreign('catId')->references('cat_id')->on('catagories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_catagories');
    }
}
