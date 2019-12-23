<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_car', function (Blueprint $table) {
            $table->bigIncrements('workshop_car_id');

            $table->bigInteger('id_car')->unsigned();
            $table->foreign('id_car')->references('car_id')->on('cars')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('id_workshop')->unsigned();
            $table->foreign('id_workshop')->references('workshop_id')->on('workshops')
                ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('workshop_car');
    }
}
