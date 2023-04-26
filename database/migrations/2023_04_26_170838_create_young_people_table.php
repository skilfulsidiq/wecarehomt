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
        Schema::create('young_people', function (Blueprint $table) {
            $table->id();
             $table->foreignId("branch_id")->nullable()->constrained('branches')->onDelete('cascade');
              $table->string("firstname");
             $table->string("lastname");
             $table->string("email")->nullable();
             $table->string("phone")->nullable();
             $table->string("dob")->nullable();
             $table->string("gender")->nullable();
             $table->string("disability")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('young_people');
    }
};
