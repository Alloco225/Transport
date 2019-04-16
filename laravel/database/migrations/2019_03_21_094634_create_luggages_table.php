<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuggagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('luggages')){
            Schema::create('luggages', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('description', '100')->nullable;
                $table->timestamps();
            });
        }
        // 
        Schema::table('luggages', function (Blueprint $table) {
            $table->unsignedBigInteger('luggages_type_id')->nullable();
            $table->foreign('luggages_type_id')->references('id')->on('luggages_type')->onDelete('set null');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->unsignedBigInteger('journeys_users_id');
            $table->foreign('journeys_users_id')->references('id')->on('journeys_users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luggages');
    }
}
