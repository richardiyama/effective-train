<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccordionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accordions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('content_one');
            $table->text('content_two');
            $table->string('title_one');
            $table->string('title_two');
            $table->string('title_three');
            $table->string('title_four');
            $table->text('content_three');
            $table->text('content_four');
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
        Schema::dropIfExists('accordions');
    }
}
