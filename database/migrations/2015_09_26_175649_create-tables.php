<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->text('path');
            $table->text('path_2x');
            $table->text('path_3x');
            $table->text('description');
            $table->text('short_description');
            $table->boolean('is_featured');
            $table->boolean('is_hover');
            $table->integer('client_id');
            $table->string('client_name');
            $table->string('client_slug');
            $table->integer('display_order');
        });

        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->unique();
            $table->text('value');
            $table->integer('expiration');
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->boolean('is_featured');
            $table->string('city');
            $table->string('state');
            $table->string('services_provided');
            $table->string('url');
            $table->boolean('is_use_url');
            $table->text('description');
            $table->integer('display_order');
            $table->boolean('is_custom');
            $table->boolean('is_active');
        });

        Schema::create('testimonials', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->text('testimonial');
            $table->string('author');
            $table->integer('client_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('assets');
        Schema::drop('cache');
        Schema::drop('clients');
        Schema::drop('testimonials');
    }
}
