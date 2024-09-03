<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('meta_description');
            $table->string('meta_image');
            $table->text('home_page_description');
            $table->string('home_page_image');
            $table->boolean('show_on_home_page');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('client_name')->nullable();
            $table->string('project_type');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
