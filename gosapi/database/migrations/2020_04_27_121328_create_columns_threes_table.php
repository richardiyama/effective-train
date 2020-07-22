<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnsThreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('columns_threes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title_one');
            $table->text('content_one');
            $table->string('title_two');
            $table->text('content_two');
            $table->string('title_three');
            $table->text('content_three');
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
        Schema::dropIfExists('columns_threes');
    }
}
