@php
    $menus = [
        (object) [
            "title" => "Dashboard",
            "path" => "/",
            "icon" => "fas fa-th",
            "submenu" => []
        ],
        (object) [
            "title" => "Manajemen Data PPL",
            "path" => "manajemen",
            "icon" => "fas fa-th",
            "submenu" => [
                (object) ["title" => "Data DPL", "path" => "manajemen/datadpl"],
                (object) ["title" => "Data Mahasiswa", "path" => "manajemen/datamahasiswa"],
                (object) ["title" => "Data Sekolah", "path" => "manajemen/datasekolah"],
                (object) ["title" => "Data Pamong", "path" => "manajemen/datapamong"]
            ]
        ],
        (object) [
            "title" => "Kelola Pengaduan",
            "path" => "pengaduan",
            "icon" => "fas fa-th",
            "submenu" => []
        ],
        (object) [
            "title" => "Laporan dan Cetak Data",
            "path" => "datalaporan",
            "icon" => "fas fa-th",
            "submenu" => [
                (object) ["title" => "Data DPL", "path" => "manajemen/datadpl"],
            ]
        ], 
    ];
@endphp


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('templates/index3.html') }}" class="brand-link">
        <img
            src="{{ asset('templates/dist/img/AdminLTELogo.png') }}"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
        />
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img
                    src="{{ asset('templates/dist/img/user2-160x160.jpg') }}"
                    class="img-circle elevation-2"
                    alt="User Image"
                />
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

            <!-- SEARCH FORM -->
    <form class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input
                class="form-control form-control-sidebar"
                type="search"
                placeholder="Search"
                aria-label="Search"
            />
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </form>
    
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @foreach ($menus as $menu)
                <li class="nav-item {{ request()->is($menu->path.'*') ? 'menu-open' : '' }}">
                    <a href="{{ count($menu->submenu) > 0 ? '#' : url($menu->path) }}" class="nav-link {{ request()->is($menu->path) ? 'active' : '' }}">
                        <i class="nav-icon {{ $menu->icon }}"></i>
                        <p>
                            {{ $menu->title }}
                            @if(count($menu->submenu) > 0)
                                <i class="right fas fa-angle-left"></i>
                            @endif
                        </p>
                    </a>
                    @if(count($menu->submenu) > 0)
                    <ul class="nav nav-treeview">
                        @foreach ($menu->submenu as $submenu)
                        <li class="nav-item">
                            <a href="{{ url($submenu->path) }}" class="nav-link {{ request()->is($submenu->path) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ $submenu->title }}</p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
        </nav>        
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>