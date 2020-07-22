<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNameItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('name_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title_one');
            $table->string('title_two');
            $table->string('title_three');
            $table->string('title_four');
            $table->string('title_five');
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
        Schema::dropIfExists('name_items');
    }
}
