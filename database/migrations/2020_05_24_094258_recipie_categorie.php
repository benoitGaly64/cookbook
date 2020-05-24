<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecipieCategorie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_recipies', function (Blueprint $table) {
            $table->id();
            $table->integer('categories_id')->unsigned();
            $table->integer('recipies_id')->unsigned();
            $table->timestamps();

            $table->foreign('categories_id')->references('id')->on('categories')
						->onDelete('restrict')
                        ->onUpdate('restrict');
            
            $table->foreign('recipies_id')->references('id')->on('recipies')
						->onDelete('restrict')
                        ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_recipies');
    }
}
