<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {
            $table->text('review_link');
            $table->string('project_photo');
            $table->unsignedTinyInteger('stars')->default(5);
        });
    }

    public function down(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {
            $table->dropColumn('review_link');
            $table->dropColumn('project_photo');
            $table->dropColumn('stars');
        });
    }
};
