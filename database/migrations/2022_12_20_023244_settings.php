<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Settings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status')->nullable();
            $table->text('site_url')->nullable();
            $table->text('site_title')->nullable();
            $table->text('site_description')->nullable();
            $table->text('site_keywords')->nullable();
            $table->text('logo')->nullable();
            $table->text('about')->nullable();
            $table->text('user_agreement')->nullable();
            $table->text('cookie_policy')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
