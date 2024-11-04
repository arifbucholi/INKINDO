<?php

namespace App\Http\Controllers;

use App\Models\Barcodes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BarcodeController extends Controller
{
    public function index()
    {
        // Get the latest barcode
        $latestBarcode = Barcodes::latest()->first();
        return view('admin.messages', compact('latestBarcode'));
    }

    public function update(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'barcode' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validate the image file
        ]);
        dd($request);


        // Create a new record for the barcode
        $barcode = new Barcodes();


        // Save the barcode if a file is uploaded
        if ($request->hasFile('barcode')) {
            $file = $request->file('barcode');
            $path = $file->store('uploads/barcodes'); // Save in 'uploads/barcodes' folder
            $barcode->barcode_image_url = $path;
        }

        $barcode->save();

        return redirect()->back()->with('success', 'Barcode berhasil diganti.');
    }
}
