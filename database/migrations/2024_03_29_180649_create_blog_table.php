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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title');
            $table->string('blog_desc');
            $table->string('blog_italic');
            $table->string('first_paragraph');
            $table->string('second_paragraph');
            $table->string('third_paragraph');
            $table->string('fourth_paragraph');
            $table->string('fifth_paragraph');
            $table->string('sixth_paragraph');
            $table->string('seventh_paragraph');
            $table->string('eighth_paragraph');
            $table->string('ninth_paragraph');
            $table->string('tenth_paragraph');
            $table->string('eleventh_paragraph');
            $table->string('twelveth_paragraph');
            $table->string('thirteen_paragraph');
            $table->string('fourteen_paragraph');
            $table->string('fifteen_paragraph');
            $table->string('sixteen_paragraph');
            $table->string('seventeen_paragraph');
            $table->string('eighteen_paragraph');
            $table->string('nineteen_paragraph');
            $table->string('twenteen_paragraph');
            $table->string('first_images');
            $table->string('second_images');
            $table->string('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
