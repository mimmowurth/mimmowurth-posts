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
        Schema::create('Images', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('articles_id')->nullable();
             $table->foreign('articles_id')->references('id')->on('articles')->onDelete('cascade');
             $table->string('path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};