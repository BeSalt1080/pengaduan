@extends('layouts.backend.admin.master')

@section('content')
<div class="container"> @if(Session::has('message')) <div>
    {{Session::get('message')}}
    </div>
    @endif
    <div class="card o-hidden border-0 shadow-lg my-5"> <div class="card-body p-0"> <form
        action="{{route('tanggapan.update', [$tanggapan->id])}}" method="post">
        @csrf
        @method('put')
        <div class="card">
            <div class="card-header"><b>Update Tanggapan</b></div>
            <div class="card-body">
            <input type="hidden" name="pengaduan_id" value="{{$tanggapan->pengaduan->id}}">
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

            <div class="form-group">
                <label>Tanggal tanggapan</label>
                <input type="date" name="tgl_tanggapan" value="{{$tanggapan->tgl_tanggapan}}" class="form-control @error('tgl_tanggapan') is-invalid
                @enderror">
                @error('tgl_tanggapan')
                <span class="invalid-feedback"role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                    <option value="">Pilih Status</option>
                    <option {{ $tanggapan->status == "0" ? 'selected' : '' }} value="0">Pending</option>
                    <option {{ $tanggapan->status == "Proses" ? 'selected' : '' }} value="Proses">Proses</option>
                    <option {{ $tanggapan->status == "Selesai" ? 'selected' : '' }} value="Selesai">Selesai</option>
                    @error('status')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span> 
                    @enderror
                    </select>
                    </div>
                    <div class="form-group">
                    <label>Tanggapan</label>
                    <textarea name="tanggapan" class="form-control @error('tanggapan') is-invalid @enderror">{{$tanggapan->tanggapan}}</textarea>
                    @error('tanggapan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection