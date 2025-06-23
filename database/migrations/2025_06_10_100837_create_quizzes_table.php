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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'user_id')->constrained(table: 'users')->cascadeOnDelete();
            $table->string(column: "materi");
            $table->integer(column: "nilai");
            $table->enum(column: "status", allowed: ["lulus", "tidak lulus"]);
            $table->dateTime(column: "waktu_mulai");
            $table->dateTime(column: "waktu_selesai");
            $table->json(column: "jawaban")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
