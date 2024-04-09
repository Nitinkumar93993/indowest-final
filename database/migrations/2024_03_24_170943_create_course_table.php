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
        Schema::create('course', function (Blueprint $table) {

            $table->id('course_id');
            $table->text('course_name');
            $table->text('course_desc')->nullable();
            $table->text('course_icon')->nullable();
            $table->text('course_image')->nullable();

            $table->text('course_heading')->nullable();
            $table->text('course_describe')->nullable();
            $table->text('course_heading_image')->nullable();

            $table->text('first_heading')->nullable();
            $table->text('first_paragraph')->nullable();
            $table->text('second_heading')->nullable();
            $table->text('second_paragraph')->nullable();
            $table->text('third_heading')->nullable();
            $table->text('third_paragraph')->nullable();
            $table->text('fourth_heading')->nullable();
            $table->text('fourth_paragraph')->nullable();
            $table->text('fifth_heading')->nullable();
            $table->text('fifth_paragraph')->nullable();
            $table->text('sixth_heading')->nullable();
            $table->text('sixth_paragraph')->nullable();
            $table->text('seventh_heading')->nullable();
            $table->text('seventh_paragraph')->nullable();
            $table->text('eight_heading')->nullable();
            $table->text('eight_paragraph')->nullable();
            $table->text('ninth_heading')->nullable();
            $table->text('ninth_paragraph')->nullable();
            $table->text('tenth_heading')->nullable();
            $table->text('tenth_paragraph')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course');
    }
};
