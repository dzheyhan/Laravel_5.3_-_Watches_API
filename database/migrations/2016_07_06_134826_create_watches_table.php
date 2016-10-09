<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id')->unsigned();
            $table->integer('model_id')->unsigned();
            $table->string('movement');
            $table->string('gender');
            $table->string('price');
            $table->boolean('available');
            $table->string('case_size')->nullable();
            $table->string('w_case')->nullable();
            $table->string('bracelet')->nullable();
            $table->string('glass')->nullable();
            $table->string('year')->nullable();


            $table->timestamps();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('model_id')->references('id')->on('watch_models');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('watches');
    }
}
