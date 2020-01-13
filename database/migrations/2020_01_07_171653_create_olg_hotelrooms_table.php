<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOlgHotelroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olg_hotelrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id');
            $table->string('hotel_rooms');
            $table->string('type_of_availability');
            $table->decimal('base_price',8,2);
            $table->decimal('taxes',4,2);
            $table->text('promotions');
            $table->text('cancellation_policy');
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
        Schema::drop('olg_hotelrooms');
    }
}
