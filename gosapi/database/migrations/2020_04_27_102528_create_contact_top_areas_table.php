<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTopAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_top_areas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_title');
            $table->string('phone_number_one');
            $table->string('phone_number_two');
            $table->string('email_title');
            $table->string('email_one')->unique();
            $table->string('email_two')->unique();
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
        Schema::dropIfExists('contact_top_areas');
    }
}
