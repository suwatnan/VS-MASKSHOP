<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBasketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baskets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('basketID')->nullable();
            $table->integer('basketnum')->nullable();
            $table->integer('userID')->nullable();
            $table->integer('productID')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('baskets');
    }
}
