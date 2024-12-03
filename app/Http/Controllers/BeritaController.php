<?php

namespace App\Http\Controllers;

use HTMLPurifier;
use HTMLPurifier_Config;
use App\Models\News;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    public function index()
    {
        $news = News::paginate(8);
        $seo = Page::where('page_type', 'berita')->first();
        // dd($news);
        // Inisialisasi HTMLPurifier
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);

        // Memurnikan konten berita
        foreach ($news as $new) {
            $new->content = $purifier->purify($new->content);
        }

        return view('berita', compact('news', 'seo'));
    }

    // public function search(Request $request)
    // {
    //     $search = $request->input('query');
    //     $news = News::where('title', 'LIKE', "%{$search}%")
    //         ->orWhere('content', 'LIKE', "%{$search}%")
    //         ->get();

    //     return view('berita', compact('news'));
    // }

    public function show($id)
    {
        $berita = News::findOrFail($id);
        $beritaLainnya = News::where('id', '!=', $id)->take(5)->get();
        return view('detail-berita', compact('berita', 'beritaLainnya'));
    }
}
