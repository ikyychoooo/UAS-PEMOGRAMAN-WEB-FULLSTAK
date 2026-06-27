<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tabel untuk admin memblokir ruangan pada tanggal/jam tertentu.
     * Contoh: maintenance, acara kampus, libur.
     * Booking tidak bisa dibuat jika berbenturan dengan entri di tabel ini.
     */
    public function up(): void
    {
        Schema::create('room_unavailabilities', function (Blueprint $table) {
            $table->id();

            $table->foreignId('room_id')
                  ->constrained('rooms')
                  ->cascadeOnDelete();

            $table->foreignId('created_by')
                  ->constrained('users')
                  ->restrictOnDelete()
                  ->comment('Admin yang memblokir');

            $table->date('date');
            $table->time('start_time')->nullable()
                  ->comment('NULL berarti blokir seharian penuh');
            $table->time('end_time')->nullable();

            $table->string('reason')->comment('Alasan pemblokiran');

            $table->timestamps();

            $table->index(['room_id', 'date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('room_unavailabilities');
    }
};
