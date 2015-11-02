<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->string('name');
            $table->string('business_name');
            $table->string('email');
            $table->string('phone');
            $table->boolean('is_web_design');
            $table->boolean('is_web_hosting');
            $table->boolean('is_social_media');
            $table->boolean('is_logo_design');
            $table->boolean('is_seo');
            $table->text('message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prospects');
    }
}
