<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeansesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seanses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id');
            $table->dateTime('date');
            $table->double('price');
            $table->integer('free_amount');
            $table->integer('bought_amount');
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
        Schema::dropIfExists('seanses');
    }
}
