<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('post_image')->nullable();
            $table->text('content_one');
            $table->string('blog_image')->nullable();
            $table->text('content_two');
            $table->text('content_three');
            $table->string('title_two');
            $table->text('content_four');
            $table->string('blog_image_two')->nullable();
            $table->string('title_three');
            $table->text('content_five');
            $table->string('title_four');
            $table->string('list_one');
            $table->string('list_two');
            $table->string('list_three');
            $table->string('list_four');
            $table->string('list_five');
            $table->string('title_five');
            $table->string('list_six');
            $table->string('list_seven');
            $table->string('list_eight');
            $table->string('list_nine');
            $table->text('content_six');
            $table->string('blog_video')->nullable();
            $table->string('blog_image_three')->nullable();
            $table->text('content_seven');
            $table->bigInteger('home_id');
            $table->bigInteger('blog_area_id');
            $table->bigInteger('breadcrumbarea_id');
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
        Schema::dropIfExists('posts');
    }
}
