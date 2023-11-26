@include('layouts.backend.admin.sidebar')
@include('layouts.backend.admin.navbar')
    <div class="container-fluid">
        @yield('content')
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@include('layouts.backend.admin.footer')
