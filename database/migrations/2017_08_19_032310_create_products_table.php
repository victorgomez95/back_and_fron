<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
        $table->engine = 'InnoDB';
        $table->increments('id')
              ->comment('Index of table products');
        $table->string('name', 100)->unique()
              ->comment('Name of the product');
        $table->text('description')
              ->comment('Brief description of the merch');
        $table->float('price', 6, 2)
              ->comment('Price of the product with six
        digits on the left side of the decimal point and two on the right side');
        $table->string('picture', 100)->unique()
              ->nullable()
              ->comment('Picture of the merch');
        $table->integer('type_id')->unsigned()
              ->comment('Foreign key that indicates what kind of merch the new product is');
        $table->foreign('type_id')->references('id')->on('merchtypes');
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
        Schema::drop('products');
    }
}
