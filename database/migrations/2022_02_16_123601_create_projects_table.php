<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name')->nullable();
            $table->string('short_description')->nullable();
            $table->boolean('status')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('region')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('point_x')->nullable();
            $table->string('point_y')->nullable();
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
