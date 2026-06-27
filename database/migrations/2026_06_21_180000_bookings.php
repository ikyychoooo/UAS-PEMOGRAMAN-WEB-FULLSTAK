<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            // Nomor referensi unik untuk booking (misal: BK-2025-0001)
            $table->string('booking_number')->unique();

            $table->foreignId('user_id')
                  ->constrained('users')
                  ->restrictOnDelete()
                  ->comment('Peminjam');

            $table->foreignId('room_id')
                  ->constrained('rooms')
                  ->restrictOnDelete();

            $table->string('purpose')->comment('Keperluan/tujuan peminjaman');
            $table->text('notes')->nullable()->comment('Catatan tambahan dari peminjam');

            $table->unsignedSmallInteger('participant_count')
                  ->default(1)
                  ->comment('Jumlah peserta');

            /**
             * Status alur booking:
             *   pending   → menunggu review admin
             *   approved  → disetujui, booking aktif
             *   rejected  → ditolak admin
             *   cancelled → dibatalkan peminjam
             *   expired   → melewati waktu tanpa konfirmasi (diproses Laravel Scheduler)
             *   completed → selesai digunakan
             */
            $table->enum('status', [
                'pending',
                'approved',
                'rejected',
                'cancelled',
                'expired',
                'completed',
            ])->default('pending');

            // Timestamps otomatis untuk status tertentu
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->timestamp('expired_at')->nullable()
                  ->comment('Waktu deadline konfirmasi sebelum auto-expire');

            $table->timestamps();
            $table->softDeletes();

            // Index untuk query yang sering: cek status + ruang + user
            $table->index(['room_id', 'status']);
            $table->index(['user_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
