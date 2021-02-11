<!-- Left Panel -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
        <!-- Brand Logo -->
    <a href="#" class="brand-link">
        {{-- <img src="{{ asset('dist/img/kakakelasLogo.png') }}" alt="kakakelas Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
            <span class="brand-text font-weight-light">Famous All Star</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <img src="{{ asset('dist/img/avatar0.png') }}" class="img-circle elevation-2" alt="User Image"> --}}
            </div>
            <div class="info">
                <a href="{{ route('front') }}" class="d-block">Famous All Star</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('admin.index') }}" class="nav-link {{ Request::segment(1) == 'admin' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Home
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link {{ Request::segment(1) == 'user' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Data User
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">Content</li>
                    <li class="nav-item">
                        <a href="{{ route('categories.index') }}" class="nav-link {{ Request::segment(1) == 'categories' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-key"></i>
                            <p>
                                Category
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('article.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>
                                Article
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        <!-- /.sidebar-menu -->
        </div>
    <!-- /.sidebar -->
</aside>
<!-- /#left-panel -->