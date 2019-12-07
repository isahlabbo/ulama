<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudioViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio_views', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('users')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('audio_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('audios')
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
        Schema::dropIfExists('audio_views');
    }
}
