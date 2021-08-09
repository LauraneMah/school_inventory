<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialPerson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_people', function (Blueprint $table) {

            $table->id();
            $table->bigInteger('material_id')->unsigned();
            $table->bigInteger('person_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('materials');
            $table->foreign('person_id')->references('id')->on('people');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_people');
    }
}
