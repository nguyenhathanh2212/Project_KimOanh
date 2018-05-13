<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('picture_id');
            $table->unsignedInteger('picture_real_id');
            $table->unsignedInteger('video_id');
            $table->string('title');
            $table->longText('review')->nullable();
            $table->longText('content_overview')->nullable();
            $table->longText('content_position')->nullable();
            $table->longText('content_distribution')->nullable();
            $table->longText('content_cataloque')->nullable();
            $table->text('content_contact')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
