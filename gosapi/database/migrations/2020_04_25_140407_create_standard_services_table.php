<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandardServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standard_services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('services_image')->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('services_urls');
            $table->bigInteger('home_id');
            $table->bigInteger('service_done_id');
            $table->bigInteger('two_columns_id');
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
        Schema::dropIfExists('standard_services');
    }
}
