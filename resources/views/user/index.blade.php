@extends ('layouts.backend.admin.master')

@section('content')

<div class="container">
    <div class="card shadow mb-4 my-5">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                List User
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>NIK</th>
                            <th>Telp</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>NIK</th>
                            <th>Telp</th>
                            <th>Role</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if (count($users)>0)
                        @foreach ($users as $key=>$user)
                        <tr>
                            <th scope="row">{{ $key+1}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->nik}}</td>
                            <td>{{$user->telp}}</td>
                            <td>
                                @if ($user->role=='0')
                                <span class="px-3 bg-gradient-primary text-white">
                                    Pengguna
                                </span>
                                @elseif ($user->role == '1')
                                <span class="px-3 bg-gradient-success text-white">
                                    Petugas
                                </span>
                                @else
                                <span class="px-3 bg-gradient-info text-white">
                                    Admin
                                </span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <td>Tidak ada User yang dapat ditampilkan.</td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection