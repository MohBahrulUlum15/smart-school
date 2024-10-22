<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        {{-- @if (Auth::check())
            @if (Auth::user()->hasRole('Admin')) --}}
        <li class="nav-heading mb-2">Dashboard</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <i class="bi bi-grid"></i><span>Dashboard</span>
            </a>
        </li>
        <li class="nav-heading mb-2 mt-4">Data</li>

        @if (Auth::check())
            @if (Auth::user()->role->name === 'superadmin')
                {{-- <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#master-nav" data-bs-toggle="collapse" href="">
                        <i class="bi bi-grid"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="master-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('master.index') }}">
                                <i class="bi bi-circle"></i><span>Master Data</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="">
                        <i class="bi bi-people"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('users.index') }}">
                                <i class="bi bi-circle"></i><span>Data User</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#roles-nav" data-bs-toggle="collapse" href="">
                        <i class="bi bi-people"></i><span>Roles</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="roles-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('roles.index') }}">
                                <i class="bi bi-circle"></i><span>Data Role</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#user-roles-nav" data-bs-toggle="collapse"
                        href="">
                        <i class="bi bi-people"></i><span>User Roles</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="user-roles-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('user-roles.index') }}">
                                <i class="bi bi-circle"></i><span>Data User Roles</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user-roles.create') }}">
                                <i class="bi bi-circle"></i><span>Tambah User Roles</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#forms-sekolah" data-bs-toggle="collapse"
                        href="{{ url('dashboard') }}">
                        <i class="bi bi-star-half"></i><span>Sekolah</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="forms-sekolah" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('sekolah.index') }}">
                                <i class="bi bi-circle"></i><span>Data Sekolah</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sekolah.create') }}">
                                <i class="bi bi-circle"></i><span>Tambah Sekolah</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#forms-jurusan" data-bs-toggle="collapse"
                        href="{{ url('dashboard') }}">
                        <i class="bi bi-star-half"></i><span>Jurusan</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="forms-jurusan" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('jurusan.index') }}">
                                <i class="bi bi-circle"></i><span>Data Jurusan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('jurusan.create') }}">
                                <i class="bi bi-circle"></i><span>Tambah Jurusan</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#admin-nav" data-bs-toggle="collapse" href="">
                        <i class="bi bi-people"></i><span>Admin</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="admin-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('admin.index') }}">
                                <i class="bi bi-circle"></i><span>Data Admin</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.create') }}">
                                <i class="bi bi-circle"></i><span>Tambah Admin</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#operator-nav" data-bs-toggle="collapse"
                        href="">
                        <i class="bi bi-people"></i><span>Operator</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="operator-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('operator.index') }}">
                                <i class="bi bi-circle"></i><span>Data Operator</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('operator.create') }}">
                                <i class="bi bi-circle"></i><span>Tambah Operator</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#siswa-nav" data-bs-toggle="collapse" href="">
                        <i class="bi bi-people"></i><span>Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="siswa-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('siswa.index') }}">
                                <i class="bi bi-circle"></i><span>Data Siswa</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('siswa.create') }}">
                                <i class="bi bi-circle"></i><span>Tambah Siswa</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('siswa.reqedit') }}">
                                <i class="bi bi-circle"></i><span>Request Edit</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('siswa.reqdelete') }}">
                                <i class="bi bi-circle"></i><span>Request Delete</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-heading mb-2 mt-4">Lain-lain</li>
                <li class="nav-item">
                    <form id="logout-form" class="nav-link collapsed" data-bs-target="#cetak-nav" method="POST"
                        action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-sign-turn-slight-right"></i>
                            <span>Keluar</span>
                        </x-responsive-nav-link>
                    </form>
                </li>
            @elseif (Auth::user()->role->name === 'admin')
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#operator-nav" data-bs-toggle="collapse"
                        href="">
                        <i class="bi bi-people"></i><span>Operator</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="operator-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('operator.index') }}">
                                <i class="bi bi-circle"></i><span>Data Operator</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('operator.create') }}">
                                <i class="bi bi-circle"></i><span>Tambah Operator</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#siswa-nav" data-bs-toggle="collapse"
                        href="">
                        <i class="bi bi-people"></i><span>Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="siswa-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('siswa.index') }}">
                                <i class="bi bi-circle"></i><span>Data Siswa</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('siswa.create') }}">
                                <i class="bi bi-circle"></i><span>Tambah Siswa</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('siswa.reqedit') }}">
                                <i class="bi bi-circle"></i><span>Request Edit</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('siswa.reqdelete') }}">
                                <i class="bi bi-circle"></i><span>Request Delete</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-heading mb-2 mt-4">Lain-lain</li>
                <li class="nav-item">
                    <form id="logout-form" class="nav-link collapsed" data-bs-target="#cetak-nav" method="POST"
                        action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-sign-turn-slight-right"></i>
                            <span>Keluar</span>
                        </x-responsive-nav-link>
                    </form>
                </li>
            @elseif (Auth::user()->role->name === 'operator')
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#siswa-nav" data-bs-toggle="collapse"
                        href="">
                        <i class="bi bi-people"></i><span>Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="siswa-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('siswa.index') }}">
                                <i class="bi bi-circle"></i><span>Data Siswa</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('siswa.create') }}">
                                <i class="bi bi-circle"></i><span>Tambah Siswa</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-heading mb-2 mt-4">Lain-lain</li>
                <li class="nav-item">
                    <form id="logout-form" class="nav-link collapsed" data-bs-target="#cetak-nav" method="POST"
                        action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-sign-turn-slight-right"></i>
                            <span>Keluar</span>
                        </x-responsive-nav-link>
                    </form>
                </li>
            @endif
        @endif
    </ul>
</aside>
