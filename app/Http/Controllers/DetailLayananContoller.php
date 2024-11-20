<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Models\DetailLayanan;
use App\Http\Controllers\Controller;

class DetailLayananContoller extends Controller
{
    public function index()
    {
        $detailLayanan = DetailLayanan::with('layanan')->get();
        return view('detail_layanan.index', compact('detailLayanan'));
    }

    public function create()
    {
        $layanan = Layanan::all();
        return view('detail_layanan.create', compact('layanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_detail_layanan' => 'required|string',
            'kode_detail_layanan' => 'required|string|unique:detail_layanan',
            'layanan_id' => 'required|exists:layanan,id',
        ]);

        DetailLayanan::create($request->all());
        return redirect()->route('detail_layanan.index')->with('success', 'Detail Layanan berhasil ditambahkan.');
    }

    public function edit(DetailLayanan $detailLayanan)
    {
        $layanan = Layanan::all();
        return view('detail_layanan.edit', compact('detailLayanan', 'layanan'));
    }

    public function update(Request $request, DetailLayanan $detailLayanan)
    {
        $request->validate([
            'nama_detail_layanan' => 'required|string',
            'kode_detail_layanan' => 'required|string|unique:detail_layanan,kode_detail_layanan,' . $detailLayanan->id,
            'layanan_id' => 'required|exists:layanan,id',
        ]);

        $detailLayanan->update($request->all());
        return redirect()->route('detail_layanan.index')->with('success', 'Detail Layanan berhasil diubah.');
    }

    public function destroy(DetailLayanan $detailLayanan)
    {
        $detailLayanan->delete();
        return redirect()->route('detail_layanan.index')->with('success', 'Detail Layanan berhasil dihapus.');
    }
}
