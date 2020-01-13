<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOlgHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olg_hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hotel_name');
            $table->string('hotel_address');
            $table->decimal('base_price',8,2);
            $table->string('hotel_image');
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
        Schema::drop('olg_hotels');
    }
}
