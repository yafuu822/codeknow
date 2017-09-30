<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category')->nullable();
            $table->integer('type')->nullable();
            $table->string('user')->nullable();
            $table->integer('users_id')->nullable();
            $table->string('title')->nullable();
            $table->string('keyword')->nullable();
            $table->string('content')->nullable();
            $table->string('body')->nullable();
            $table->integer('access')->nullable();
            $table->dateTime('created')->nullable();
            $table->dateTime('updated')->nullable();
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
        //
        Schema::drop('articles');
    }
}
