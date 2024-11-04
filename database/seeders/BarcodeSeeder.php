<?php

namespace Database\Seeders;

use App\Models\Barcodes;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barcodeImages = [
            'uploads/barcodes/barcode1.png',
            'uploads/barcodes/barcode2.png',
            'uploads/barcodes/barcode3.png',
        ];

        foreach ($barcodeImages as $image) {
            Barcodes::create([
                'barcode_image_url' => $image,
            ]);
        }
    }
}
