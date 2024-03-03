<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('genre_id');
            $table->foreignId('author_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('title');
            $table->string('slug')->unique();
            $table->integer('post_view')->default(0);
            $table->text('excerpt');
            $table->text('body');
            $table->string('image')->nullable();
            $table->timestamp('published_at')->default(now())->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
