<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        \Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('model');
            $table->string('collection_name', 120)->index()->notNull();
            $table->string('name', 120)->index()->notNull();
            $table->string('file_name', 120)->index()->notNull();
            $table->string('mime_type')->index()->nullable();
            $table->string('disk', 120)->index()->notNull();
            $table->unsignedInteger('size')->index()->notNull();
            $table->json('manipulations');
            $table->json('custom_properties');
            $table->unsignedInteger('order_column')->index()->nullable();
            $table->nullableTimestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        \Schema::dropIfExists('media');
    }
}
