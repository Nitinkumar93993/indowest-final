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
        Schema::create('add_subadmin', function (Blueprint $table) {
            $table->id();

            $table->string('sbname');
            $table->string('sbfile');
            $table->string('sbemail');
            $table->string('sbusername');
            $table->string('sbpassword');
            $table->string('sbAdd');
            $table->string('sbEdit');
            $table->string('sbView');
            $table->string('sbDelete');
            $table->string('blogAdd');
            $table->string('blogEdit');
            $table->string('blogView');
            $table->string('blogDelete');
            $table->string('testimonialAdd');
            $table->string('testimonialEdit');
            $table->string('testimonialView');
            $table->string('testimonialDelete');
            $table->string('courseAdd');
            $table->string('courseEdit');
            $table->string('courseView');
            $table->string('courseDelete');
            $table->string('teamAdd');
            $table->string('teamEdit');
            $table->string('teamView');
            $table->string('teamDelete');
            $table->string('eventAdd');
            $table->string('eventEdit');
            $table->string('eventView');
            $table->string('eventDelete');

            $table->string('oneAdd');
            $table->string('oneEdit');
            $table->string('oneView');
            $table->string('oneDelete');

            $table->string('twoAdd');
            $table->string('twoEdit');
            $table->string('twoView');
            $table->string('twoDelete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_subadmin');
    }
};
