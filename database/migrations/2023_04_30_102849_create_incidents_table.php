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
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->foreignId("young_people_id")->nullable()->constrained('young_people')->onDelete('cascade');
            $table->foreignId("staff_id")->nullable()->constrained('users')->onDelete('cascaded');
            $table->string("date")->nullable();
            $table->string("incident")->nullable();
            $table->text("location")->nullable();
            $table->text("consequence")->nullable();
            $table->text("action")->nullable();
            $table->string("slug")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};



