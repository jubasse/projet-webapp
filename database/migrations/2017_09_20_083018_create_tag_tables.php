<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagTables extends Migration
{
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->json('name');
            $table->json('slug');
            $table->string('type', 120)->index()->nullable();
            $table->integer('order_column')->nullable();
            $table->timestampsTz();
        });

        Schema::create('taggables', function (Blueprint $table) {
            $table->unsignedInteger('tag_id')->index()->notNull();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->unsignedInteger('taggable_id')->index()->notNull();
            $table->string('taggable_type', 120)->index()->notNull();
        });
    }

    public function down()
    {
        Schema::drop('taggables');
        Schema::drop('tags');
    }
}
