<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
        Schema::create('listings', function (Blueprint $table) {
            $table->string('property_name');
            $table->string('name_owner');
            $table->integer('phonenumber')->nullable();
            $table->string('email');
            $table->string('location')->nullable();
            $table->integer('Ratings');
            $table->integer('number_conference_hall');
            $table->integer('Capacity')->nullable();
            $table->integer('price_per_person');
            $table->integer('price_per_metre');
            $table->integer('price_per_hall');
            $table->integer('image')->nullable();
            $table->longText('Description');
            $table->string('checkbox')->nullable();
            $table->string('slug')->unique();
            $table->increments('id');
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
        Schema::dropIfExists('listings');
    }
}
