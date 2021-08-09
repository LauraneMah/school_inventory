<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_rooms', function (Blueprint $table) {

            $table->id();
            $table->bigInteger('material_id')->unsigned();
            $table->bigInteger('room_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('materials');
            $table->foreign('room_id')->references('id')->on('rooms');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_rooms');
    }
}
