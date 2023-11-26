<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    
</head>
<body>
    <div class="title text-center mb-5">
        <h2>Laporan Layanan Pengaduan Masyarakat</h2>
        <h5>Jakarta Barat</h5>
    </div>
    <table style="border: 1px solid black; text-align: center;" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th style="border: 1px solid black;">No</th>
                <th style="border: 1px solid black;">Tanggal</th>
                <th style="border: 1px solid black;">Pelapor</th>
                <th style="border: 1px solid black;">Isi Laporan</th>
                <th style="border: 1px solid black;">Status</th>
            </tr>
        </thead>
        <tbody>
            @if (count($pengaduans)>0)
            @foreach ($pengaduans as $key=>$pengaduan)
            <tr>
                <th style="border: 1px solid black;" scope="row">{{ $key+1}}</th>
                <td style="border: 1px solid black;">{{$pengaduan->tgl_pengaduan}}</td>
                <td style="border: 1px solid black;">{{$pengaduan->user->name}}</td>
                <td style="border: 1px solid black;">{{$pengaduan->isi_laporan}}</td>
                <td style="border: 1px solid black;">
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
            </tr>
            @endforeach
            @else
            <td>Tidak ada pengaduan yang dapat ditampilkan.</td>
            @endif
        </tbody>
    </table>
</body>
</html>