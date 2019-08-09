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
<<<<<<< HEAD
            // $table->bigInteger('group_id')->unsigned();
            $table->timestamps();

            // $table->foreign('group_id')->references('id')->on('groups');
=======
            $table->bigInteger('group_id')->nullable()->unsigned();
            $table->bigInteger('etiqueta_id')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('etiqueta_id')->references('id')->on('users');
>>>>>>> 8e6537b022ef4628be32b6f38fc08fae5371c9cf
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
