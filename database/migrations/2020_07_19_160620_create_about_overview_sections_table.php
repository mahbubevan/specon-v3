<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutOverviewSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_overview_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('our_vission')->nullable();
            $table->longText('our_mission')->nullable();
            $table->longText('testimonial')->nullable();
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
        Schema::dropIfExists('about_overview_sections');
    }
}
