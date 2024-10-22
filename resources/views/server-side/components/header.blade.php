<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href= "{{ url('dashboard') }}" class="logo d-flex align-items-center">
            <img src="{{ url('assets/server-side/img/logo.png') }}" alt=""> &nbsp;
            <span class="d-none d-lg-block">SMART-School</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#">
                    <img src="{{ url('assets/server-side/img/undraw_Drink_coffee_jdqb.png') }}" alt="Profile"
                        class="rounded-circle">
                    <span class="d-none d-md-block ps-2">{{ Auth::user()->username }}</span>
                </a>

            </li>
        </ul>
    </nav>
</header>
