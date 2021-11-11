<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTables extends Migration
{
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('name', 200)->nullable();
            $table->string('path')->nullable();
        });






    }

    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
