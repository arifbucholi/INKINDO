<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanan';
    protected $fillable = ['layanan', 'kode_layanan', 'nama_layanan'];

    // Relasi One-to-Many ke DetailLayanan
    public function detailLayanan()
    {
        return $this->hasMany(DetailLayanan::class, 'layanan_id');
    }
}
