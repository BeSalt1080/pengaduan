@extends ('layouts.backend.admin.master')

@section('content')
<div class="container">
    @if (Session::has ('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
    @endif
    <div class="card shadow mb-4 my-5">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Pengaduan
                <span class="float-right">
                    <a href="{{route('pengaduan.create') }}" title="Tambah Pengaduan">
                        <i class="fas fa-fw fa-plus"></i>Tambah
                    </a>
                </span>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Pelapor</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Pelapor</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @if (count($pengaduans)>0)
                    @foreach ($pengaduans as $key=>$pengaduan)
                    <tr>
                    <th scope="row">{{ $key+1}}</th>
                    <td>{{$pengaduan->tgl_pengaduan}}</td>
                    <td>{{$pengaduan->user->name}}</td>
                    <td>{{Str::limit ($pengaduan->isi_laporan, 30)}}</td>
                    <td>
                        <a href="{{asset('foto')}}/{{$pengaduan->foto}}" target="_blank">
                            <img src="{{asset('foto')}}/{{$pengaduan->foto}}" width="100">
                        </a>
                    </td>
                    <td>
                        @if ($pengaduan->status=='0')
                        <span class="px-3 bg-gradient-danger text-white">
                            {{ $pengaduan->status}}
                        </span>
                        @elseif ($pengaduan->status == 'Proses')
                        <span class="px-3 bg-gradient-warning text-white">
                            {{$pengaduan->status}}
                        </span>
                        @else
                        <span class="px-3 bg-gradient-success text-white">
                            {{$pengaduan->status}}
                        </span>
                @endif
            </td>
            <td>
                <a href="{{route('pengaduan.show',[$pengaduan->id])}}"><button class="btn btn-outline-success"><i class="fas fa-fw fa-eye"></i></button></a>
                <a href="{{route ('pengaduan.edit',[$pengaduan->id])}}"><button class="btn btn-outline-success"><i class="fas fa-fw fa-edit"></i></button></a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$pengaduan->id}}">
                    <i class="fas fa-fwfa-trash"></i>Delete
                </button>
                <div class="modal fade" id="exampleModal{{$pengaduan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <form action="{{route ('pengaduan.destroy', [$pengaduan->id]) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">DELETE</h5>
                            <button type="button"class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                    Apakah Anda Yakin ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </div>
                </div>
                </form>
            </div>
            </div>
        </td>
    </tr>
    @endforeach
    @else
    <td>Tidak ada pengaduan yang dapat ditampilkan.</td>
    @endif
    </tbody>
</table>
</div>
</div>
</div>
</div>
@endsection