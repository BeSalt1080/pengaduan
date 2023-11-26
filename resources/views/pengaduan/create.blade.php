@extends('layouts.backend.admin.master')

@section('content')
<div class="container"> 
    @if(Session::has('message')) 
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
    @endif
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <form action="{{route('pengaduan.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><b>Tambah Pengaduan</b></div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Pelapor</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{Auth::user()->name}}" readonly>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror"
                                value="{{Auth::user()->nik}}" readonly>
                            @error('nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <div class="form-group">
                            <label>Tanggal Kejadian</label>
                            <input type="date" name="tgl_pengaduan"
                                class="form-control @error('tgl_pengaduan') is-invalid @enderror">
                            @error('tgl_pengaduan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Isi laporan</label>
                            <textarea name="isi_laporan"
                                class="form-control @error('tgl_pengaduan') is-invalid @enderror"></textarea>
                            @error('isi_laporan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                            @error('foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Laporkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endsection