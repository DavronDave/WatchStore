<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('cover_image')->nullable();
            $table->boolean('status')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->dateTime('published_date')->nullable();
            $table->integer('quantity_views')->nullable();
            $table->foreignId('article_category_id')->nullable()->constrained('article_categories')->onDelete('cascade');
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
        Schema::dropIfExists('articles');
    }
}
