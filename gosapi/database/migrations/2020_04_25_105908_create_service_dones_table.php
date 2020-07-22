<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceDonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_dones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('two_columns_id');
            $table->bigInteger('service_area_id');
            $table->bigInteger('breadcrump_id');
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
        Schema::dropIfExists('service_dones');
    }
}
