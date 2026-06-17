<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class roomcategory extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name'                   => 'Laboratorium Komputer',
                'slug'                   => 'laboratorium-komputer',
                'icon'                   => 'fa-desktop',
                'color'                  => '#3B82F6',
                'description'            => 'Ruang laboratorium komputer untuk praktikum dan kegiatan akademik berbasis teknologi informasi.',
                'max_booking_days_ahead' => 14,
                'max_duration_hours'     => 4,
                'min_duration_minutes'   => 60,
                'requires_approval'      => true,
                'is_active'              => true,
                'sort_order'             => 1,
            ],
            [
                'name'                   => 'Laboratorium Sains',
                'slug'                   => 'laboratorium-sains',
                'icon'                   => 'fa-flask',
                'color'                  => '#10B981',
                'description'            => 'Ruang laboratorium untuk kegiatan praktikum sains, kimia, fisika, dan biologi.',
                'max_booking_days_ahead' => 14,
                'max_duration_hours'     => 6,
                'min_duration_minutes'   => 90,
                'requires_approval'      => true,
                'is_active'              => true,
                'sort_order'             => 2,
            ],
            [
                'name'                   => 'Ruang Meeting',
                'slug'                   => 'ruang-meeting',
                'icon'                   => 'fa-handshake',
                'color'                  => '#F59E0B',
                'description'            => 'Ruang pertemuan untuk rapat, diskusi kelompok, dan koordinasi antar unit.',
                'max_booking_days_ahead' => 30,
                'max_duration_hours'     => 3,
                'min_duration_minutes'   => 30,
                'requires_approval'      => false,
                'is_active'              => true,
                'sort_order'             => 3,
            ],
            [
                'name'                   => 'Aula',
                'slug'                   => 'aula',
                'icon'                   => 'fa-building',
                'color'                  => '#8B5CF6',
                'description'            => 'Ruang serbaguna berkapasitas besar untuk seminar, wisuda, dan acara resmi kampus.',
                'max_booking_days_ahead' => 60,
                'max_duration_hours'     => 10,
                'min_duration_minutes'   => 120,
                'requires_approval'      => true,
                'is_active'              => true,
                'sort_order'             => 4,
            ],
            [
                'name'                   => 'Ruang Kelas',
                'slug'                   => 'ruang-kelas',
                'icon'                   => 'fa-chalkboard-teacher',
                'color'                  => '#EC4899',
                'description'            => 'Ruang kelas standar untuk kegiatan belajar mengajar di luar jadwal reguler.',
                'max_booking_days_ahead' => 14,
                'max_duration_hours'     => 4,
                'min_duration_minutes'   => 50,
                'requires_approval'      => false,
                'is_active'              => true,
                'sort_order'             => 5,
            ],
            [
                'name'                   => 'Studio',
                'slug'                   => 'studio',
                'icon'                   => 'fa-camera',
                'color'                  => '#EF4444',
                'description'            => 'Ruang studio untuk produksi konten, rekaman audio/video, dan kegiatan kreatif.',
                'max_booking_days_ahead' => 21,
                'max_duration_hours'     => 5,
                'min_duration_minutes'   => 60,
                'requires_approval'      => true,
                'is_active'              => true,
                'sort_order'             => 6,
            ],
        ];

        DB::table('room_categories')->insert(
            collect($categories)->map(fn($cat) => array_merge($cat, [
                'created_at' => now(),
                'updated_at' => now(),
            ]))->toArray()
        );
    }
}
