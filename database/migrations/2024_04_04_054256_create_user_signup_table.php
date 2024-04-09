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
        Schema::create('user_signup', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('phoneNumber');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('useremail');
            $table->date('userdob');
            $table->string('referance_platform');
            $table->string('userCity');
            $table->string('Interested_Services');
            $table->string('password');
            $table->string('confirmPassword')->nullable();
            $table->string('UniqueID')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_signup');
    }
};
