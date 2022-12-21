<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApartSupports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apart_supports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status')->nullable();
            $table->integer('apart_id')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('mail')->nullable();
            $table->string('phone')->nullable();
            $table->text('message')->nullable();
            $table->datetime('support_date')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('apart_supports');
    }
}
