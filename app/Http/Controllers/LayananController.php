<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Models\DetailLayanan;
use App\Http\Controllers\Controller;

class LayananController extends Controller
{
    // Menampilkan daftar layanan beserta detail layanan
    public function index()
    {
        $layanan = Layanan::with('detailLayanan')->get();

        $layanan->transform(function ($item) {
            $item->layanan = $item->layanan === 'konstruksi' ? 'KONSTRUKSI' : 'NON-KONSTRUKSI';
            return $item;
        });
        return view('admin.layanan', compact('layanan'));
    }

    // Menambahkan layanan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'kode_layanan' => 'required|string|max:255',
        ]);

        Layanan::create($request->all());
        return back()->with('success', 'Layanan berhasil ditambahkan.');
    }

    // Mengedit layanan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'kode_layanan' => 'required|string|max:255',
        ]);

        $layanan = Layanan::findOrFail($id);
        $layanan->update($request->all());

        return back()->with('success', 'Layanan berhasil diperbarui.');
    }

    // Menghapus layanan
    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete();

        return back()->with('success', 'Layanan berhasil dihapus.');
    }

    // Menambahkan detail layanan
    public function addDetail(Request $request, $layanan_id)
    {
        $request->validate([
            'nama_detail_layanan' => 'required|string|max:255',
            'kode_detail_layanan' => 'required|string|max:255',
        ]);

        DetailLayanan::create([
            'nama_detail_layanan' => $request->nama_detail_layanan,
            'kode_detail_layanan' => $request->kode_detail_layanan,
            'layanan_id' => $layanan_id,
        ]);

        return back()->with('success', 'Detail layanan berhasil ditambahkan.');
    }

    // Mengedit detail layanan
    public function updateDetail(Request $request, $id)
    {
        $request->validate([
            'nama_detail_layanan' => 'required|string|max:255',
            'kode_detail_layanan' => 'required|string|max:255',
        ]);

        $detailLayanan = DetailLayanan::findOrFail($id);
        $detailLayanan->update($request->all());

        return back()->with('success', 'Detail layanan berhasil diperbarui.');
    }

    // Menghapus detail layanan
    public function destroyDetail($id)
    {
        $detailLayanan = DetailLayanan::findOrFail($id);
        $detailLayanan->delete();

        return back()->with('success', 'Detail layanan berhasil dihapus.');
    }

    public function showDetail($layanan_id)
    {
        // Ambil layanan berdasarkan layanan_id
        $layanan = Layanan::findOrFail($layanan_id);
        $detailLayanan = $layanan->detailLayanan; // Misalnya relasi layanan dengan detail layanan

        return view('admin.detail-layanan', compact('layanan', 'detailLayanan'));
    }
}
