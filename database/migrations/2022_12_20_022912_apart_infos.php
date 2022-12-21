<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApartInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apart_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status')->nullable();
            $table->integer('customer_id')->nullable();
            $table->text('apart_name')->nullable();
            $table->string('apart_concept')->nullable();
            $table->text('apart_link')->nullable();
            $table->text('apart_address')->nullable();
            $table->string('apart_phone1')->nullable();
            $table->string('apart_phone2')->nullable();
            $table->string('apart_whatsapp')->nullable();
            $table->text('apart_location')->nullable();
            $table->string('apart_mail')->nullable();
            $table->text('apart_facebook')->nullable();
            $table->text('apart_instagram')->nullable();
            $table->text('apart_youtube')->nullable();
            $table->text('apart_twitter')->nullable();
            $table->text('apart_bank1')->nullable();
            $table->text('apart_bank2')->nullable();
            $table->text('apart_description')->nullable();
            $table->text('apart_info')->nullable();
            $table->integer('populer')->nullable();
            $table->integer('recommended')->nullable();
            $table->integer('last_visited')->nullable();
            $table->integer('apart_note')->nullable();
            $table->decimal('apart_price', 10,2)->nullable();
            $table->integer('apart_discount')->nullable();
            $table->decimal('apart_discounted_price', 10,2)->nullable();
            $table->decimal('apart_final_price', 10,2)->nullable();
            $table->integer('next_sea')->nullable();
            $table->integer('spa')->nullable();
            $table->integer('restaurant')->nullable();
            $table->integer('disabled_friendly')->nullable();
            $table->integer('laundry')->nullable();
            $table->integer('car_park')->nullable();
            $table->integer('wifi')->nullable();
            $table->integer('rent_car')->nullable();
            $table->integer('transfer')->nullable();
            $table->integer('bath')->nullable();
            $table->integer('pool')->nullable();
            $table->integer('wheelchair')->nullable();
            $table->integer('kid_friendly')->nullable();
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
        Schema::dropIfExists('apart_infos');
    }
}
