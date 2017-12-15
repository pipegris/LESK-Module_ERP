<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mod_erp_recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('version');
            $table->integer('stirring_time');
            $table->integer('reaction_time');
            $table->integer('reaction_temp');
            $table->string('description');
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
        Schema::drop('mod_erp_recipes');
    }
}
