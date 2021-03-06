<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->bigIncrements('id');
            $table->text('body');
            $table->string('image')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('group_id')->nullable()->unsigned();
            $table->bigInteger('etiqueta_id')->nullable()->unsigned();
            $table->timestamps();


            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('etiqueta_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');

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
