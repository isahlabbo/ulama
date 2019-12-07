<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_downloads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('users')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('video_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('videos')
            ->delete('restrict')
            ->update('cascade');
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
        Schema::dropIfExists('video_downloads');
    }
}
