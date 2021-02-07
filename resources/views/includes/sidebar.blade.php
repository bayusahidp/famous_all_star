<!-- Left Panel -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
        <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('dist/img/kakakelasLogo.png') }}" alt="kakakelas Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Kakakelas.com</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/avatar0.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ $account->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link {{ empty(Request::segment(1)) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    @if ($account->level == 1)
                        <li class="nav-header">ADMIN / PENGGUNA</li>
                        <li class="nav-item">
                            <a href="{{ route('token.index') }}" class="nav-link {{ Request::segment(1) == 'token' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-key"></i>
                                <p>
                                    Daftar Token
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link {{ Request::segment(1) == 'user' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Daftar User
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('transaksi.index') }}" class="nav-link {{ Request::segment(1) == 'transaksi' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-cash-register"></i>
                                <p>
                                    Daftar Transaksi
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">MASTER</li>
                        <li class="nav-item">
                            <a href="{{ route('produk.index') }}" class="nav-link {{ Request::segment(1) == 'produk' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-boxes"></i>
                                <p>
                                    Daftar Produk
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('soal.index') }}" class="nav-link {{ Request::segment(1) == 'soal' || Request::segment(1) == 'detailSoal' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-file-signature"></i>
                                <p>
                                    Daftar Soal
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kategori.index') }}" class="nav-link {{ Request::segment(1) == 'kategori' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Daftar Kategori
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">LAPORAN</li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Lihat Nilai
                                </p>
                            </a>
                        </li>
                    @else
                        <li class="nav-header">PENGGUNA</li>
                        <li class="nav-item">
                            <a href="{{ route('transaksi.index') }}" class="nav-link {{ Request::segment(1) == 'transaksi' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-cash-register"></i>
                                <p>
                                    Daftar Transaksi
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">LAPORAN</li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Lihat Nilai
                                </p>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        <!-- /.sidebar-menu -->
        </div>
    <!-- /.sidebar -->
</aside>
<!-- /#left-panel -->