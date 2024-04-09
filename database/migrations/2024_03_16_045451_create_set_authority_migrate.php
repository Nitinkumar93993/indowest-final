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
        Schema::create('set_authority_migrate', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('user_image', 250);
            $table->integer('contact');
            $table->string('auth_email');
            $table->string('username', 100);
            $table->string('password', 255);
            $table->json('set_permission');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('set_authority_migrate');
    }
};
