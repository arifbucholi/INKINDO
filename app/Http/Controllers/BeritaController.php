<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    public function index()
    {
        $news = News::paginate(8);
        // dd($news);
        return view('berita', compact('news'));
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
