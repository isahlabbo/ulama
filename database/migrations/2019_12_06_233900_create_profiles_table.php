<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('users')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('lga_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('lgas')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('gender_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('genders')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('state_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('states')
            ->delete('restrict')
            ->update('cascade');
            $table->text('about')->nullable();
            $table->text('home_address')->nullable();
            $table->text('alternative_address')->nullable();
            $table->integer('verification_status')->default(0);
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
        Schema::dropIfExists('profiles');
    }
}
