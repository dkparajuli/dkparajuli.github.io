<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipmentorders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('itemname');
            $table->string('customername');
            $table->integer('contact');
            $table->integer('quantity');
            $table->string('deliveryaddress');
            $table->integer('total');
            $table->date('todaydate');
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
        Schema::dropIfExists('equipmentorders');
    }
}
