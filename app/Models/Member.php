<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
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
}
