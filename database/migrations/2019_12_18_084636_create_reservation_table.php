<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->bigIncrements('reservation_id');

            $table->string('notes');
            $table->time("time");

            $table->date('date');
            $table->boolean('request')->default(0);

            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('user_id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('id_car')->unsigned();
            $table->foreign('id_car')->references('car_id')->on('cars')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('id_workshop')->unsigned();
            $table->foreign('id_workshop')->references('workshop_id')->on('workshops')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('id_service')->unsigned();
            $table->foreign('id_service')->references('service_id')->on('services')
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
        Schema::dropIfExists('reservation');
    }
}
