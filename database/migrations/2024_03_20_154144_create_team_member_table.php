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
        Schema::create('team_member', function (Blueprint $table) {
            $table->id();
            $table->string('member_name');
            $table->string('member_image');
            $table->string('member_title');
            $table->string('member_since');

            $table->string('member_contact');
            $table->string('member_email');
            $table->string('member_website');
            $table->string('member_fax');
            $table->string('member_skill');

            $table->string('undefine');
            $table->string('about_me');
            $table->string('qualification');
            $table->string('achivement');
           
            $table->string('twitter_url');
            $table->string('facebook_url');
            $table->string('instagram_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_member');
    }
};
