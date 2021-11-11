<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTables extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            createDefaultTableFields($table, true, false);
            $table->string('title', 200)->nullable();
            $table->text('content')->nullable();
        });

        Schema::create('post_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'post');
        });


    }

    public function down()
    {
        Schema::dropIfExists('post_slugs');
        Schema::dropIfExists('posts');
    }
}
