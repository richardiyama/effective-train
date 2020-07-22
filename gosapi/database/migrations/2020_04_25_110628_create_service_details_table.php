<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('two_columns_id');
            $table->string('service_image')->nullable();
            $table->text('content_one');
            $table->text('content_two');
            $table->string('title_one');
            $table->string('list_one');
            $table->string('list_two');
            $table->string('list_three');
            $table->string('list_four');
            $table->string('list_five');
            $table->string('service_booking_url')->nullable();
            $table->text('content_three');
            $table->text('content_four');
            $table->string('title_two');
            $table->string('list_six');
            $table->string('list_seven');
            $table->string('list_eight');
            $table->string('service_video')->nullable();
            $table->bigInteger('finding_us_id');
            $table->bigInteger('breadcrumbarea_id');
            $table->bigInteger('orignalservice_id');
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
        Schema::dropIfExists('service_details');
    }
}
