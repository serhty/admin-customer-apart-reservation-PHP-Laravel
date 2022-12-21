<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApartRooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apart_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status')->nullable();
            $table->integer('apart_id')->nullable();
            $table->text('room_name')->nullable();
            $table->text('room_concept')->nullable();
            $table->text('room_description')->nullable();
            $table->text('room_info')->nullable();
            $table->decimal('room_price', 10,2)->nullable();
            $table->integer('room_discount')->nullable();
            $table->decimal('room_discounted_price', 10,2)->nullable();
            $table->decimal('room_final_price', 10,2)->nullable();
            $table->integer('wifi')->nullable();
            $table->integer('mini_bar')->nullable();
            $table->integer('bathtub')->nullable();
            $table->integer('ac_dryer_machine')->nullable();
            $table->integer('tv')->nullable();
            $table->integer('safe')->nullable();
            $table->integer('balcony')->nullable();
            $table->integer('kitchen')->nullable();
            $table->integer('washing_machine')->nullable();
            $table->integer('refrigerator')->nullable();
            $table->integer('dishwasher')->nullable();
            $table->integer('air_conditioning')->nullable();
            $table->integer('smoke_detector')->nullable();
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
        Schema::dropIfExists('apart_rooms');
    }
}
