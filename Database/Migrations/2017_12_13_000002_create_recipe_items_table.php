<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mod_erp_recipe_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recipe_id');
            $table->integer('supply_id');
            $table->integer('quantity');
            $table->boolean('enabled')->default(0);
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
        Schema::drop('mod_erp_recipe_items');
    }
}
