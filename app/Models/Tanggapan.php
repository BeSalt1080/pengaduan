<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    
    use HasFactory;
    public function pengaduan(){
        return $this->belongsTo(Pengaduan::class);
    }
    protected $fillable = [
        "pengaduan_id",
        "tgl_tanggapan",
        "user_id",
        "tanggapan",
        ];
}
