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


        ];

        // Insert data into the news table
        foreach ($newsData as $news) {
            News::create($news);
        }
    }
}
