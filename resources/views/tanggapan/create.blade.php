@extends('layouts.backend.admin.master')
@section('content')
<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-success">
    {{Session::get('message')}}
    </div> @endif <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
    <form action="{{route('tanggapan.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header"><b>Beri Tanggapan</b></div>
            <div class="card-body">
                <input type="hidden" name="pengaduan_id" value="{{$pengaduan->id}}">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                <div class="form-group">
                    <label>Tanggal Tanggapan</label>
                    <input type="date" name="tgl_tanggapan"
                        class="form-control @error('tgl_tanggapan') is-invalid @enderror">
                    @error('tgl_tanggapan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Tanggapan</label>
                    <textarea name="tanggapan" class="form-control @error('tanggapan') is-invalid @enderror"></textarea>
                    @error('tanggapan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                        <option value="">Pilih Status</option>
                        <option value="0">Pending</option>
                        <option value="Proses">Proses</option>
                        <option value="Selesai">Selesai</option>
                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>

@endsection




















































<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="225.000000pt" height="225.000000pt" viewBox="0 0
    225.000000 225.000000" preserveAspectRatio="xMidYMid meet">

    <g transform="translate(0.000000,225.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"> <path
        d="M945 1945 c-335 -73 -603 -340 -721 -720 -10 -33 -36 -82 -57 -110 -49 -65 -124 -218 -133 -272 -5 -35 -3 -43 15 -52 21 -12 105 -6 148 10 19 7 24 4 29 -19 3 -15 10 -44 16 -65 7 -28 6 -43 -3 -53 -10 -12 -9 -16 9 -20 11 -3 26 -19 33 -35 6 -16 34 -53 61 -82 l50 -52 -7 -69 c-13 -133 -70 -272 -143 -349 -44 -46 -33 -47 38 -4 49 29 139 121 129 131 -2 3 -22 -17 -44 -44 -39 -47 -73 -75 -81 -67 -2 2 9 28 26 58 40 71 78 192 86 273 l7 65 41 -28 c137 -94 285 -136 526 -148 58 -3 111 -10 119 -17 11 -8 13 -8 8 1 -11 17 43 25 143 20 47 -2 76 -1 65 4 -11 4 -37 8 -57 8 l-37 1 24 25 c29 28 32 70 8 97 -9 11 -11 18 -5 18 7 0 12 6 12 13 0 8 9 22 19 31 18 16 20 16 34 -4 18 -25 45 -21 129 21 51 25 57 26 61 11 4 -16 5 -16 6 0 0 10 29 46 64 80 34 35 69 77 76 93 8 17 36 53 62 80 49 52 99 139 99 171 -1 11 -8 -1 -17 -26 -20 -58 -74 -131 -123 -168 -22 -16 -37 -32 -34 -35 8 -8 -47 -85 -88 -123 -18 -17 -53 -43 -77 -57 -36 -21 -47 -23 -63 -14 -17 10 -23 8 -44 -18 l-25 -30 -18 23 c-25 28 -27 28 -58 -9 l-26 -30 -32 31 -33 32 -22 -33 -23 -32 -27 34 c-27 32 -28 33 -54 16 -14 -10 -26 -20 -26 -23 0 -4 12 1 26 11 14 9 27 15 27 13 1 -2 11 -13 21 -25 l19 -23 -37 0 c-29 0 -46 9 -82 42 -40 37 -47 40 -55 25 -6 -9 -16 -17 -23 -17 -17 0 -123 70 -163 108 -39 37 -45 68 -10 58 12 -3 40 -9 62 -13 l39 -6 -38 33 c-47 42 -83 97 -113 175 -16 41 -21 49 -17 25 10 -52 57 -140 99 -183 l37 -38 -29 7 c-51 11 -128 50 -168 85 -34 28 -36 29 -15 5 14 -15 43 -39 66 -52 36 -21 42 -31 53 -78 17 -77 73 -188 122 -241 45 -49 43 -56 -9 -25 -43 27 -50 25 -23 -4 14 -15 29 -22 39 -19 11 5 13 3 7 -6 -21 -35 -146 21 -213 94 -25 27 -42 42 -39 32 4 -10 7 -23 7 -28 0 -5 5 -8 11 -6 6 1 14 -4 17 -12 3 -8 0 -11 -7 -7 -7 5 -9 1 -5 -8 13 -34 -17 -13 -61 41 -54 65 -81 116 -106 193 -10 30 -18 48 -18 39 -2 -31 39 -130 74 -183 41 -62 111 -130 125 -121 6 4 10 1 10 -5 0 -31 -127 38 -182 99 -39 44 -126 188 -116 195 1 1 24 15 50 29 26 15 57 42 70 60 19 28 15 26 -30 -15 -29 -26 -77 -56 -108 -67 -83 -31 -92 -28 -49 20 46 51 92 148 100 209 4 31 3 39 -4 25 -7 -16 -10 -10 -14 30 -2 28 -3 17 -1 -23 2 -56 -2 -84 -18 -123 -30 -71 -41 -50 -46 83 -9 229 67 456 207 618 161 187 332 285 560 320 81 13 108 10 231 -27 160 -47 306 -138 420 -260 136 -145 195 -286 220 -524 9 -92 4 -187 -10 -172 -18 19 -40 115 -46 198 -4 50 -11 101 -15 115 -5 15 -6 -4 -3 -45 14 -195 40 -279 109 -349 l38 -38 -34 7 c-40 9 -101 38 -149 72 l-35 25 36 -34 37 -33 -19 -79 c-32 -131 -127 -294 -163 -280 -8 3 -17 0 -21 -5 -3 -6 -10 -9 -14 -7 -4 3 -23 -8 -42 -24 l-34 -29 42 19 c49 23 57 24 47 7 -8 -12 19 8 69 52 l27 25 0 -62 c0 -77 37 -198 84 -272 60 -95 19 -72 -60 33 -24 33 -44 57 -44 54 0 -14 29 -72 36 -72 5 0 26 -19 48 -43 35 -39 83 -72 102 -72 3 0 -9 17 -26 37 -68 77 -130 246 -130 353 0 49 4 58 32 85 58 55 107 125 129 185 l21 59 46 -6 45 -6 -38 34 c-35 33 -37 37 -30 78 6 34 10 41 23 35 113 -48 138 -44 136 25 -1 55 -68 188 -137 271 -34 41 -61 85 -72 120 -30 95 -112 242 -177 319 -124 147 -333 289 -502 340 -79 24 -197 27 -291 6z m-319 -211 c-7 -28 -60 -64 -93 -64 -35 0 -28 13 35 71 59 54 73 52 58 -7z m944 7 l35 -30 -26 -1 c-33 0 -79 35 -79 61 0 24 16 17 70 -30z m323 -993 c15 -12 13 -20 -17 -99 -29 -78 -70 -147 -88 -148 -4 -1 6 27 22 62 16 34 35 92 42 130 7 37 15 67 18 67 4 0 14 -6 23 -12z m-1033 -236 c72 -39 115 -52 204 -61 52 -5 72 -4 70 4 -3 6 4 20 16 30 19 18 21 18 40 0 11 -10 19 -23 17 -29 -2 -6 6 -16 17 -21 15 -8 21 -20 21 -45 0 -27 -6 -39 -33 -56 -50 -34 -251 -44 -344 -18 -25 7 -22 24 4 24 21 0 20 2 -9 33 -52 56 -133 191 -133 224 0 2 17 -9 38 -25 20 -16 62 -43 92 -60z m116 -30 c-2 -1 -16 2 -31 8 -23 9 -25 13 -14 26 11 14 15 13 30 -8 10 -12 16 -24 15 -26z m413 17 c-22 -14 -33 -10 -19 6 7 8 17 12 22 9 6 -4 5 -10 -3 -15z m-704 -125 c17 -13 42 -28 55 -34 21 -9 19 -10 -15 -4 -22 3 -51 16 -66 30 -14 13 -29 21 -33 17 -4 -4 -4 0 0 10 7 18 12 16 59 -19z" />
    <path d="M1134 384 c-18 -14 -18 -15 4 -4 12 6 22 13 22 15 0 8 -5 6 -26 -11z"/> <path d="M1174 381 c5 -7 0 -19 -10
        -27 -18 -14 -18 -14 4 -4 24 12 28 25 10 36 -7 5 -8 3 -4 -5z"/> <path
        d="M1020 1720 c-16 -5 -2 -6 35 -3 33 3 62 7 64 9 8 7 -74 2 -99 -6z" />
    <path d="M1173 1723 c9 -2 25 -2 35 0 9 3 1 5 -18 5 -19 0 -27 -2 -17 -5z"/> <path d="M1238 1713 c7 -3 16 -2 19 1 4 3
        -2 6 -13 5 -11 0 -14 -3 -6 -6z"/> <path
        d="M930 1696 c-168 -62 -359 -220 -465 -386 -45 -69 -95 -186 -94 -217 0 -10 10 11 23 47 28 81 57 138 103 201 29 41 38 47 53 39 27 -14 26 -15 55 39 20 36 32 47 45 44 16 -4 37 15 66 63 11 17 14 17 35 5 21 -12 24 -12 39 10 40 61 43 63 77 45 l32 -16 21 36 c12 19 25 33 29 32 66 -34 61 -35 92 2 l29 35 26 -32 c14 -18 30 -33 36 -33 7 0 24 15 39 33 l27 32 36 -34 36 -35 25 24 c14 13 26 22 28 19 56 -80 57 -81 85 -63 25 16 26 16 41 -6 37 -56 49 -66 62 -52 19 18 24 16 53 -29 20 -29 32 -38 45 -34 12 4 27 -7 50 -35 27 -34 35 -39 47 -29 21 17 36 0 89 -102 50 -94 61 -101 16 -9 -54 109 -114 180 -216 257 -48 36 -82 54 -41 21 92 -72 148 -122 153 -134 12 -31 -9 -26 -45 9 -25 24 -44 36 -54 32 -12 -5 -24 7 -43 40 -27 44 -28 45 -47 28 -12 -11 -22 -13 -26 -7 -4 6 -18 27 -30 47 l-24 37 -28 -20 -28 -20 -27 40 c-15 22 -31 40 -35 40 -4 0 -18 -9 -31 -19 l-24 -20 -36 35 -36 35 -28 -36 -27 -37 -38 37 -37 36 -24 -35 c-28 -41 -31 -42 -71 -18 -26 15 -30 15 -38 2 -29 -50 -36 -54 -70 -40 -28 12 -33 11 -41 -2 -4 -8 -17 -25 -27 -39 -18 -21 -23 -22 -46 -11 -15 7 -24 16 -21 22 11 18 145 93 208 116 34 13 55 23 47 23 -8 0 -31 -6 -50 -13z m-210 -141 c0 -3 -12 -23 -27 -46 -18 -28 -32 -39 -46 -37 -15 2 -28 -9 -47 -42 -14 -25 -30 -44 -35 -43 -27 5 -10 33 60 99 71 67 95 84 95 69z" />
    <path d="M1326 1687 c33 -13 92 -40 130 -60 38 -21 60 -30 49 -21 -29 23 -174 92 -210 99 -16 3 -3 -5 31 -18z"/> <path
        d="M1348 1389 c-3 -63 -8 -123 -12 -134 l-7 -20 10 20 c5 11 12 33 16 48 3 18 10 25 18 21 9 -5 9 -4 0 7 -8 7 -13
        37 -12 69 0 40 3 50 9 35 5 -11 9 -15 9 -9 1 7 -5 26 -13 44 -13 31 -14 27 -18 -81z"/> <path
        d="M911 1440 c-1 -19 -4 -46 -6 -60 -5 -21 -4 -22 3 -5 8 17 9 16 15 -10 5 -31 -8 -58 -27 -53 -6 2 -24 -9 -40 -24 -20 -20 -23 -26 -10 -21 18 7 18 6 3 -17 -11 -17 -28 -26 -50 -28 -26 -3 -31 -1 -22 10 6 7 14 24 17 38 7 24 6 24 -9 -2 -9 -16 -23 -28 -31 -28 -14 0 -14 -2 0 -16 28 -27 77 -14 106 28 14 21 35 45 48 54 22 15 23 14 42 -30 12 -29 26 -46 37 -46 16 0 16 1 0 13 -23 17 -47 79 -62 162 -9 50 -13 60 -14 35z" />
    <path d="M1381 1394 c0 -11 3 -14 6 -6 3 7 2 16 -1 19 -3 4 -6 -2 -5 -13z"/> <path d="M1493 1371 c0 -11 5 -18 9 -15 4
        3 5 11 1 19 -7 21 -12 19 -10 -4z"/> <path
        d="M728 1358 c-29 -45 -49 -112 -52 -172 -2 -34 -2 -45 1 -26 3 26 19 50 60 92 31 31 60 55 64 53 6 -4 19 18 19 33 0 4 -30 -23 -66 -58 -66 -65 -66 -65 -60 -32 3 19 17 56 31 83 25 52 27 64 3 27z" />
    <path d="M1397 1305 c3 -38 7 -73 10 -77 2 -5 24 -8 48 -8 53 0 64 16 54 75 -6 40 -6 40 -8 -12 l-1 -53 -45 0 c-44 0
        -45 1 -46 33 0 17 -4 50 -9 72 -7 31 -7 24 -3 -30z"/> <path d="M1550 1367 c0 -4 11 -29 24 -55 31 -63 48 -116 56
        -182 7 -51 7 -52 9 -14 1 48 -29 149 -64 214 -13 25 -24 41 -25 37z"/> <path
        d="M1237 1295 c3 -33 7 -62 9 -64 7 -8 2 74 -6 99 -5 16 -6 2 -3 -35z" />
    <path d="M1526 1317 c3 -10 9 -15 12 -12 3 3 0 11 -7 18 -10 9 -11 8 -5 -6z"/> <path d="M1214 1264 c-6 -19 -8 -34 -3
        -34 8 0 24 59 17 65 -2 2 -8 -12 -14 -31z"/> <path
        d="M1427 1289 c7 -7 15 -10 18 -7 3 3 -2 9 -12 12 -14 6 -15 5 -6 -5z" />
    <path d="M1541 1287 c-3 -23 30 -77 46 -76 15 1 15 2 2 6 -9 2 -24 21 -32 41 -8 20 -15 33 -16 29z"/> <path d="M1053
        1223 c26 -2 67 -2 90 0 23 2 2 3 -48 3 -49 0 -68 -1 -42 -3z"/> <path
        d="M1273 1223 c9 -2 25 -2 35 0 9 3 1 5 -18 5 -19 0 -27 -2 -17 -5z" />
    <path d="M562 1170 c0 -14 2 -19 5 -12 2 6 2 18 0 25 -3 6 -5 1 -5 -13z"/> <path d="M1713 1099 c-7 -30 -26 -73 -43 -96
        -16 -24 -26 -43 -22 -43 22 0 87 142 80 176 -2 9 -9 -8 -15 -37z"/> <path
        d="M570 1129 c0 -24 29 -89 56 -126 13 -17 24 -42 25 -55 0 -21 1 -21 8 -3 6 14 -1 32 -25 65 -17 25 -39 65 -47 90 -9 25 -16 38 -17 29z" />
    <path d="M673 1060 c0 -30 2 -43 4 -27 2 15 2 39 0 55 -2 15 -4 2 -4 -28z"/> <path d="M690 1072 c0 -21 4 -22 103 -22
        57 0 106 -3 110 -6 3 -3 -27 -28 -66 -55 -114 -76 -132 -93 -115 -106 10 -9 40 6 138 72 69 47 126 91 128 98 4 21
        -27 27 -170 34 -126 6 -128 6 -128 -15z"/> <path
        d="M1400 1081 c-57 -8 -66 -33 -20 -59 18 -9 72 -40 120 -68 68 -40 90 -49 94 -38 4 10 -19 31 -70 64 -41 27 -85 52 -97 56 -19 7 -16 9 18 15 22 4 66 8 98 8 44 1 57 4 57 16 0 12 -15 15 -77 13 -43 0 -98 -4 -123 -7z" />
    <path d="M362 1045 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/> <path d="M1632 1035 c-1 -22 -5 -51 -7 -65
        l-6 -25 11 25 c6 13 9 42 7 65 l-4 40 -1 -40z"/> <path
        d="M383 1005 c0 -33 2 -45 4 -27 2 18 2 45 0 60 -2 15 -4 0 -4 -33z" />
    <path d="M1648 903 c-7 -51 -35 -119 -67 -159 -9 -11 -1 -4 17 15 35 38 66 123 60 168 -2 20 -5 12 -10 -24z"/> <path
        d="M1041 921 c-25 -25 -36 -75 -21 -98 10 -16 10 -16 5 4 -9 31 5 75 21 69 7 -3 16 -1 19 4 3 5 12 7 19 4 8 -3 16
        -1 20 4 6 10 -24 9 -41 -1 -6 -4 -14 -3 -18 3 -3 5 7 12 22 16 45 10 50 12 21 13 -16 1 -37 -8 -47 -18z"/> <path
        d="M1249 921 c-14 -10 -34 -21 -44 -24 -11 -2 -6 -3 10 0 17 2 53 5 82 7 47 3 52 1 57 -20 4 -13 4 -34 1 -47 -5 -20 -12 -22 -53 -21 -26 0 -57 6 -70 13 -20 10 -29 9 -62 -8 -21 -11 -40 -18 -43 -15 -2 2 -10 -2 -17 -11 -17 -21 -7 -19 51 10 l50 26 36 -22 c29 -18 37 -19 44 -8 8 12 10 12 19 -1 22 -35 68 35 56 85 -7 27 -32 55 -49 54 -9 0 -8 -2 1 -6 22 -9 13 -20 -18 -20 -31 0 -40 11 -17 20 7 3 8 6 1 6 -6 1 -22 -8 -35 -18z" />
    <path d="M1134 915 c8 -8 21 -15 28 -15 8 1 6 6 -6 15 -26 20 -42 19 -22 0z" />
    <path d="M1065 800 c5 -9 1 -10 -16 -6 -21 6 -22 6 -6 -5 13 -7 22 -8 29 -1 6 6 6 12 -3 17 -8 6 -10 4 -4 -5z" />
    <path
        d="M1697 503 c-4 -12 -19 -38 -33 -58 -14 -21 -23 -39 -21 -42 3 -2 14 11 27 29 l22 33 -6 -30 -5 -30 15 34 c8 18 14 45 12 60 -3 25 -4 25 -11 4z" />
    <path
        d="M1459 443 c-14 -29 -22 -53 -18 -53 4 0 24 19 43 42 42 48 46 35 16 -46 -20 -53 -22 -55 -71 -65 -27 -6 -62 -11 -77 -12 l-27 -1 25 -7 c18 -5 25 -14 25 -31 0 -21 -10 -29 -66 -51 -36 -15 -85 -39 -107 -54 l-41 -27 -33 20 c-18 11 -66 32 -106 46 -84 30 -134 54 -144 70 -5 8 -8 7 -8 -2 0 -7 -11 -28 -24 -45 -31 -41 -83 -151 -92 -194 l-6 -33 119 0 120 0 12 83 c13 87 23 113 38 104 6 -4 4 -35 -3 -79 -21 -119 -33 -108 121 -108 155 0 147 -7 120 105 -18 75 -18 85 -1 85 8 0 19 -28 30 -78 10 -42 20 -85 23 -94 4 -15 17 -18 89 -18 46 0 84 2 84 5 0 17 -56 147 -77 180 -15 22 -30 56 -33 76 l-7 36 72 16 c39 10 78 17 87 17 8 0 15 6 16 13 1 6 4 26 8 42 l6 30 -35 -37 c-42 -46 -53 -48 -32 -8 8 16 18 51 21 77 l5 48 -30 -35 c-32 -35 -39 -35 -20 1 6 11 9 23 7 27 -2 4 -15 -16 -29 -45z m95 -78 c-4 -8 -11 -15 -16 -15 -6 0 -5 6 2 15 7 8 14 15 16 15 2 0 1 -7 -2 -15z" />
    <path d="M1278 463 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z" />
    <path d="M1111 243 c7 -10 15 -20 16 -22 2 -2 3 3 3 11 0 9 -7 19 -16 22 -15 6 -15 4 -3 -11z" />
    <path d="M1183 245 c-3 -9 -3 -18 -1 -21 3 -3 8 4 11 16 6 23 -1 27 -10 5z" />
    <path d="M1148 233 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z" />
    <path d="M420 216 c-8 -10 -8 -21 -2 -32 8 -14 10 -11 14 15 5 36 5 36 -12 17z" />
    <path d="M1162 185 c-14 -31 -15 -35 -3 -35 8 0 23 51 17 58 -2 1 -8 -9 -14 -23z" />
    <path d="M1100 190 c0 -5 5 -10 11 -10 5 0 7 5 4 10 -3 6 -8 10 -11 10 -2 0 -4 -4 -4 -10z" />
    <path d="M1135 190 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0 -7 -4 -4 -10z" />
    <path d="M411 145 c-1 -11 -10 -48 -20 -83 -11 -34 -16 -60 -11 -57 12 7 43 131 37 146 -3 9 -6 7 -6 -6z" />
    <path
        d="M514 79 c-23 -43 -38 -79 -33 -79 4 0 17 20 29 45 12 25 25 45 30 45 7 0 23 60 17 66 -1 1 -21 -33 -43 -77z" />
    <path d="M710 147 c0 -1 -4 -18 -10 -36 -5 -19 -6 -30 -1 -25 10 11 24 64 16 64 -3 0 -5 -1 -5 -3z" />
    <path d="M1630 145 c0 -5 5 -17 10 -25 5 -8 10 -10 10 -5 0 6 -5 17 -10 25 -5 8 -10 11 -10 5z" />
    <path d="M1656 78 c13 -43 33 -75 47 -75 10 0 5 14 -16 49 -33 53 -42 60 -31 26z" />
    <path d="M1770 98 c-1 -14 41 -101 46 -95 3 3 -6 27 -20 54 -14 26 -25 45 -26 41z" />
    <path d="M517 21 c-4 -17 -3 -21 5 -13 5 5 8 16 6 23 -3 8 -7 3 -11 -10z" />
    </g>
    </svg>