<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name');
            $table->string('fav_icon');
            $table->string('logo_header');
            $table->string('logo_footer');
            $table->string('phone');
            $table->string('address');
            $table->text('g_maps_code');
            $table->string('instagram_link');
            $table->string('facebook_link');
            $table->string('youtube_link');
            $table->text('about_us');
            $table->string('contact_email');
            $table->text('scripts_head');
            $table->text('scripts_body');
            $table->text('css_head');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
