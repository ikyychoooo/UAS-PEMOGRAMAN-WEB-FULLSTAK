<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique()->comment('Kode ruangan, misal: LAB-01, MEET-A');
            $table->foreignId('category_id')
                  ->constrained('room_categories')
                  ->restrictOnDelete()
                  ->comment('Kategori ruangan (FK ke room_categories)');
            $table->string('building')->nullable()->comment('Gedung/Blok lokasi ruangan');
            $table->string('floor')->nullable()->comment('Lantai');
            $table->unsignedSmallInteger('capacity')->default(0)->comment('Kapasitas orang');
            $table->text('description')->nullable();
            $table->string('image')->nullable()->comment('Path foto ruangan');
            $table->boolean('is_active')->default(true)->comment('Ruangan aktif/nonaktif');

            // Jam operasional default ruangan
            $table->time('open_time')->default('07:00:00');
            $table->time('close_time')->default('21:00:00');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
