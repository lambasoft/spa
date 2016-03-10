<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpasPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spas_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo', 20);
            $table->integer('link_spa_id')->unsigned();
            $table->foreign('link_spa_id')->references('id')->on('spas')->onDelete('cascade');
            $table->string('caption', 100);
            $table->boolean('highlighted');
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
        Schema::drop('spas_photos');
    }
}
