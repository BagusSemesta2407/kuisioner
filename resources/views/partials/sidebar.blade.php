<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            @if (Auth::user()->role != 'p4mp')
                <a class="nav-link" href="{{ route('admin') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            @else
                <a class="nav-link" href="{{ route('admin-p4mp',['jurusan'=>'semua','tingkat'=>'semua','periode'=>'semua']) }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            @endif
        </li>

        {{-- SIDEBAR P4MP --}}
        @if (Auth::user()->role == 'p4mp')
            <li class="nav-item">
                <a class="nav-link" href="{{ route("kuesioner.kategori",['kategori'=>'semua']) }}">
                    <i class="icon-layout menu-icon"></i>
                    <span class="menu-title">Data Kuesioner</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route("jawaban.kategori",['periode'=>'semua']) }}">
                    <i class="icon-columns menu-icon"></i>
                    <span class="menu-title">Laporan Kuesioner</span>
                </a>
            </li>
        @endif

        {{-- SIDEBAR ADMIN --}}
        @if (Auth::user()->role == 'admin')
            <li class="nav-item">
                <a
                    class="nav-link"
                    data-toggle="collapse"
                    href="#users"
                    aria-expanded="false"
                    aria-controls="users"
                >
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Kelola Users</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="users">
                    <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{ route('user.role',['role'=>'jurusan']) }}"
                                    >Admin Jurusan</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{ route('user.role',['role'=>'p4mp']) }}"
                                    >P4MP</a
                                >
                            </li>
                    </ul>
                </div>
            </li>
        @endif

        {{-- SIDEBAR P4MP --}}
        @if (Auth::user()->role == 'p4mp')
            <li class="nav-item">
                <a
                    class="nav-link"
                    data-toggle="collapse"
                    href="#users"
                    aria-expanded="false"
                    aria-controls="users"
                >
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Kelola Users</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="users">
                    <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{ route('user.mahasiswa',['jurusan'=>'semua','tingkat'=>'semua','periode'=>'semua']) }}"
                                    >Mahasiswa</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{ route('user.jurusan',['jurusan'=>'semua']) }}"
                                    >Jurusan</a
                                >
                            </li>
                    </ul>
                </div>
            </li>
        @endif

        {{-- SIDEBAR JURUSAN --}}
        @if (Auth::user()->role == 'jurusan')
            <li class="nav-item">
                <a
                    class="nav-link"
                    data-toggle="collapse"
                    href="#users"
                    aria-expanded="false"
                    aria-controls="users"
                >
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Kelola Users</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="users">
                    <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="{{ route('user.mahasiswa',['jurusan'=>'semua','tingkat'=>'semua','periode'=>'semua']) }}"
                                    >Mahasiswa</a
                                >
                            </li>
                    </ul>
                </div>
            </li>
        @endif
    </ul>
</nav>
