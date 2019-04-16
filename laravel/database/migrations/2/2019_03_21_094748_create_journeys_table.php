<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJourneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('journeys')){
            Schema::create('journeys', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('code', 10)->unique();
                $table->date('date');
                $table->time('departure_time');
                $table->timestamps();
            });
        }
        // 
        Schema::table('journeys', function (Blueprint $table) {
            $table->unsignedBigInteger('departure_station_id');
            $table->foreign('departure_station_id')->references('id')->on('stations')->onDelete('cascade');

            $table->unsignedBigInteger('arrival_station_id');
            $table->foreign('arrival_station_id')->references('id')->on('stations')->onDelete('cascade');

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');

            // $table->unsignedBigInteger('car_id');
            // $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journeys');
    }
}
