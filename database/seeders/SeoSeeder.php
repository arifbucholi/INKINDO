<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'page_type' => 'home',
                'content' => 'Ini adalah konten untuk halaman home.',
                'seo_title' => 'Home - Situs Resmi',
                'meta_description' => 'Deskripsi meta untuk halaman home.',
                'keywords' => 'home, situs resmi, halaman utama',
            ],
            [
                'page_type' => 'about',
                'content' => 'Ini adalah konten untuk halaman about.',
                'seo_title' => 'Tentang Kami - Situs Resmi',
                'meta_description' => 'Deskripsi meta untuk halaman about.',
                'keywords' => 'tentang kami, perusahaan, informasi',
            ],
            [
                'page_type' => 'services',
                'content' => 'Ini adalah konten untuk halaman services.',
                'seo_title' => 'Layanan Kami - Situs Resmi',
                'meta_description' => 'Deskripsi meta untuk halaman services.',
                'keywords' => 'layanan, produk, jasa',
            ],
            [
                'page_type' => 'news',
                'content' => 'Ini adalah konten untuk halaman news.',
                'seo_title' => 'Berita Terbaru - Situs Resmi',
                'meta_description' => 'Deskripsi meta untuk halaman berita.',
                'keywords' => 'berita, update, informasi terkini',
            ],
            [
                'page_type' => 'contact',
                'content' => 'Ini adalah konten untuk halaman contact.',
                'seo_title' => 'Hubungi Kami - Situs Resmi',
                'meta_description' => 'Deskripsi meta untuk halaman contact.',
                'keywords' => 'kontak, hubungi kami, informasi',
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
