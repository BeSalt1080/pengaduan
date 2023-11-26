<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanggapan;
use App\Models\Pengaduan;

class TanggapanController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'tgl_tanggapan'=>'required',
            'tanggapan'=>'required',
            'status'=>'required',
        ]);
        Tanggapan::create([
            'pengaduan_id'=>$request->get('pengaduan_id'),
            'tgl_tanggapan'=>$request->get('tgl_tanggapan'),
            'tanggapan'=>$request->get('tanggapan'),
            'user_id'=>$request->get('user_id'),
        ]);
        Pengaduan::where('id',$request->pengaduan_id)->update([
            'status'=>$request->get('status'),
        ]);
        
        return redirect()->route("pengaduan.index")->with(["message"=>"Tanggapan berhasil dikirim!"]);
    }
    public function show($id)
    {
        $pengaduan = Pengaduan::find($id);
        return view("tanggapan.create",compact("pengaduan"));
    }
    public function edit($id)
    {
        $tanggapan = Tanggapan::find($id);
        return view("tanggapan.edit",compact("tanggapan"));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tgl_tanggapan'=>'required',
            'tanggapan'=>'required',
            'status'=>'required',
        ]);
        
        Pengaduan::where('id',$request->pengaduan_id)->update([
            'status'=>$request->get('status'),
        ]);

        $tanggapan = Tanggapan::find($id);   
        $tanggapan->tgl_tanggapan = $request->get('tgl_tanggapan');
        $tanggapan->tanggapan = $request->get('tanggapan');
        $tanggapan->save();
        return redirect()->route("pengaduan.index")->with(["message"=>"Tanggapan berhasil diubah!"]);
    }
    public function destroy($id)
    {
        $tanggapan = Tanggapan::find($id);
        $tanggapan->delete();
        return redirect()->route("pengaduan.index")->with(["message"=>"Tanggapan berhasil dihapus!"]);
    }
}
