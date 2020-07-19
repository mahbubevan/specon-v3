<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOverviewSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overview_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('title2');
            $table->string('title3');
            $table->string('title4');
            $table->string('icon1');
            $table->string('icon2');
            $table->string('icon3');
            $table->string('icon4');
            $table->string('p1');
            $table->string('p2');
            $table->string('p3');
            $table->string('p4');
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
        Schema::dropIfExists('overview_sections');
    }
}
