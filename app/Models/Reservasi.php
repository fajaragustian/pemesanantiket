<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table ="reservasi";
    protected $fillable = [
        'daftar_harga_id',
        'wisata_id',
        'nama',
        'nik',
        'nohp',
        'tglkunjungan',
        'dewasa',
        'anak',
        'totbay',
    ];
    public function wisata(){
        return $this->belongsTo(Wisata::class);
    }
    public function daftarharga(){
        return $this->belongsTo(Reservasi::class);
    }
}
