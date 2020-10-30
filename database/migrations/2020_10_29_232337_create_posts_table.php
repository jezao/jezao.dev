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
            $table->timestamps();
            $table->string('title');
            $table->string('slug');
            $table->longText('content')->nullable();
            $table->string('external_url')->nullable();
            $table->dateTimeTz('publish_at')->nullable();
            $table->dateTimeTz('published_at')->nullable();
            $table->string('tweet_url')->nullable();
            $table->string('medium_url')->nullable();
            $table->string('preview_secret')->nullable();
            $table->integer('user_id')->nullable();
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
