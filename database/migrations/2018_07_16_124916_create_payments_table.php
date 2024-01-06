<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('temp_id');
            $table->string('lastname');
            $table->string('phone');
            $table->integer('delivery');
            $table->string('sity');
            $table->string('street');
            $table->string('house');
            $table->string('entrance');
            $table->string('floor');
            $table->string('door');
            $table->string('zipcode');
            $table->string('message');
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
        Schema::dropIfExists('payments');
    }
}
