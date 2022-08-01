<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarHarga extends Model
{
    use HasFactory;
    protected $table ="daftar_harga";
    protected $fillable = [
        'wisata_id',
        'harga',
    ];
    public function wisata(){
        return $this->belongsTo(Wisata::class);
    }
    public function reservasi(){
        return $this->belongsTo(Reservasi::class);
    }
}
