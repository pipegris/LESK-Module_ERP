<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_order_id');
            $table->integer('recipe_id');
            $table->integer('quantity');
            $table->timestamp('start_time');
            $table->integer('status');
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
        Schema::drop('production_order_items');
    }
}
