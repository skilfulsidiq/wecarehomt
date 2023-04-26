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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId("branch_id")->nullable()->constrained('branches')->onDelete('cascade');
             $table->string("firstname");
             $table->string("lastname");
             $table->string("email")->unique();
             $table->string("phone")->nullable();
             $table->string("password");
             $table->string("last_login_ip")->nullable();
             $table->string("last_login_at")->nullable();
             $table->string("remember_me")->nullable();
            $table->string("slug")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
