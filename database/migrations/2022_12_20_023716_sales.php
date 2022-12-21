<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_surname')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_mail')->nullable();
            $table->text('customer_address')->nullable();
            $table->text('customer_apart')->nullable();
            $table->date('sale_date')->nullable();
            $table->decimal('price', 10,2)->nullable();
            $table->integer('discount')->nullable();
            $table->decimal('payable', 10,2)->nullable();
            $table->decimal('paid', 10,2)->nullable();
            $table->decimal('remaining', 10,2)->nullable();
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
        Schema::dropIfExists('sales');
    }
}
