<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Histori semua aksi approval/rejection/cancellation.
     * Berguna untuk audit trail — siapa melakukan apa dan kapan.
     */
    public function up(): void
    {
        Schema::create('booking_approvals', function (Blueprint $table) {
            $table->id();

            $table->foreignId('booking_id')
                  ->constrained('bookings')
                  ->cascadeOnDelete();

            $table->foreignId('acted_by')
                  ->constrained('users')
                  ->restrictOnDelete()
                  ->comment('Admin/user yang melakukan aksi');

            $table->enum('action', [
                'submitted',   // Peminjam mengajukan booking
                'approved',    // Admin menyetujui
                'rejected',    // Admin menolak
                'cancelled',   // Peminjam/admin membatalkan
                'expired',     // Sistem menandai expired (acted_by = admin/system user)
                'completed',   // Admin/sistem menandai selesai
            ]);

            $table->text('remarks')->nullable()
                  ->comment('Alasan penolakan atau catatan admin');

            $table->timestamp('acted_at')->useCurrent();
            $table->timestamps();

            $table->index(['booking_id', 'acted_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('booking_approvals');
    }
};
