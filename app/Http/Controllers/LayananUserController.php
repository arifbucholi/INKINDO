<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayananUserController extends Controller
{
    public function indexKonstruksi()
    {
        // Mengambil semua layanan beserta detailnya
        $layanan = Layanan::with('detailLayanan')->where('layanan', 'konstruksi')->get();

        // Mengembalikan view dengan data layanan
        return view('konstruksi', compact('layanan'));
    }

    public function indexNonKonstruksi()
    {
        // Mengambil semua layanan beserta detailnya
        $layanan = Layanan::with('detailLayanan')->where('layanan', 'nonKonstruksi')->get();

        // Mengembalikan view dengan data layanan
        return view('non-konstruksi', compact('layanan'));
    }
}
