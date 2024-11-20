<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NonKonstruksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data ke tabel layanan untuk Non-Konstruksi
        $layananIdNonKonstruksi = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '1.01',
            'nama_layanan' => 'PENGEMBANGAN PERTANIAN DAN PEDESAAN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Prasarana Sosial dan Pengembangan/Partisipasi Masyarakat',
                'kode_detail_layanan' => '1.01.01',
                'layanan_id' => $layananIdNonKonstruksi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Kredit dan Kelembagaan Pertanian',
                'kode_detail_layanan' => '1.01.02',
                'layanan_id' => $layananIdNonKonstruksi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Perkebunan dan Mekanisasi Pertanian',
                'kode_detail_layanan' => '1.01.03',
                'layanan_id' => $layananIdNonKonstruksi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Pembibitan',
                'kode_detail_layanan' => '1.01.04',
                'layanan_id' => $layananIdNonKonstruksi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Pengendala Hama/Penyakit Tanaman',
                'kode_detail_layanan' => '1.01.05',
                'layanan_id' => $layananIdNonKonstruksi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Peternakan',
                'kode_detail_layanan' => '1.01.06',
                'layanan_id' => $layananIdNonKonstruksi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Kehutanan',
                'kode_detail_layanan' => '1.01.07',
                'layanan_id' => $layananIdNonKonstruksi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Perikanan',
                'kode_detail_layanan' => '1.01.08',
                'layanan_id' => $layananIdNonKonstruksi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Tanaman Keras, Tanaman Pangan, dan Produk Tanaman Lain',
                'kode_detail_layanan' => '1.01.09',
                'layanan_id' => $layananIdNonKonstruksi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Konservasi dan Penghijauan',
                'kode_detail_layanan' => '1.01.10',
                'layanan_id' => $layananIdNonKonstruksi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Sub bidang Pengembangan Pertanian dan Perdesaan Lainnya',
                'kode_detail_layanan' => '1.01.99',
                'layanan_id' => $layananIdNonKonstruksi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $transport = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '1.02',
            'nama_layanan' => 'TRANSPORTASI',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Pengembangan Sarana Transportasi',
                'kode_detail_layanan' => '1.02.01',
                'layanan_id' => $transport,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Legilasi/Peraturan Bidang Transportasi',
                'kode_detail_layanan' => '1.02.02',
                'layanan_id' => $transport,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Usaha Jasa Angkutan',
                'kode_detail_layanan' => '1.02.03',
                'layanan_id' => $transport,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Sub-bidang Transportasi Lainnya',
                'kode_detail_layanan' => '1.02.99',
                'layanan_id' => $transport,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $telematika = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '1.03',
            'nama_layanan' => 'TELEMATIKA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Telekomunikasi Darat',
                'kode_detail_layanan' => '1.03.01',
                'layanan_id' => $telematika,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Telekomunikasi Satelit',
                'kode_detail_layanan' => '1.03.02',
                'layanan_id' => $telematika,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Perangkat Keras',
                'kode_detail_layanan' => '1.03.03',
                'layanan_id' => $telematika,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Konten',
                'kode_detail_layanan' => '1.03.04',
                'layanan_id' => $telematika,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Aplikasi/Perangkat Lunak',
                'kode_detail_layanan' => '1.03.05',
                'layanan_id' => $telematika,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Sub-bidang Telematika Lainnya',
                'kode_detail_layanan' => '1.03.99',
                'layanan_id' => $telematika,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $perindustriandandagang = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '1.05',
            'nama_layanan' => 'PERINDUSTRIAN DAN PERDAGANGAN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Perindustrian dan Perdagangan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Perindustrian',
                'kode_detail_layanan' => '1.05.01',
                'layanan_id' => $perindustriandandagang,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Hasil-hasil Industri, Pola Perdagangan dan Pemasaran',
                'kode_detail_layanan' => '1.05.02',
                'layanan_id' => $perindustriandandagang,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Agroindustri',
                'kode_detail_layanan' => '1.05.03',
                'layanan_id' => $perindustriandandagang,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Industri Tekstil dan Barang Jadi dari Tekstil',
                'kode_detail_layanan' => '1.05.04',
                'layanan_id' => $perindustriandandagang,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Industri Bahan Kimia',
                'kode_detail_layanan' => '1.05.05',
                'layanan_id' => $perindustriandandagang,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Industri Karet dan Plastik',
                'kode_detail_layanan' => '1.05.06',
                'layanan_id' => $perindustriandandagang,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Industri Kulit dan Barang Jadi dari Kulit',
                'kode_detail_layanan' => '1.05.07',
                'layanan_id' => $perindustriandandagang,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Industri Mineral Non-Logam',
                'kode_detail_layanan' => '1.05.08',
                'layanan_id' => $perindustriandandagang,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Industri Logam Dasar',
                'kode_detail_layanan' => '1.05.09',
                'layanan_id' => $perindustriandandagang,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Produk Logam',
                'kode_detail_layanan' => '1.05.10',
                'layanan_id' => $perindustriandandagang,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Mesin dan Perlengkapannya',
                'kode_detail_layanan' => '1.05.11',
                'layanan_id' => $perindustriandandagang,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Perlengkapannya',
                'kode_detail_layanan' => '1.05.12',
                'layanan_id' => $perindustriandandagang,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Industri Perkapalan',
                'kode_detail_layanan' => '1.05.13',
                'layanan_id' => $perindustriandandagang,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Sub-bidang Perindustrian dan Perdagangan Lainnya',
                'kode_detail_layanan' => '1.05.99',
                'layanan_id' => $perindustriandandagang,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $pertambangan = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '1.06',
            'nama_layanan' => 'PERTAMBANGAN DAN ENERGI',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Pertambangan dan Energi
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Ekonomi dan Konversi Energi',
                'kode_detail_layanan' => '1.06.01',
                'layanan_id' => $pertambangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Minyak dan Gas',
                'kode_detail_layanan' => '1.06.02',
                'layanan_id' => $pertambangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Batubara, Lignite dan Anthracite',
                'kode_detail_layanan' => '1.06.03',
                'layanan_id' => $pertambangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Ekonomi Pemasaran dan Eksplorasi Mineral',
                'kode_detail_layanan' => '1.06.04',
                'layanan_id' => $pertambangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Teknologi Mineral',
                'kode_detail_layanan' => '1.06.05',
                'layanan_id' => $pertambangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Komoditi dan Eksploitasi Mineral',
                'kode_detail_layanan' => '1.06.06',
                'layanan_id' => $pertambangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Sub-bidang Pertambangan dan Energi Lainnya',
                'kode_detail_layanan' => '1.06.99',
                'layanan_id' => $pertambangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdKeuangan = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '1.07',
            'nama_layanan' => 'KEUANGAN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Keuangan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Bank Sentral',
                'kode_detail_layanan' => '1.07.01',
                'layanan_id' => $nonKonstruksiIdKeuangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Bank Komersial',
                'kode_detail_layanan' => '1.07.02',
                'layanan_id' => $nonKonstruksiIdKeuangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Bank Pembangunan',
                'kode_detail_layanan' => '1.07.03',
                'layanan_id' => $nonKonstruksiIdKeuangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Bank Dagang',
                'kode_detail_layanan' => '1.07.04',
                'layanan_id' => $nonKonstruksiIdKeuangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Pasar Uang',
                'kode_detail_layanan' => '1.07.05',
                'layanan_id' => $nonKonstruksiIdKeuangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Manajemen Pasar Modal dan Bursa Efek',
                'kode_detail_layanan' => '1.07.06',
                'layanan_id' => $nonKonstruksiIdKeuangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Manajemen Lembaga Keuangan Non-Bank',
                'kode_detail_layanan' => '1.07.07',
                'layanan_id' => $nonKonstruksiIdKeuangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Pembelanjaan Sektor Pemerintah',
                'kode_detail_layanan' => '1.07.08',
                'layanan_id' => $nonKonstruksiIdKeuangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Manajemen Keuangan Perusahaan',
                'kode_detail_layanan' => '1.07.09',
                'layanan_id' => $nonKonstruksiIdKeuangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Manajemen Investasi dan Portfolio',
                'kode_detail_layanan' => '1.07.10',
                'layanan_id' => $nonKonstruksiIdKeuangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Pengawasan dan Regulasi Sektor Keuangan',
                'kode_detail_layanan' => '1.07.11',
                'layanan_id' => $nonKonstruksiIdKeuangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Sub-bidang Keuangan Lainnya',
                'kode_detail_layanan' => '1.07.99',
                'layanan_id' => $nonKonstruksiIdKeuangan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdPendidikan = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '1.08',
            'nama_layanan' => 'PENDIDIKAN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Pendidikan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Sistem dan Evaluasi Pendidikan',
                'kode_detail_layanan' => '1.08.01',
                'layanan_id' => $nonKonstruksiIdPendidikan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Organisasi/Administrasi Sekolah',
                'kode_detail_layanan' => '1.08.02',
                'layanan_id' => $nonKonstruksiIdPendidikan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Pengembangan Kurikulum dan Metodelogi Pendidikan',
                'kode_detail_layanan' => '1.08.03',
                'layanan_id' => $nonKonstruksiIdPendidikan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Bahan, Media dan Teknologi Pendidikan',
                'kode_detail_layanan' => '1.08.04',
                'layanan_id' => $nonKonstruksiIdPendidikan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Sub-bidang Pendidikan Lainnya',
                'kode_detail_layanan' => '1.08.99',
                'layanan_id' => $nonKonstruksiIdPendidikan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdKesehatan = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '1.09',
            'nama_layanan' => 'KESEHATAN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Kesehatan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Sistem/Organisasi Kesehatan',
                'kode_detail_layanan' => '1.09.01',
                'layanan_id' => $nonKonstruksiIdKesehatan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Pelayanan Medik, Kesehatan Kerja, Nutrisi dan Farmasi',
                'kode_detail_layanan' => '1.09.02',
                'layanan_id' => $nonKonstruksiIdKesehatan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Pengembangan Tenaga Medis',
                'kode_detail_layanan' => '1.09.03',
                'layanan_id' => $nonKonstruksiIdKesehatan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Kesehatan Masyarakat dan Penelitian Kesehatan',
                'kode_detail_layanan' => '1.09.04',
                'layanan_id' => $nonKonstruksiIdKesehatan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Sub-bidang Kesehatan Lainnya',
                'kode_detail_layanan' => '1.09.99',
                'layanan_id' => $nonKonstruksiIdKesehatan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdKependudukan = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '1.10',
            'nama_layanan' => 'KEPENDUDUKAN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Kependudukan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Wanita',
                'kode_detail_layanan' => '1.10.01',
                'layanan_id' => $nonKonstruksiIdKependudukan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Organisasi Program Kependudukan',
                'kode_detail_layanan' => '1.10.02',
                'layanan_id' => $nonKonstruksiIdKependudukan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Sistem Pelayanan Keluarga Berencana',
                'kode_detail_layanan' => '1.10.03',
                'layanan_id' => $nonKonstruksiIdKependudukan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Tenaga Medis Pelayanan Keluarga Berencana',
                'kode_detail_layanan' => '1.10.04',
                'layanan_id' => $nonKonstruksiIdKependudukan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Penyuluhan, Pendidikan dan Komunikasi',
                'kode_detail_layanan' => '1.10.05',
                'layanan_id' => $nonKonstruksiIdKependudukan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Pemantauan, Evaluasi dan Penelitian',
                'kode_detail_layanan' => '1.10.06',
                'layanan_id' => $nonKonstruksiIdKependudukan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Sub-bidang Kependudukan Lainnya',
                'kode_detail_layanan' => '1.10.99',
                'layanan_id' => $nonKonstruksiIdKependudukan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdRekayasaIndustri = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '1.11',
            'nama_layanan' => 'REKAYASA INDUSTRI',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Rekayasa Industri
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Rekayasa Industri Transportasi',
                'kode_detail_layanan' => '1.11.01',
                'layanan_id' => $nonKonstruksiIdRekayasaIndustri,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Rekayasa Industri Telekomunikasi',
                'kode_detail_layanan' => '1.11.02',
                'layanan_id' => $nonKonstruksiIdRekayasaIndustri,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Rekayasa Industri Teknologi Informasi',
                'kode_detail_layanan' => '1.11.03',
                'layanan_id' => $nonKonstruksiIdRekayasaIndustri,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Rekayasa Industri Mekanik',
                'kode_detail_layanan' => '1.11.04',
                'layanan_id' => $nonKonstruksiIdRekayasaIndustri,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Rekayasa Industri Pengelohan',
                'kode_detail_layanan' => '1.11.05',
                'layanan_id' => $nonKonstruksiIdRekayasaIndustri,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Rekayasa Industri Bioteknologi',
                'kode_detail_layanan' => '1.11.06',
                'layanan_id' => $nonKonstruksiIdRekayasaIndustri,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Sub bidang Rekayasa Lainnya',
                'kode_detail_layanan' => '1.11.99',
                'layanan_id' => $nonKonstruksiIdRekayasaIndustri,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdJasaSurvey = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '1.SS',
            'nama_layanan' => 'JASA SURVEY',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Jasa Survey
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Survey Teristis',
                'kode_detail_layanan' => '1.SS.01',
                'layanan_id' => $nonKonstruksiIdJasaSurvey,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Penginderaan jauh/Fotogrametri',
                'kode_detail_layanan' => '1.SS.02',
                'layanan_id' => $nonKonstruksiIdJasaSurvey,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Survey Hidrografi/Batimetri',
                'kode_detail_layanan' => '1.SS.03',
                'layanan_id' => $nonKonstruksiIdJasaSurvey,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Sistem Informasi Geografi',
                'kode_detail_layanan' => '1.SS.04',
                'layanan_id' => $nonKonstruksiIdJasaSurvey,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Survey Registrasi Kepemilikan Tanah/Kadastral',
                'kode_detail_layanan' => '1.SS.05',
                'layanan_id' => $nonKonstruksiIdJasaSurvey,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Survey Geologi dan Geofisika',
                'kode_detail_layanan' => '1.SS.06',
                'layanan_id' => $nonKonstruksiIdJasaSurvey,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Survey Pertanian',
                'kode_detail_layanan' => '1.SS.07',
                'layanan_id' => $nonKonstruksiIdJasaSurvey,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Survey non Seismik',
                'kode_detail_layanan' => '1.SS.08',
                'layanan_id' => $nonKonstruksiIdJasaSurvey,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Surbey Geologi dan Geofisika (nonseismik)',
                'kode_detail_layanan' => '1.SS.09',
                'layanan_id' => $nonKonstruksiIdJasaSurvey,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdJasaStudi = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '1.SI',
            'nama_layanan' => 'JASA STUDI, PENELITIAN DAN BANTUAN TEKNIK',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Jasa Studi, Penelitian dan Bantuan Teknik
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Studi Makro',
                'kode_detail_layanan' => '1.SI.01',
                'layanan_id' => $nonKonstruksiIdJasaStudi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Studi Kelayakan & Studi Mikro Lainnya',
                'kode_detail_layanan' => '1.SI.02',
                'layanan_id' => $nonKonstruksiIdJasaStudi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Studi Perencanaan Umum',
                'kode_detail_layanan' => '1.SI.03',
                'layanan_id' => $nonKonstruksiIdJasaStudi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Penelitian',
                'kode_detail_layanan' => '1.SI.04',
                'layanan_id' => $nonKonstruksiIdJasaStudi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Bantuan Teknik',
                'kode_detail_layanan' => '1.SI.05',
                'layanan_id' => $nonKonstruksiIdJasaStudi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Penelitian dan Pengembangan Minyak dan Gas Bumi',
                'kode_detail_layanan' => '1.SI.06',
                'layanan_id' => $nonKonstruksiIdJasaStudi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdJasaKonsultasi = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '1.MS',
            'nama_layanan' => 'JASA KONSULTASI MANAJEMEN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Jasa Konsultasi Manajemen
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Perencanaan Sistem Akuntansi',
                'kode_detail_layanan' => '1.MS.01',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Pelatihan dan Pengembangan SDM',
                'kode_detail_layanan' => '1.MS.02',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Konsultasi Manajemen Fungsional',
                'kode_detail_layanan' => '1.MS.03',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Konsultasi Hukum Bisnis',
                'kode_detail_layanan' => '1.MS.04',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdJasaKhusus = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '1.SC',
            'nama_layanan' => 'JASA KHUSUS',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Jasa Khusus
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Jasa Teknologi dan Sistem Informasi',
                'kode_detail_layanan' => '1.SC.01',
                'layanan_id' => $nonKonstruksiIdJasaKhusus,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Penilai/Appraisal/Valuer',
                'kode_detail_layanan' => '1.SC.02',
                'layanan_id' => $nonKonstruksiIdJasaKhusus,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Surveyor Independen',
                'kode_detail_layanan' => '1.SC.03',
                'layanan_id' => $nonKonstruksiIdJasaKhusus,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Sertifikasi',
                'kode_detail_layanan' => '1.SC.04',
                'layanan_id' => $nonKonstruksiIdJasaKhusus,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Inspeksi Teknik',
                'kode_detail_layanan' => '1.SC.05',
                'layanan_id' => $nonKonstruksiIdJasaKhusus,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Kehumasan',
                'kode_detail_layanan' => '1.SC.06',
                'layanan_id' => $nonKonstruksiIdJasaKhusus,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdJasaKonsultasiDestinasi = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '4.01',
            'nama_layanan' => 'JASA KONSULTASI DESTINASI PARIWISATA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Jasa Konsultasi Destinasi Pariwisata
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Pemberdayaan Masyarakat',
                'kode_detail_layanan' => '4.01.01',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiDestinasi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Pembangunan Daya Tarik Wisata',
                'kode_detail_layanan' => '4.01.02',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiDestinasi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Pembangunan Pra Sarana',
                'kode_detail_layanan' => '4.01.03',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiDestinasi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Penyediaan & Pengembangan Fasilitas/Sarana Pariwisata',
                'kode_detail_layanan' => '4.01.04',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiDestinasi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdJasaKonsultasiIndustri = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '4.02',
            'nama_layanan' => 'JASA KONSULTASI INDUSTRI PARIWISATA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Jasa Konsultasi Industri Pariwisata
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Usaha Jasa Pengelolaan Daya Tarik Wisata',
                'kode_detail_layanan' => '4.02.01',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiIndustri,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Usaha Jasa Pengelolaan Pelayanan Wisata',
                'kode_detail_layanan' => '4.02.02',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiIndustri,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Usaha Jasa Pengelolaan Kawasan Pariwisata',
                'kode_detail_layanan' => '4.02.03',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiIndustri,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Usaha Jasa Pengelolaan dan Penyediaan Fasilitas Wisata',
                'kode_detail_layanan' => '4.02.04',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiIndustri,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Usaha Jasa Pengelolaan dan Penyelenggaraan Pertemuan, Perjalanan Insentif, Konferensi dan Pameran (MICE)',
                'kode_detail_layanan' => '4.02.05',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiIndustri,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Usaha Jasa Pengelolaan dan Pelayanan Informasi',
                'kode_detail_layanan' => '4.02.06',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiIndustri,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Usaha Jasa Pengelolaan Wisata Tirta',
                'kode_detail_layanan' => '4.02.07',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiIndustri,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdJasaKonsultasiPemasaran = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '4.03',
            'nama_layanan' => 'JASA KONSULTASI PEMASARAN PARIWISATA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Jasa Konsultasi Pemasaran Pariwisata
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Jasa Konsultansi Pemasaran Pariwisata',
                'kode_detail_layanan' => '4.03.01',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiPemasaran,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdJasaKonsultasiKelembagaan = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '4.04',
            'nama_layanan' => 'JASA KONSULTASI KELEMBAGAAN KEPARIWISATAAN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Jasa Konsultasi Kelembagaan Kepariwisataan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Pengembangan Sumber Daya Manusia',
                'kode_detail_layanan' => '4.04.01',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiKelembagaan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Pengembangan Pranata Kelembagaan Organisasi',
                'kode_detail_layanan' => '4.04.02',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiKelembagaan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdJasaKonsultasiPenelitian = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '4.SP',
            'nama_layanan' => 'JASA KONSULTASI PENELITIAN KEPARIWISATAAN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Jasa Konsultasi Penelitian Kepariwisataan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Jasa Survey dan Investigasi',
                'kode_detail_layanan' => '4.SP.01',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiPenelitian,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Studi & Analisa Sosial, Kultural dan Aspek Legal',
                'kode_detail_layanan' => '4.SP.02',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiPenelitian,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Studi & Analisa Lingkungan',
                'kode_detail_layanan' => '4.SP.03',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiPenelitian,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Studi & Analisa Keekonomian',
                'kode_detail_layanan' => '4.SP.04',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiPenelitian,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Penilaian (Apprisal)',
                'kode_detail_layanan' => '4.SP.05',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiPenelitian,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdJasaKonsultasiPerencanaan = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '4.SR',
            'nama_layanan' => 'JASA KONSULTASI PERENCANAAN KEPARIWISATAAN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Jasa Konsultasi Perencanaan Kepariwisataan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Jasa Perencanaan Umum & Konsultansi Pembangunan/Pengembangan',
                'kode_detail_layanan' => '4.SR.01',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiPerencanaan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Rancang Bangun dan Bantuan Teknik',
                'kode_detail_layanan' => '4.SR.02',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiPerencanaan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Perencanaan Sistem Akuntansi dan Keuangan',
                'kode_detail_layanan' => '4.SR.03',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiPerencanaan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Perencanaan Informasi Teknologi',
                'kode_detail_layanan' => '4.SR.04',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiPerencanaan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $nonKonstruksiIdJasaKonsultasiStudiKelayakan = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '4.SK',
            'nama_layanan' => 'JASA KONSULTASI STUDI KELAYAKAN KEPARIWISATAAN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Jasa Konsultasi Studi Kelayakan Kepariwisataan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Jasa Konsultansi Studi Kelayakan Kepariwisataan',
                'kode_detail_layanan' => '4.SK.01',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiStudiKelayakan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);



        $nonKonstruksiIdJasaKonsultasiPengelolaan = DB::table('layanan')->insertGetId([
            'layanan' => 'nonKonstruksi',
            'kode_layanan' => '4.KM',
            'nama_layanan' => 'JASA KONSULTASI PENGELOLAAN KEPARIWISATAAN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan detail layanan nonKonstruksi untuk Jasa Konsultasi Pengelolaan Kepariwisataan
        DB::table('detail_layanan')->insert([
            [
                'nama_detail_layanan' => 'Jasa Konsultansi Manajemen Fungsional & Pemeliharaan',
                'kode_detail_layanan' => '4.KM.01',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiPengelolaan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Konsultansi Manajemen Keuangan & Akuntansi',
                'kode_detail_layanan' => '4.KM.02',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiPengelolaan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_detail_layanan' => 'Jasa Monitoring, Supervisi & Evaluasi',
                'kode_detail_layanan' => '4.KM.03',
                'layanan_id' => $nonKonstruksiIdJasaKonsultasiPengelolaan,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
