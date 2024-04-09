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
        Schema::create('bookrealitytest', function (Blueprint $table) {
            $table->id();
            $table->string('test_type');
            $table->string('test_vanue');
            $table->date('testDate');
            $table->time('testTimeStart');
            $table->time('testTimeEnd');
            $table->string('testCharges');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookrealitytest');
    }
};
