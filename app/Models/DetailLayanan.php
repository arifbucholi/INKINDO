<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailLayanan extends Model
{
    use HasFactory;

    protected $table = 'detail_layanan';
    protected $fillable = ['nama_detail_layanan', 'kode_detail_layanan', 'layanan_id'];

    // Relasi Many-to-One ke Layanan
    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id');
    }
}
