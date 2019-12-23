<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->bigIncrements('workshop_id');
            $table->string('workshop_name');
            $table->string('workshop_description');
            $table->string('workshop_phone')->nullable();
            $table->string('workshop_land_line');

            $table->bigInteger('workers_number')->default(0);
            $table->boolean('waiting_spot')->default(0);
            $table->boolean('request')->default(0);
            $table->string('workshop_type')->default(0);


            $table->string('manager_name')->nullable();
            $table->string('manager_experience');

            $table->time("begin_time");
            $table->time("finish_time");

            $table->date('begin_date');
            $table->date('finish_date');

            $table->string('workshop_logo');

            $table->bigInteger('id_location')->unsigned();
            $table->foreign('id_location')->references('location_id')->on('locations')
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
        Schema::dropIfExists('workshops');
    }
}
