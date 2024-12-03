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
                'seo_title' => 'INKINDO Jawa Timur',
                'content' => 'Ini adalah konten untuk halaman home.',
                'meta_description' => 'Deskripsi meta untuk halaman home.',
                'keywords' => 'home, situs resmi, halaman utama',
            ],
            [
                'page_type' => 'profil',
                'seo_title' => 'Profil INKINDO',
                'content' => 'Ini adalah konten untuk halaman about.',
                'meta_description' => 'Deskripsi meta untuk halaman about.',
                'keywords' => 'tentang kami, perusahaan, informasi',
            ],
            [
                'page_type' => 'alur',
                'seo_title' => 'Alur INKINDO',
                'content' => 'Ini adalah konten untuk halaman services.',
                'meta_description' => 'Deskripsi meta untuk halaman services.',
                'keywords' => 'layanan, produk, jasa',
            ],
            [
                'page_type' => 'layanan',
                'seo_title' => 'Layanan INKINDO',
                'content' => 'Ini adalah konten untuk halaman news.',
                'meta_description' => 'Deskripsi meta untuk halaman berita.',
                'keywords' => 'berita, update, informasi terkini',
            ],
            [
                'page_type' => 'berita',
                'seo_title' => 'Berita INKINDO',
                'content' => 'Ini adalah konten untuk halaman contact.',
                'meta_description' => 'Deskripsi meta untuk halaman contact.',
                'keywords' => 'kontak, hubungi kami, informasi',
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
