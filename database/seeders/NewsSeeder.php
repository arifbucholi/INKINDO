<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsData = [
            [
                'title' => 'Proyek Infrastruktur Nasional Mendapat Perhatian Pemerintah',
                'content' => 'Pemerintah Indonesia baru saja mengumumkan serangkaian proyek infrastruktur yang bertujuan untuk mempercepat pembangunan ekonomi di daerah-daerah tertinggal. Proyek ini mencakup pembangunan jalan, jembatan, dan fasilitas umum yang diharapkan dapat meningkatkan aksesibilitas dan mobilitas masyarakat.',
                'image' => 'uploads/images/infrastruktur1.jpg',
            ],
            [
                'title' => 'INKINDO Adakan Pelatihan untuk Meningkatkan Kompetensi Konsultan',
                'content' => 'INKINDO kembali mengadakan pelatihan yang berfokus pada pengembangan kompetensi konsultan di bidang konstruksi dan non-konstruksi. Acara ini dihadiri oleh lebih dari 100 peserta yang antusias untuk meningkatkan kemampuan teknis dan manajerial mereka. Program pelatihan ini mendapat sambutan hangat dari para peserta.',
                'image' => 'uploads/images/pelatihan1.jpg',
            ],
            [
                'title' => 'Kolaborasi Antara INKINDO dan Kementerian PUPR',
                'content' => 'INKINDO resmi menjalin kerjasama dengan Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR) dalam rangka memperkuat kualitas proyek konstruksi di Indonesia. Kolaborasi ini mencakup penyediaan tenaga ahli, serta dukungan teknis dalam berbagai proyek infrastruktur nasional.',
                'image' => 'uploads/images/kolaborasi1.jpg',
            ],
        ];

        // Insert data into the news table
        foreach ($newsData as $news) {
            News::create($news);
        }
    }
}
