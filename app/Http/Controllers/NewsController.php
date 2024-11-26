<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        // dd($news);
        return view('admin.news', compact('news'));
    }

    // Show the form for creating a new news article
    public function create()
    {
        return view('admin.news.create');
    }

    // Store a newly created news article
    // public function store(Request $request)
    // {
    //     // Validasi inputan
    //     $validated = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required|string',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     // dd($validated);

    //     $imagePath = null;
    //     if ($request->hasFile('image')) {
    //         // Menyimpan gambar ke lokasi permanen
    //         $imagePath = $request->file('image')->store('uploads/images', 'public');
    //     }

    //     // Menyimpan data ke database
    //     $validated['image'] = $imagePath;

    //     // Membuat dan menyimpan data ke dalam tabel News
    //     News::create($validated);

    //     return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
    // }

    public function store(Request $request)
    {
        // Validasi inputan

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        // Inisialisasi imagePath sebagai null
        $imagePath = null;

        // Handle image upload jika ada
        if ($request->hasFile('image')) {
            // Menyimpan gambar ke lokasi permanen
            // Ini akan menyimpan gambar di public/uploads/images dengan disk 'public'
            $imagePath = $request->file('image')->store('uploads/images', 'public');
        }
        // dd($imagePath);

        // Menambahkan path gambar ke data yang divalidasi
        $validated['image'] = $imagePath;

        // Membuat dan menyimpan data ke dalam tabel News
        News::create($validated);

        return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
    }



    // Show the form for editing the specified news article
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    // Update the specified news article
    public function update(Request $request, $id)
    {
        // Validasi inputan
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);
        // dd($request->all());

        // Cari data news berdasarkan ID
        $news = News::findOrFail($id);

        // Update informasi teks (title dan content)
        $news->title = $request->title;
        $news->content = $request->content;

        // Jika ada file image baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($news->image) {
                Storage::delete('public/' . $news->image);  // Hapus gambar lama jika ada
            }

            // Menyimpan gambar baru
            $imagePath = $request->file('image')->store('uploads/images', 'public');

            // Update kolom 'image' dengan path gambar baru
            $news->image = $imagePath;
        }

        // Simpan perubahan ke database
        $news->save();

        // Redirect kembali ke halaman daftar dengan pesan sukses
        return redirect()->route('admin.news.index')->with('success', 'News updated successfully.');
    }


    // Remove the specified news article
    public function destroy($id)
    {
        $news = News::find($id);

        if ($news) {
            $news->delete();
            return redirect()->back()->with('success', 'News deleted successfully.');
        }

        return redirect()->back()->with('error', 'News not found.');
    }
}
