<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('dashboard.index') }}"><img src="{{ asset('images/logo_desa_cakrawala.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item">
                    <a href="{{ route('landing.beranda') }}" class='sidebar-link' target="_blank">
                        <i class="bi bi-house-door"></i>
                        <span>Halaman Beranda</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Route::is('dashboard.index') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.index') }}" class='sidebar-link '>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ Route::is('site_setting.index') ? 'active' : '' }}">
                    <a href="{{ route('site_setting.index') }}" class='sidebar-link '>
                        <i class="bi bi-info-square"></i>
                        <span>Site Setting</span>
                    </a>
                </li>
                <li class="sidebar-item has-sub {{ request()->routeIs('program.show') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Program</span>
                    </a>
                    <ul class="submenu {{ request()->routeIs('program.show') ? 'active' : '' }}">
                        @foreach ($program_sidebar as $item)
                            <li class="submenu-item {{ request()->routeIs('program.show') && request()->route('id') == $item->id ? 'active' : '' }}">
                                <a href="{{ route('program.show', $item->id) }}">{{ $item->nama_program }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('dashboard.index') }}" class='sidebar-link '>
                        <i class="bi bi-box-seam"></i>
                        <span>Paket Wisata</span>
                    </a>
                </li>

                <li class="sidebar-title mt-4">Akun</li>
                <li class="sidebar-item  ">
                    <a href="{{ route('dashboard.index') }}" class='sidebar-link'>
                        <i class="bi bi-person-circle"></i>
                        <span>Setting Akun</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="{{ route('dashboard.index') }}" class='sidebar-link'>
                        <i class="bi bi-gear"></i>
                        <span>Ganti Password</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="{{ route('logout') }}" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
