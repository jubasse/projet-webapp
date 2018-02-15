<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60)->unique()->notNull();
            $table->string('first_name', 80)->index()->notNull();
            $table->string('last_name', 80)->index()->notNull();
            $table->string('email', 120)->unique()->notNull();
            $table->string('password', 128)->notNull();
            $table->unsignedInteger('created_by')->index()->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->unsignedInteger('trashed_by')->index()->nullable();
            $table->foreign('trashed_by')->references('id')->on('users')->onDelete('set null');
            $table->softDeletesTz();
            $table->rememberToken();
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
        \Schema::dropIfExists('users');
    }
}
