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
        Schema::create('lesson_content_texts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('lesson_id')->constrained('lessons')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('lesson_content_id')->constrained('lesson_contents')->onUpdate('cascade')->onDelete('cascade');
            $table->text('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_content_texts');
    }
};
