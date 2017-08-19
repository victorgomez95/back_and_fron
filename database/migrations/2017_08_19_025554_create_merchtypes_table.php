<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('merchtypes', function (Blueprint $table) {
        $table->engine = 'InnoDB';
        $table->increments('id')
              ->comment('Index of table merchtypes');
        $table->string('name', 100)->unique()
              ->comment('Name of the category or type of merch');
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
        Schema::drop('merchtypes');
    }
}
