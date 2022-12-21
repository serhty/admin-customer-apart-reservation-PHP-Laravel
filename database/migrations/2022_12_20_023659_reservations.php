<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status')->nullable();
            $table->integer('room_id')->nullable();
            $table->integer('apart_id')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->datetime('reservation_date')->nullable();
            $table->decimal('price', 10,2)->nullable();
            $table->integer('discount')->nullable();
            $table->decimal('final_price', 10,2)->nullable();
            $table->string('booker')->nullable();
            $table->integer('count_people')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_surname')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_mail')->nullable();
            $table->text('customer_address')->nullable();
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
        Schema::dropIfExists('reservations');
    }
}
