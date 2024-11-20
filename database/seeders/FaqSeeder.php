<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faq')->insert([
            [
                'question' => 'Bagaimana alur atau tahapan pengurusan Sertifikat Badan Usaha (SBU) dari awal hingga akhir?',
                'answer' => 'Untuk pengurusan Sertifikat Badan Usaha (SBU) dapat dilihat pada portal OSS (Online Single Submission)',
            ],
            [
                'question' => 'Apakah kegiatan yang diselenggarakan oleh INKINDO hanya dapat diikuti oleh anggota?',
                'answer' => 'Tidak semua kegiatan eksklusif untuk anggota. Beberapa kegiatan seperti pelatihan dan webinar terbuka untuk non-anggota.',
            ],
            [
                'question' => 'Apakah INKINDO menyediakan informasi terkait proyek-proyek tertentu?',
                'answer' => 'Tidak, INKINDO tidak menyediakan informasi mengenai proyek-proyek tertentu.',
            ],
            [
                'question' => 'Bagaimana cara menghubungi layanan pelanggan INKINDO?',
                'answer' => 'Anda dapat menghubungi customer service melalui WhatsApp di nomor +62 856-4544-1171.',
            ]
        ]);
    }
}
