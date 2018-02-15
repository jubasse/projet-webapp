<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Schema::create('models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 161)->unique()->notNull();
            $table->string('first_name', 80)->index()->notNull();
            $table->string('last_name', 80)->index()->notNull();
            $table->unsignedInteger('height')->index()->notNull();
            $table->unsignedInteger('waist')->index()->nullable();
            $table->unsignedInteger('chest')->index()->nullable();
            $table->enum('cap_size', config('enums.cap_sizes'))->index()->nullable();
            $table->unsignedInteger('hips')->index()->nullable();
            $table->unsignedInteger('shoe_size')->index()->nullable();
            $table->enum('hair', config('enums.hair_colors'))->index()->nullable();
            $table->enum('eyes', config('enums.eyes_colors'))->index()->nullable();
            $table->enum('sex', config('enums.sexes'))->index()->notNull();
            $table->unsignedInteger('created_by')->index()->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->softDeletesTz();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Schema::dropIfExists('models');
    }
}
