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
        Schema::create('answer_replies', function (Blueprint $table) {
            $table->id();
            $table->text("reply");
            $table->foreignId("user_id")->constrained("users")->onUpdate("CASCADE")->onDelete("CASCADE");
            $table->foreignId("answer_id")->constrained("answers")->onUpdate("CASCADE")->onDelete("CASCADE");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_replies');
    }
};
