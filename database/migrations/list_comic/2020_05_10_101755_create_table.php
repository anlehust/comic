<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_comic', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('new_chap', 50);
            $table->string('date', 50);
            $table->string('author', 100)->nullable();
            $table->unique('name');
            $table->primary(['id','name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_comic');
    }
}
