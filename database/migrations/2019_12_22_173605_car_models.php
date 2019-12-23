<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->bigIncrements('model_id');
            $table->string('car_model');
            $table->string('car_year');
            $table->string('car_kilo');
            $table->string('chassis_number');
            $table->string('fuel_type');
            $table->string('transmission');
            $table->string('car_number');


            $table->bigInteger('id_car')->unsigned();
            $table->foreign('id_car')->references('car_id')->on('cars')
                ->onDelete('restrict')->onUpdate('cascade');


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
        Schema::dropIfExists('car_models');
    }
}
