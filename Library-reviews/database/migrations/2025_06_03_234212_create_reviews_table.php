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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text("review");
            $table->unsignedBigInteger("book_id");
            $table->unsignedTinyInteger('rating');
            $table->timestamps();

            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade'); //Wen a book is deleted, delete its reviews
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
