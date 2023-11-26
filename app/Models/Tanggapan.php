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
    public function show($id){
        $pengaduan = Pengaduan::find($id);
        return view('tanggapan.detail', compact('pengaduan'));
    }
    protected $fillable = [
        "pengaduan_id",
        "tgl_tanggapan",
        "user_id",
        "tanggapan",
        ];
}
