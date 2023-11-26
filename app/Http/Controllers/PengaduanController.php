<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduans =Pengaduan::latest()->get();
        return view('pengaduan.index',compact('pengaduans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tgl_pengaduan'=>'required',
            'user_id'=>'required',
            'isi_laporan'=>'required',
            'foto'=>'required',
        ]);

        $foto = $request->file('foto');
        $name = time().'.'.$foto->getClientOriginalExtension();
        $destinationPath = public_path('/foto');
        $foto->move ($destinationPath, $name);

        Pengaduan::create([
            'tgl_pengaduan'=>$request->get('tgl_pengaduan'),
            'user_id'=>$request->get('user_id'),
            'isi_laporan'=>$request->get('isi_laporan'),
            'foto'=>$name
        ]);

        return redirect()->route("pengaduan.index")->with('message','Pengaduan berhasil Dilaporkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('pengaduan.detail', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan =Pengaduan::find($id);
        return view('pengaduan.edit',compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tgl_pengaduan'=>'required',
            'user_id'=>'required',
            'isi_laporan'=>'required',
            'foto'=>'',
        ]);

        $pengaduan = Pengaduan::find($id);
        $name = $pengaduan->foto;
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $name = time().'.'.$foto->getClientOriginalExtension();
            $destinationPath = public_path('/foto');
            $foto->move($destinationPath, $name);
        }

        $pengaduan->tgl_pengaduan = $request->get('tgl_pengaduan');
        $pengaduan->user_id = $request->get('user_id');
        $pengaduan->isi_laporan = $request->get('isi_laporan');
        $pengaduan->foto = $name;
        $pengaduan->save();

        return redirect()->route("pengaduan.index")->with(["message"=>"pengaduan berhasil dikirim!"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan -> delete();
        return redirect()->back()->with('message','Pengaduan berhasil dihapus');
    }
    
    
}
