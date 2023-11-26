
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <h2 class="nav-item">
                @if (Auth::user()->role == 0)
                    Pengguna
                @elseif (Auth::user()->role == 1)
                    Petugas
                @else
                    Admin
                @endif
            </h2>
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                        <img class="img-profile rounded-circle" src="{{asset('template/img/undraw_profile.svg')}}">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->