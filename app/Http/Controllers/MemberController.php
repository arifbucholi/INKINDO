<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Imports\MembersImport;
use PhpOffice\PhpSpreadsheet\IOFactory;
use DateTime;
use Illuminate\Support\Facades\Log;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all()->map(function ($member) {
            $member->diangkat = \Carbon\Carbon::parse($member->diangkat)->format('d-m-Y');
            $member->tahun_berlaku = \Carbon\Carbon::parse($member->tahun_berlaku)->format('d-m-Y');
            return $member;
        });

        return view('admin.anggota', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'badan_hukum' => 'required|string',
            'contact_id' => 'required|integer',
            // Tambahkan validasi untuk kolom lainnya
        ]);

        Member::create($request->all());
        return redirect()->route('admin.anggota')->with('success', 'Member created successfully.');
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);
        $member->update($request->all());
        return redirect()->route('members.index')->with('success', 'Member updated successfully.');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Member deleted successfully.');
    }

    public function import(Request $request)
    {
        // Validasi file yang diunggah
        $request->validate([
            'file' => 'required|mimes:xlsx',
        ]);

        // Mengambil file XLSX dari request
        $file = $request->file('file');

        // Menggunakan PhpSpreadsheet untuk membaca file
        $spreadsheet = IOFactory::load($file->getPathname());
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray();

        // Ambil header dari baris pertama
        $header = array_shift($rows); // Mengambil baris pertama sebagai header

        // Hapus semua data anggota yang ada sebelum mengimpor data baru
        Member::truncate();

        // Menyimpan data ke dalam tabel members
        foreach ($rows as $key => $row) {
            // Lewati baris jika tidak ada data
            if (empty(array_filter($row))) {
                continue;
            }

            // Buat array untuk menyimpan data anggota
            $memberData = [];

            // Loop melalui header dan ambil data yang sesuai dari baris
            foreach ($header as $index => $columnName) {
                // Mengubah nama kolom untuk mencocokkan dengan nama atribut di database
                $columnName = strtolower(str_replace(' ', '_', trim($columnName))); // Mengubah ke format yang sesuai

                // Jika ada data, masukkan ke dalam array memberData
                if (array_key_exists($index, $row)) {
                    $memberData[$columnName] = $row[$index] ?? null;
                }
            }

            // Pastikan untuk mengonversi 'kode_etik' menjadi boolean jika diperlukan
            if (isset($memberData['kode_etik'])) {
                $memberData['kode_etik'] = filter_var($memberData['kode_etik'], FILTER_VALIDATE_BOOLEAN);
            }

            // Format tanggal diangkat jika ada
            if (isset($memberData['diangkat'])) {
                try {
                    $memberData['diangkat'] = \Carbon\Carbon::createFromFormat('d/m/Y', $memberData['diangkat'])->format('Y-m-d');
                } catch (\Exception $e) {
                    Log::error('Invalid date format for diangkat:', ['error' => $e->getMessage()]);
                    $memberData['diangkat'] = null; // Atur ke null jika format tidak valid
                }
            }

            if (isset($memberData['tahun_berlaku'])) {
                try {
                    $memberData['tahun_berlaku'] = \Carbon\Carbon::createFromFormat('d/m/Y', $memberData['tahun_berlaku'])->format('Y-m-d');
                } catch (\Exception $e) {
                    Log::error('Invalid date format for tahun berlaku:', ['error' => $e->getMessage()]);
                    $memberData['tahun_berlaku'] = null; // Atur ke null jika format tidak valid
                }
            }

            // if (isset($memberData['tahun_berlaku'])) {
            //     try {
            //         $memberData['tahun_berlaku'] = \Carbon\Carbon::createFromFormat('d/m/Y', $memberData['tahun_berlaku'])->format('Y-m-d');
            //     } catch (\Exception $e) {
            //         Log::error('Invalid date format for tahun berlaku:', ['error' => $e->getMessage()]);
            //         $memberData['tahun_berlaku'] = null; // Atur ke null jika format tidak valid
            //     }
            // }

            // Batasi panjang no_sertifikat_kode_etik ke 255 karakter (sesuai dengan VARCHAR(255))
            if (isset($memberData['no_sertifikat_kode_etik'])) {
                $memberData['no_sertifikat_kode_etik'] = substr($memberData['no_sertifikat_kode_etik'], 0, 255);
            }

            // Tambahkan logging untuk memeriksa data yang diimpor
            Log::info('Row data:', $memberData);

            // dd($memberData);

            // Simpan data anggota ke dalam database
            try {
                Member::create($memberData);
            } catch (\Exception $e) {
                // Logging jika ada error saat menyimpan data
                Log::error('Error inserting row:', [
                    'row' => $memberData,
                    'error' => $e->getMessage(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Data anggota berhasil diimpor dan diperbarui.');
    }

    public function getDiangkatAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getTahunBerlakuAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function downloadTemplate()
{
    // Membuat spreadsheet baru
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Menetapkan header kolom
    $headers = [
        'no',
        'badan_hukum',
        'contact_id',
        'diangkat',
        'jtm',
        'nomor_anggota',
        'status',
        'tahun_berlaku',
        'kualifikasi',
        'name',
        'address',
        'city',
        'postal_code',
        'director',
        'work_phone',
        'mobile_phone',
        'fax_phone',
        'email',
        'kode_etik',
        'no_sertifikat_kode_etik',
    ];

    // Mengatur header kolom di spreadsheet
    $sheet->fromArray($headers, NULL, 'A1');

    // Menyimpan spreadsheet sebagai file .xlsx
    $writer = new Xlsx($spreadsheet);
    $filePath = public_path('template/member_template.xlsx');
    $writer->save($filePath);

    // Mengunduh file yang telah dibuat
    return response()->download($filePath)->deleteFileAfterSend(true);
}
}