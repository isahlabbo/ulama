<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_views', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('users')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('document_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('documents')
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
        Schema::dropIfExists('document_views');
    }
}
