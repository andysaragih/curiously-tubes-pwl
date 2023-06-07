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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->text("answer");
            $table->string("gambar")->nullable();
            $table->foreignId("user_id")->constrained("users")->onUpdate("CASCADE")->onDelete("CASCADE");
            $table->foreignId("question_id")->constrained("questions")->onUpdate("CASCADE")->onDelete("CASCADE");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
