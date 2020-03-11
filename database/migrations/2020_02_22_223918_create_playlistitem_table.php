<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlistitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->string('image_url', 255);
            $table->string('youtube_id', 255);
            $table->unsignedBigInteger('room_id');

            $table->timestamps();
            $table->foreign('room_id')->references('id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlistitem');
    }
}
