<div class="main-sidebar sidebar-style-2" style="background-color: #eccda4;">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html" style="color: #4B3621;">Halaman Guru</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html" style="color: #4B3621;">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header" style="color: #4B3621;">Materi</li>

            <!-- Perangkat Jaringan -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown text-dark"><i class="fas fa-network-wired text-dark"></i>
                    <span>Perangkat Jaringan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link text-dark" href="{{ route('guru.perangkatjaringan') }}">Lihat Materi</a></li>
                </ul>
            </li>

            <!-- Model OSI Layer -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown text-dark"><i class="fas fa-layer-group text-dark"></i>
                    <span>Model OSI Layer</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link text-dark" href="{{ route('guru.gurumodelosi') }}">Lihat Materi</a></li>
                </ul>
            </li>

            <!-- TCP/IP -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown text-dark">
                    <i class="fas fa-network-wired text-dark"></i> <span>TCP/IP</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link text-dark" href="{{ route('guru.gurutcpip') }}">Lihat Materi</a></li>
                </ul>
            </li>


            <!-- Topologi Jaringan -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown text-dark"><i
                        class="fas fa-project-diagram text-dark"></i> <span>Topologi Jaringan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link text-dark" href="{{ route('guru.gurutopologi') }}">Lihat Materi</a></li>
                </ul>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('guru.dashboard', ['materi' => 'evaluasi', 'nama' => '']) }}#hasil-belajar"
                class="btn btn-dark btn-lg btn-block btn-icon-split">
                <i class="fas fa-clipboard-check"></i> Hasil Evaluasi
            </a>
        </div>
    </aside>
</div>
