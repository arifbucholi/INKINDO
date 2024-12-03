<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeoController extends Controller
{
    public function indexAlur(){
        $seo = Page::where('page_type', 'alur')->first();
        return view('alur', compact('seo'));
    }

    public function indexProfil(){
        $seo = Page::where('page_type', 'profil')->first();
        return view('profil', compact('seo'));
    }

    public function indexProduk(){
        $seo = Page::where('page_type', 'layanan')->first();
        return view('produk', compact('seo'));
    }
}
