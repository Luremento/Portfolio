<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->json('technologies'); // Массив технологий, напр. ["React", "Node.js"]
            $table->string('main_tech'); // Основная технология для бейджа
            $table->string('image')->nullable(); // Ссылка на изображение или эмодзи
            $table->string('link')->nullable(); // Ссылка на проект
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};