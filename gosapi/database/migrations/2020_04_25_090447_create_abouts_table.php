<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('inner_about_id');
            $table->bigInteger('two_columns_id');
            $table->bigInteger('three_columns_id');
            $table->bigInteger('finding_us_id');
            $table->bigInteger('breadcrump_id');
            $table->string('title');
            $table->bigInteger('about_counter_area_id');
            $table->bigInteger('about_one_id');
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
        Schema::dropIfExists('abouts');
    }
}
