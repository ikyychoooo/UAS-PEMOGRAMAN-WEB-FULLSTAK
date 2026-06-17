<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rooms extends Seeder
{
    public function run(): void
    {
        // Ambil ID kategori berdasarkan slug agar tidak hardcode angka
        $categories = DB::table('room_categories')
            ->pluck('id', 'slug');

        $rooms = [
            // ── Laboratorium Komputer (4 ruang) ──────────────────────────────
            [
                'name'        => 'Lab Komputer 1',
                'code'        => 'LAB-KOM-01',
                'category_id' => $categories['laboratorium-komputer'],
                'building'    => 'Gedung A',
                'floor'       => '1',
                'capacity'    => 40,
                'description' => 'Lab komputer utama dengan 40 unit PC untuk praktikum pemrograman dan jaringan.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '07:00:00',
                'close_time'  => '21:00:00',
            ],
            [
                'name'        => 'Lab Komputer 2',
                'code'        => 'LAB-KOM-02',
                'category_id' => $categories['laboratorium-komputer'],
                'building'    => 'Gedung A',
                'floor'       => '1',
                'capacity'    => 40,
                'description' => 'Lab komputer cadangan, tersedia untuk kelas paralel dan ujian praktik.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '07:00:00',
                'close_time'  => '21:00:00',
            ],
            [
                'name'        => 'Lab Jaringan',
                'code'        => 'LAB-NET-01',
                'category_id' => $categories['laboratorium-komputer'],
                'building'    => 'Gedung A',
                'floor'       => '2',
                'capacity'    => 30,
                'description' => 'Lab khusus praktikum jaringan komputer, dilengkapi perangkat router dan switch.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '07:00:00',
                'close_time'  => '20:00:00',
            ],
            [
                'name'        => 'Lab Multimedia',
                'code'        => 'LAB-MM-01',
                'category_id' => $categories['laboratorium-komputer'],
                'building'    => 'Gedung B',
                'floor'       => '1',
                'capacity'    => 25,
                'description' => 'Lab desain grafis dan multimedia, tersedia software Adobe dan tools kreatif lainnya.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '08:00:00',
                'close_time'  => '20:00:00',
            ],

            // ── Laboratorium Sains (2 ruang) ─────────────────────────────────
            [
                'name'        => 'Lab Kimia',
                'code'        => 'LAB-KIM-01',
                'category_id' => $categories['laboratorium-sains'],
                'building'    => 'Gedung C',
                'floor'       => '1',
                'capacity'    => 30,
                'description' => 'Lab kimia lengkap dengan alat titrasi, lemari asam, dan perlengkapan keselamatan.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '07:00:00',
                'close_time'  => '17:00:00',
            ],
            [
                'name'        => 'Lab Biologi',
                'code'        => 'LAB-BIO-01',
                'category_id' => $categories['laboratorium-sains'],
                'building'    => 'Gedung C',
                'floor'       => '2',
                'capacity'    => 30,
                'description' => 'Lab biologi dengan mikroskop, alat bedah preparat, dan koleksi spesimen.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '07:00:00',
                'close_time'  => '17:00:00',
            ],

            // ── Ruang Meeting (3 ruang) ───────────────────────────────────────
            [
                'name'        => 'Ruang Meeting Rektorat',
                'code'        => 'MEET-REK-01',
                'category_id' => $categories['ruang-meeting'],
                'building'    => 'Gedung Rektorat',
                'floor'       => '2',
                'capacity'    => 20,
                'description' => 'Ruang rapat resmi rektorat, dilengkapi proyektor, AC, dan meja konferensi.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '08:00:00',
                'close_time'  => '17:00:00',
            ],
            [
                'name'        => 'Ruang Meeting Fakultas A',
                'code'        => 'MEET-FAK-01',
                'category_id' => $categories['ruang-meeting'],
                'building'    => 'Gedung A',
                'floor'       => '3',
                'capacity'    => 15,
                'description' => 'Ruang diskusi dan koordinasi dosen Fakultas Teknik dan Ilmu Komputer.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '07:00:00',
                'close_time'  => '20:00:00',
            ],
            [
                'name'        => 'Ruang Meeting Fakultas B',
                'code'        => 'MEET-FAK-02',
                'category_id' => $categories['ruang-meeting'],
                'building'    => 'Gedung B',
                'floor'       => '3',
                'capacity'    => 15,
                'description' => 'Ruang diskusi dan koordinasi dosen Fakultas Ekonomi dan Bisnis.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '07:00:00',
                'close_time'  => '20:00:00',
            ],

            // ── Aula (1 ruang) ────────────────────────────────────────────────
            [
                'name'        => 'Aula Utama UNIPMA',
                'code'        => 'AULA-01',
                'category_id' => $categories['aula'],
                'building'    => 'Gedung Pusat',
                'floor'       => '1',
                'capacity'    => 500,
                'description' => 'Aula utama kampus untuk wisuda, seminar nasional, dan acara besar kampus.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '07:00:00',
                'close_time'  => '22:00:00',
            ],

            // ── Ruang Kelas (3 ruang) ─────────────────────────────────────────
            [
                'name'        => 'Ruang Kelas A101',
                'code'        => 'KELAS-A101',
                'category_id' => $categories['ruang-kelas'],
                'building'    => 'Gedung A',
                'floor'       => '1',
                'capacity'    => 40,
                'description' => 'Ruang kelas standar dengan whiteboard, proyektor, dan kursi lipat.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '07:00:00',
                'close_time'  => '21:00:00',
            ],
            [
                'name'        => 'Ruang Kelas B201',
                'code'        => 'KELAS-B201',
                'category_id' => $categories['ruang-kelas'],
                'building'    => 'Gedung B',
                'floor'       => '2',
                'capacity'    => 35,
                'description' => 'Ruang kelas dengan layout teatrikal, cocok untuk presentasi dan seminar kecil.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '07:00:00',
                'close_time'  => '21:00:00',
            ],
            [
                'name'        => 'Ruang Kelas C301',
                'code'        => 'KELAS-C301',
                'category_id' => $categories['ruang-kelas'],
                'building'    => 'Gedung C',
                'floor'       => '3',
                'capacity'    => 45,
                'description' => 'Ruang kelas terbesar di Gedung C, tersedia untuk kelas gabungan.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '07:00:00',
                'close_time'  => '21:00:00',
            ],

            // ── Studio (2 ruang) ──────────────────────────────────────────────
            [
                'name'        => 'Studio Rekaman',
                'code'        => 'STUDIO-REC-01',
                'category_id' => $categories['studio'],
                'building'    => 'Gedung B',
                'floor'       => '1',
                'capacity'    => 10,
                'description' => 'Studio rekaman audio profesional untuk podcast, dubbing, dan produksi musik.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '08:00:00',
                'close_time'  => '20:00:00',
            ],
            [
                'name'        => 'Studio Foto & Video',
                'code'        => 'STUDIO-VID-01',
                'category_id' => $categories['studio'],
                'building'    => 'Gedung B',
                'floor'       => '1',
                'capacity'    => 15,
                'description' => 'Studio foto dan video dengan green screen, lighting profesional, dan kamera DSLR.',
                'image'       => null,
                'is_active'   => true,
                'open_time'   => '08:00:00',
                'close_time'  => '20:00:00',
            ],
        ];

        DB::table('rooms')->insert(
            collect($rooms)->map(fn($room) => array_merge($room, [
                'created_at' => now(),
                'updated_at' => now(),
            ]))->toArray()
        );
    }
}
