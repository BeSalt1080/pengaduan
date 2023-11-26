<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function tanggapan(){
        return $this->hasOne(Tanggapan::class);
    }

    protected $fillable = [
        'tgl_pengaduan',
        'user_id',
        'isi_laporan',
        'foto',
        "status"
        ];
}
