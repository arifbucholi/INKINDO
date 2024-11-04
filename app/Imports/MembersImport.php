<?php

namespace App\Imports;

use App\Models\Member;
use PhpOffice\PhpSpreadsheet\IOFactory;

class MembersImport
{
    public function import($filePath)
    {
        $spreadsheet = IOFactory::load($filePath);
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

        foreach ($sheetData as $row) {
            Member::create([
                'no' => $row['A'],                       // No
                'badan_hukum' => $row['B'],                  // Bdn Hkm
                'contact_id' => $row['C'],              // ContactsID
                'diangkat' => $row['D'],                 // Diangkat
                'jtm' => $row['E'],                       // JTM
                'nomor_anggota' => $row['F'],            // Nomor Anggota
                'status' => $row['G'],                    // Status
                'tahun_berlaku' => $row['H'],              // TA belaku s/d
                'kualifikasi' => $row['I'],               // Kualifikasi
                'name' => $row['J'],                // First Name
                'address' => $row['K'],                   // Address
                'city' => $row['L'],                      // City
                'postal_code' => $row['M'],               // Postal Code
                'director' => $row['N'],                  // Director
                'work_phone' => $row['O'],                // Work Phone
                'mobile_phone' => $row['P'],              // Mobile Phone
                'fax_phone' => $row['Q'],                // Fax Number
                'email' => $row['R'],                // Email Name
                'kode_etik' => $row['S'],                 // Kode Etik
                'no_sertifikat_kode_etik' => $row['T'],   // No Sertifikat KODE ETIK
            ]);
        }
    }
}
