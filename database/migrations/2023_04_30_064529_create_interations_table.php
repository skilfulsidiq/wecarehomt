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
        Schema::create('interactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("young_people_id")->nullable()->constrained('young_people')->onDelete('cascade');
            $table->foreignId("staff_id")->nullable()->constrained('users')->onDelete('cascaded');
            $table->text("focus")->nullable();
            $table->text("goals")->nullable();
            $table->text("achievements")->nullable();
            $table->text("refection")->nullable();
            $table->string("slug")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interations');
    }
};
