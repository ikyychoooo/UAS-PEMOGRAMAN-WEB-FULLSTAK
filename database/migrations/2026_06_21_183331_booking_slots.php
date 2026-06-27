<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tabel ini memisahkan slot waktu dari tabel bookings.
     * Satu booking dapat memiliki beberapa slot (misal: booking untuk 2 hari berbeda
     * atau 2 sesi terpisah dalam 1 hari).
     *
     * CATATAN PENTING — Pencegahan double booking:
     * Query cek overlap harus dilakukan di application layer menggunakan
     * DB::transaction() + SELECT FOR UPDATE sebelum INSERT ke tabel ini.
     * Unique constraint di DB tidak cukup untuk menangani kasus overlap waktu.
     */
    public function up(): void
    {
        Schema::create('booking_slots', function (Blueprint $table) {
            $table->id();

            $table->foreignId('booking_id')
                  ->constrained('bookings')
                  ->cascadeOnDelete();

            $table->date('date')->comment('Tanggal penggunaan ruangan');
            $table->time('start_time')->comment('Jam mulai');
            $table->time('end_time')->comment('Jam selesai');

            $table->timestamps();

            // Composite index untuk efisiensi query cek ketersediaan
            // Digunakan saat cek: apakah room X pada tanggal Y jam Z sudah dibooking?
            // Catatan: room_id tidak ada di sini, join ke bookings untuk dapatkan room_id
            $table->index(['booking_id', 'date', 'start_time', 'end_time'],
                          'idx_slot_booking_schedule');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('booking_slots');
    }
};
