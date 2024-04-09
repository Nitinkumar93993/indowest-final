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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // If you want to associate comments with users
            $table->unsignedBigInteger('parent_id')->nullable(); // For storing parent comment ID for replies
            $table->text('comment');
            $table->string('author');
            $table->string('email');
            $table->string('url')->nullable();
            $table->boolean('cookies_consent')->default(false);
            $table->timestamps();

            // Define foreign key constraint for parent comment ID
            $table->foreign('parent_id')->references('id')->on('comments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};

