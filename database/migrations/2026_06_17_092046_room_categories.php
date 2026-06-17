<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('room_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nama kategori, misal: Laboratorium, Ruang Meeting, Aula');
            $table->string('slug')->unique()->comment('URL-friendly name, misal: laboratorium, ruang-meeting');
            $table->string('icon')->nullable()->comment('Icon class atau path, misal: fa-flask');
            $table->string('color')->nullable()->comment('Warna hex untuk UI, misal: #3B82F6');
            $table->text('description')->nullable();

            // Aturan booking khusus per kategori
            $table->unsignedSmallInteger('max_booking_days_ahead')
                  ->default(14)
                  ->comment('Maksimal berapa hari ke depan bisa booking');
            $table->unsignedSmallInteger('max_duration_hours')
                  ->default(4)
                  ->comment('Maksimal durasi booking dalam jam');
            $table->unsignedSmallInteger('min_duration_minutes')
                  ->default(60)
                  ->comment('Minimal durasi booking dalam menit');
            $table->boolean('requires_approval')
                  ->default(true)
                  ->comment('Apakah butuh persetujuan admin atau langsung approved');

            $table->boolean('is_active')->default(true);
            $table->unsignedSmallInteger('sort_order')
                  ->default(0)
                  ->comment('Urutan tampil di UI');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('room_categories');
    }
};
