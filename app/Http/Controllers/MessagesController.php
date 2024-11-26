<?php

namespace App\Http\Controllers;

use App\Models\Barcodes;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Storage;

class MessagesController extends Controller
{
    // Menampilkan form untuk membuat message
    public function create()
    {
        return view('admin.messages.create'); // Mengarah ke tampilan create
    }

    // Menyimpan data message
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'guest_name' => 'required|string|max:255',
    //         'message' => 'required|string',
    //         'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //     ]);

    //     // dd($validated);

    //     $photoPath = null;
    //     if ($request->hasFile('photo')) {
    //         // Menyimpan file ke lokasi permanen
    //         $photoPath = $request->file('photo')->store('uploads/messages', 'public');
    //         // dd($photoPath);
    //     }

    //     // Menyimpan data ke database
    //     $validated['photo'] = $photoPath;

    //     Messages::create($validated); // Menyimpan data ke database

    //     return redirect()->route('admin.messages.index')->with('success', 'Message added successfully!');
    // }

    public function store(Request $request)
    {
        // Validasi inputan

        // if ($request->hasFile('photo')) {
        //     dd($request->file('photo'));
        // }
        $validated = $request->validate([
            'guest_name' => 'required|string|max:255',
            'message' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        // dd($validated);

        // Inisialisasi photoPath sebagai null
        $photoPath = null;

        // Handle photo upload jika ada
        if ($request->hasFile('photo')) {
            // Menyimpan file gambar ke lokasi permanen
            // Ini akan menyimpan gambar di folder public/uploads/messages
            $photoPath = $request->file('photo')->store('uploads/messages', 'public');
        }

        // Menambahkan photoPath ke data yang divalidasi
        $validated['photo'] = $photoPath;

        // Menyimpan data baru ke database
        Messages::create($validated);

        return redirect()->route('admin.messages.index')->with('success', 'Message added successfully!');
    }


    public function index()
    {
        $messages = Messages::orderBy('created_at', 'desc')->get();
        $allBarcodes = Barcodes::all(); // Ambil semua barcode

        // Mendapatkan barcode terbaru dari koleksi
        $latestBarcode = $allBarcodes->last(); // Mengambil elemen terakhir dari koleksi
        // dd($latestBarcode);

        return view('admin.messages', compact('messages', 'latestBarcode')); // Mengirimkan pesan dan barcode terbaru ke view
    }


    // Menampilkan form untuk mengedit message
    public function edit($id)
    {
        $message = Messages::findOrFail($id);
        return view('admin.messages.edit', compact('message'));
    }

    // Memperbarui data message
    public function update(Request $request, $id)
    {

        // if ($request->hasFile('photo')) {
        //     dd($request->file('photo'));
        // }
        $message = Messages::findOrFail($id);
        $message->guest_name = $request->guest_name;
        $message->message = $request->message;
        if ($request->hasFile('photo')) {
            if ($message->photo) {
                Storage::disk('public')->delete($message->photo);
            }
            $message->photo = $request->file('photo')->store('uploads/messages', 'public');
        }
        $message->save();

        return redirect()->route('admin.messages.index')->with('success', 'Testimoni berhasil diperbarui');
    }

    // Menghapus message
    public function destroy($id)
    {
        $message = Messages::findOrFail($id);
        $message->delete(); // Menghapus data

        return redirect()->route('admin.messages.index')->with('success', 'Message deleted successfully!');
    }

    public function createBarcode()
    {
        return view('admin.barcodes.create'); // Create a view for barcode upload
    }

    public function storeBarcode(Request $request)
    {
        // Validasi input
        $request->validate([
            'barcode' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan file barcode
        if ($request->hasFile('barcode')) {
            $file = $request->file('barcode');
            $path = $file->store('uploads/barcodes/', 'public'); // Menyimpan di storage/app/public/uploads/barcodes

            // Jika perlu menyimpan ke database, aktifkan baris berikut
            Barcodes::create(['barcode_image_url' => $path]);

            return redirect()->back()->with('success', 'Barcode berhasil diunggah!');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah barcode.');
    }
}
