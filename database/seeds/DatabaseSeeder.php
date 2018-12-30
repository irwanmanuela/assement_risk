<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_data_laporan')->insert([
        [
            'laporan_type' => 'PENDAHULUAN',
            'activity' => 'Mobilisasi Peralatan',
        ],
        [
            'laporan_type' => 'PENDAHULUAN',
            'activity' => 'Mobilisasi Tenaga Ahli',
        ],
        [
            'laporan_type' => 'PENDAHULUAN',
            'activity' => 'Mobilisasi Tenaga Pendukung',
        ],
        [
            'laporan_type' => 'PENDAHULUAN',
            'activity' => 'Menyusun Rencana Kerja',
        ],
        [
            'laporan_type' => 'PENDAHULUAN',
            'activity' => 'Menyusun Metodologi',
        ],
        [
            'laporan_type' => 'PENDAHULUAN',
            'activity' => 'Mengumpulkan Data dan Informasi Awal',
        ],
        [
            'laporan_type' => 'PENDAHULUAN',
            'activity' => 'Menyiapkan Laporan Pendahuluan',
        ],
        [
            'laporan_type' => 'ANTARA',
            'activity' => 'Survei Observasi Lapangan',
        ],
        [
            'laporan_type' => 'ANTARA',
            'activity' => 'Survei Instansional',
        ],
        [
            'laporan_type' => 'ANTARA',
            'activity' => 'Analisis Strukture Ruang',
        ],
        [
            'laporan_type' => 'ANTARA',
            'activity' => 'Analisis Pola Ruang',
        ],
        [
            'laporan_type' => 'ANTARA',
            'activity' => 'Analisis Blok Pemanfaatan Ruang',
        ],
        [
            'laporan_type' => 'ANTARA',
            'activity' => 'Analisis Pelaksanaan Pembangunan Kawasan',
        ],
        [
            'laporan_type' => 'ANTARA',
            'activity' => 'Perumusan masalah potensi dan peluang',
        ],
        [
            'laporan_type' => 'DRAFT_AKHIR',
            'activity' => 'Perumusan Tujuan Pengembangan Kawasan',
        ],
        [
            'laporan_type' => 'DRAFT_AKHIR',
            'activity' => 'Perumusan  Konsep dan strategi pengembangan',
        ],
        [
            'laporan_type' => 'DRAFT_AKHIR',
            'activity' => 'Perumusan Rencana Strukture dan Pola Ruang',
        ],
        [
            'laporan_type' => 'DRAFT_AKHIR',
            'activity' => 'Perumusan Pedoman Pelaksanaan Pembangunan',
        ],
        [
            'laporan_type' => 'DRAFT_AKHIR',
            'activity' => 'Perumusan Mekanisme Pengendalian',
        ],
        [
            'laporan_type' => 'DRAFT_AKHIR',
            'activity' => 'Menyusun Indikasi Program',
        ],
        [
            'laporan_type' => 'AKHIR',
            'activity' => 'Penyempurnaan RDTR'
        ],
        [
            'laporan_type' => 'AKHIR',
            'activity' => 'Penyempurnaan Zoning Regulation'
        ],
        [
            'laporan_type' => 'KHUSUS',
            'activity' => 'ALBUM PETA'
        ],
    ]);


        DB::table('projects')->insert([
            [
                'id' => '1',
                'user_id' => '1',
                'name' => 'Mobilisasi Peralatan1',
                'type_project' => 'Engineering and Management',
                'notes' => '-',
            ],
            [
                'user_id' => '1',
                'name' => 'Mobilisasi Peralatan2',
                'type_project' => 'Engineering and Management',
                'notes' => '-',
            ],
            [
                'user_id' => '1',
                'name' => 'Mobilisasi Peralatan3',
                'type_project' => 'Engineering and Management',
                'notes' => '-',
            ],
            [
                'user_id' => '1',
                'name' => 'Mobilisasi Peralatan4',
                'type_project' => 'Engineering and Management',
                'notes' => '-',
            ],
            [
                'user_id' => '1',
                'name' => 'Mobilisasi Peralatan5',
                'type_project' => 'Engineering and Management',
                'notes' => '-',
            ],
            [
                'user_id' => '1',
                'name' => 'Mobilisasi Peralatan6',
                'type_project' => 'Engineering and Management',
                'notes' => '-',
            ],
            [
                'user_id' => '1',
                'name' => 'Mobilisasi Peralatan7',
                'type_project' => 'Engineering and Management',
                'notes' => '-',
            ],
            [
                'user_id' => '1',
                'name' => 'Mobilisasi Peralatan8',
                'type_project' => 'Engineering and Management',
                'notes' => '-',
            ],
            [
                'user_id' => '1',
                'name' => 'Mobilisasi Peralatan9',
                'type_project' => 'Engineering and Management',
                'notes' => '-',
            ],
            [
                'user_id' => '1',
                'name' => 'Mobilisasi Peralatan10',
                'type_project' => 'Engineering and Management',
                'notes' => '-',
            ],
        ]);
    }
}
