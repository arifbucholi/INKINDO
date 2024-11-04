<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
{
    $pages = Page::all();
    $usedPageTypes = $pages->pluck('page_type')->toArray(); // Ambil page_type yang sudah digunakan
    return view('admin.seo', compact('pages', 'usedPageTypes'));
}

    // Menyimpan pengaturan SEO baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'page_type' => 'required|in:home,about,services,news,contact',
            'content' => 'nullable',
            'seo_title' => 'required|string|max:255',
            'meta_description' => 'nullable|string',
            'keywords' => 'nullable|string',
        ]);

        Page::create($validatedData);

        return redirect()->route('admin.seo.index')->with('success', 'SEO berhasil disimpan.');
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);
        $pages = Page::where('id', '!=', $id)->get(); // Ambil semua page kecuali yang sedang diedit
        $usedPageTypes = $pages->pluck('page_type')->toArray(); // Ambil page_type yang sudah digunakan

        return view('admin.seo.edit', compact('page', 'usedPageTypes'));
    }

    // Memperbarui pengaturan SEO
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'page_type' => 'required|in:home,about,services,news,contact',
            'content' => 'nullable',
            'seo_title' => 'required|string|max:255',
            'meta_description' => 'nullable|string',
            'keywords' => 'nullable|string',
        ]);

        $page = Page::findOrFail($id);
        $page->update($validatedData);

        return redirect()->route('admin.seo.index')->with('success', 'SEO berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return redirect()->route('admin.seo.index')->with('success', 'SEO berhasil dihapus.');
    }
}
