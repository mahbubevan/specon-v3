<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookedTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booked_tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id')->index();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('quantity');
            $table->string('vouchar_id');
            $table->string('seat_numbers');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booked_tickets');
    }
}
