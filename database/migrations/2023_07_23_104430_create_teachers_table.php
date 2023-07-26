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
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id')->from(202020)->unique(); 
            $table->foreignId('class_room_id')->constrained('class_rooms')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('branch_id')->constrained('branches')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('surname');
            $table->string('phone_number')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('identity_number')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->date('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
