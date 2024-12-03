<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Page;
use App\Models\Member;
use App\Models\Barcodes;
use App\Models\Messages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardUserController extends Controller
{
    public function index()
    {
        // Mengambil data messages
        $messages = Messages::orderBy('created_at', 'desc')->get();

        // Mengambil semua barcode
        $allBarcodes = Barcodes::all();
        $latestBarcode = $allBarcodes->last(); // Mendapatkan barcode terbaru

        // Mengambil semua FAQ
        $faqs = Faq::all(); // Ambil semua FAQ

        $members = Member::all();

        // Menghitung jumlah kualifikasi untuk huruf "K", "M", dan "B"
        $kualifikasiCount = $members->reduce(function ($carry, $member) {
            // Ambil kualifikasi dari member
            $kualifikasi = $member->kualifikasi;

            // Hitung jumlah untuk huruf "K", "S", dan "B"
            if ($kualifikasi === 'K') {
                $carry['K'] = ($carry['K'] ?? 0) + 1;
            } elseif ($kualifikasi === 'M') {
                $carry['M'] = ($carry['M'] ?? 0) + 1;
            } elseif ($kualifikasi === 'B') {
                $carry['B'] = ($carry['B'] ?? 0) + 1;
            }

            return $carry;
        }, []);

        $cityData = $members->groupBy('city')->map(function ($group) {
            return count($group); // Hitung jumlah perusahaan di kota ini
        });

        $seo = Page::where('page_type', 'home')->first();

        // Mengirimkan data ke view
        return view('index', compact('messages', 'latestBarcode', 'faqs', 'kualifikasiCount', 'cityData', 'seo'));
    }
}
