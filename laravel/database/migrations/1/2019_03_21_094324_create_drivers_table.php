<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('drivers')){
            Schema::create('drivers', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('first_name');
                $table->string('last_name');
                $table->date('birth_date');
                $table->string('email')->unique();
                $table->string('phone')->unique();
                $table->string('picture');
                $table->string('address');
                $table->timestamps();
            });
        }
        // 
        Schema::table('drivers', function (Blueprint $table){
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
