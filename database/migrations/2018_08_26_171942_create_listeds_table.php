<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listeds', function (Blueprint $table) {
            $table->string('property_name');
            $table->string('name_owner');
            $table->integer('phonenumber');
            $table->string('email');
            $table->string('location');
            $table->integer('Ratings');
            $table->integer('number_conference_hall');
            $table->integer('Capacity');
            $table->integer('price_per_person');
            $table->integer('price_per_metre');
            $table->integer('price_per_hall');
            $table->integer('image')->nullable();
            $table->longText('Description');
            $table->string('checkbox');
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
        Schema::dropIfExists('listeds');
    }
}
