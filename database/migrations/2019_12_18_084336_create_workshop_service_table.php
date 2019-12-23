<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_service', function (Blueprint $table) {
            $table->bigIncrements('workshop_service_id');
            $table->float('price')->default(0);


            $table->bigInteger('id_service')->unsigned();
            $table->foreign('id_service')->references('service_id')->on('services')
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
        Schema::dropIfExists('workshop_service');
    }
}
