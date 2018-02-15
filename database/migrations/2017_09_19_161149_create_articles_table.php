<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 130)->unique()->notNull();
            $table->string('title', 120)->unique()->notNull();
            $table->boolean('published')->index()->default(false)->notNull();
            $table->dateTimeTz('published_at')->index()->nullable();
            $table->unsignedInteger('published_by')->index()->nullable();
            $table->foreign('published_by')->references('id')->on('users')->onDelete('set null');
            $table->longText('content')->nullable();
            $table->unsignedInteger('author_id')->index()->nullable();
            $table->foreign('author_id')->references('id')->on('users')->onDelete('set null');
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
        \Schema::dropIfExists('articles');
    }
}
