<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KonstruksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data ke tabel layanan
        $alpw = DB::table('layanan')->insertGetId([
            'layanan' => 'konstruksi',
            'kode_layanan' => 'AL',
            'nama_layanan' => 'ARSITEKTUR LANSKAP DAN PERENCANAAN WILAYAH',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data ke tabel detail_layanan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Jasa Pengembangan Pemanfaatan Ruang',
                'kode_detail_layanan' => 'AL001',
                'layanan_id' => $alpw,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Pengembangan Wilayah',
                'kode_detail_layanan' => 'AL002',
                'layanan_id' => $alpw,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Pengembangan Perkotaan',
                'kode_detail_layanan' => 'AL003',
                'layanan_id' => $alpw,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Pengembangan Lingkungan Bangunan dan Lanskap',
                'kode_detail_layanan' => 'AL004',
                'layanan_id' => $alpw,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Menambahkan data ke tabel layanan
        $arsi = DB::table('layanan')->insertGetId([
            'layanan' => 'konstruksi',
            'kode_layanan' => 'AR',
            'nama_layanan' => 'ARSITEKTUR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data ke tabel detail_layanan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Jasa Arsitektural Bangunan Gedung Hunian dan Non Hunian',
                'kode_detail_layanan' => 'AR001',
                'layanan_id' => $arsi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Arsitektural Lainnya',
                'kode_detail_layanan' => 'AR002',
                'layanan_id' => $arsi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa desain interior pada bangunan gedung dan bangun sipil',
                'kode_detail_layanan' => 'AR003',
                'layanan_id' => $arsi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $pat = DB::table('layanan')->insertGetId([
            'layanan' => 'konstruksi',
            'kode_layanan' => 'AT',
            'nama_layanan' => 'PENGUJIAN DAN ANALISA TEKNIS',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data ke tabel detail_layanan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Jasa Pengujian dan Analisis Teknis Geologi, Geofisika, dan Geokimia',
                'kode_detail_layanan' => 'AT001',
                'layanan_id' => $pat,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Pengujian dan Analisis Teknis Komposisi dan Tingkat Kemurnian',
                'kode_detail_layanan' => 'AT002',
                'layanan_id' => $pat,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Pengujian Hasil Pekerjaan Konstruksi dan Fasilitas Laboraturium',
                'kode_detail_layanan' => 'AT003',
                'layanan_id' => $pat,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Pengujian dan Analisis Teknis Parameter Fisikal',
                'kode_detail_layanan' => 'AT004',
                'layanan_id' => $pat,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Pengujian dan Analisis Teknis Hidrolika, Hidrologi, dan Oceanography',
                'kode_detail_layanan' => 'AT005',
                'layanan_id' => $pat,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Pengujian dan Analisis Akustik dan vibrator Gedung Hunian dan Nonhunian',
                'kode_detail_layanan' => 'AT006',
                'layanan_id' => $pat,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Commissioning Proses Industrial',
                'kode_detail_layanan' => 'AT007',
                'layanan_id' => $pat,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $kit = DB::table('layanan')->insertGetId([
            'layanan' => 'konstruksi',
            'kode_layanan' => 'IT',
            'nama_layanan' => 'KONSULTASI ILMIAH DAN TEKNIS',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data ke tabel detail_layanan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Jasa Pembuatan Prospektus Geologi dan Geofisika',
                'kode_detail_layanan' => 'IT001',
                'layanan_id' => $kit,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Konsultasi Ilmiah dan Teknis Bawah Tanah',
                'kode_detail_layanan' => 'IT002',
                'layanan_id' => $kit,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Konsultasi Ilmiah dan Teknis Permukaan Tanah dan Pembuatan Peta',
                'kode_detail_layanan' => 'IT003',
                'layanan_id' => $kit,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Konsultasi Ilmiah dan Teknis Prasarana dan Sarana Umum',
                'kode_detail_layanan' => 'IT004',
                'layanan_id' => $kit,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Konsultasi Ilmiah dan Teknis Konstruksi Sistem Kendali Lalu Lintas',
                'kode_detail_layanan' => 'IT005',
                'layanan_id' => $kit,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Konsultasi Ilmiah dan Teknis Hidrolika, Hidrologi dan Oceanography',
                'kode_detail_layanan' => 'IT006',
                'layanan_id' => $kit,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $reka = DB::table('layanan')->insertGetId([
            'layanan' => 'konstruksi',
            'kode_layanan' => 'RK',
            'nama_layanan' => 'REKAYASA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data ke tabel detail_layanan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Nonhunian',
                'kode_detail_layanan' => 'RK001',
                'layanan_id' => $reka,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air',
                'kode_detail_layanan' => 'RK002',
                'layanan_id' => $reka,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Trasnportasi',
                'kode_detail_layanan' => 'RK003',
                'layanan_id' => $reka,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Rekayasa Pekerjaan Mekanikal Dalam Bangunan',
                'kode_detail_layanan' => 'RK004',
                'layanan_id' => $reka,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Rekayasa Lainnya',
                'kode_detail_layanan' => 'RK005',
                'layanan_id' => $reka,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $latetdanrekat = DB::table('layanan')->insertGetId([
            'layanan' => 'konstruksi',
            'kode_layanan' => 'RT',
            'nama_layanan' => 'LAYANAN TERPADU DAN REKAYASA TERPADU',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data ke tabel detail_layanan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Jasa Pelayanan Studi Investasi Infrastruktur',
                'kode_detail_layanan' => 'RT001',
                'layanan_id' => $latetdanrekat,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Rekayasa Konstruksi Pembangkit, Jaringan Transmisi, Gardu Induk, dan Distribusi Tenaga Listrik',
                'kode_detail_layanan' => 'RT002',
                'layanan_id' => $latetdanrekat,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Rekayasa Proses Industrial, Produksi, dan Fasilitas Produksi',
                'kode_detail_layanan' => 'RT003',
                'layanan_id' => $latetdanrekat,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
