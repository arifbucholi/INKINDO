<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    // Menampilkan semua FAQ
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faq', compact('faqs'));
    }

    // Menampilkan form untuk membuat FAQ baru
    public function create()
    {
        return view('faq.create');
    }

    // Menyimpan FAQ baru
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        // dd($request->all());

        Faq::create($request->all());

        return redirect()->route('faq.index')->with('success', 'FAQ berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit FAQ
    public function edit(Faq $faq)
    {
        // dd($faq);
        return view('faq.edit', compact('faq'));
    }

    // Menyimpan perubahan FAQ
    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $faq->update($request->all());

        return redirect()->route('faq.index')->with('success', 'FAQ berhasil diperbarui.');
    }

    // Menghapus FAQ
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq.index')->with('success', 'FAQ berhasil dihapus.');
    }

    public function indexUser()
    {
        $faqs = Faq::all();
        return view('index', compact('faqs'));
    }
}
