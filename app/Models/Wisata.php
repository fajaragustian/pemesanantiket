<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table ="wisata";
    protected $fillable = [
        'nama',
        'image',
        'link',
    ];
    public function wisata(){
        return $this->belongsToMany(Reservasi::class);
    }
    public function harga(){
        return $this->belongsTo(Harga::class);
    }
}
