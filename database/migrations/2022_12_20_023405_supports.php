<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Supports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('mail')->nullable();
            $table->string('phone')->nullable();
            $table->text('message')->nullable();
            $table->datetime('support_date')->nullable();
            $table->text('reply')->nullable();
            $table->datetime('reply_date')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('supports');
    }
}
