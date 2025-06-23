<!-- Sidebar Container -->
<div class="main-sidebar sidebar-style-2" style="background-color: #D2B48C; width: 250px;">
    <aside id="sidebar-wrapper">
        <!-- Logo -->
        <div class="sidebar-brand">
            <img src="https://cdn-icons-png.flaticon.com/512/1006/1006771.png" alt="Computer Icon" style="width: 40px;" />
        </div>



        <ul class="sidebar-menu">
            <li class="menu-header" style="color: #4B3621; font-size: 18px;">Menu</li>

            <!-- Tujuan Pembelajaran (Aktif) -->
            <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown" style="font-size: 17px;">
                    <i class="fas fa-bullseye"></i>
                    <span class="sidebar-text">Tujuan</span>
                </a>
                <ul class="dropdown-menu" style="display: block;">
                    <li>
                        <a class="nav-link" href="#tj">
                            <span class="sidebar-text">Tujuan Pembelajaran</span>
                        </a>
                    </li>
                </ul>

            </li>


            <!-- Perangkat Jaringan (Tidak Aktif) -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" style="font-size: 17px;">
                    <i class="fas fa-network-wired"></i>
                    <span class="sidebar-text">Perangkat Jaringan</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/perangkat_jaringan"><span class="sidebar-text">Mengenal
                                Komponen</span></a></li>
                    <li><a class="nav-link" href="/perangkat-jaringan"><span class="sidebar-text">Perangkat
                                Jaringan</span></a></li>
                    <li><a class="nav-link" href="/LatihanPerangkatJaringan"><span
                                class="sidebar-text">Latihan</span></a></li>
                </ul>
            </li>

            <!-- OSI Model -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" style="font-size: 17px;">
                    <i class="fas fa-layer-group"></i>
                    <span class="sidebar-text">OSI Model</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/model-osi"><span class="sidebar-text">Pendahuluan</span></a></li>
                    <li><a class="nav-link" href="/model-osi"><span class="sidebar-text">Jenis Layer OSI</span></a></li>
                    <li><a class="nav-link" href="/latihan_osi"><span class="sidebar-text">Latihan</span></a></li>
                </ul>
            </li>

            <!-- TCP/IP -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" style="font-size: 17px;">
                    <i class="fas fa-sitemap"></i>
                    <span class="sidebar-text">TCP/IP</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/tcpip"><span class="sidebar-text">Pengenalan</span></a></li>
                    <li><a class="nav-link" href="/tcpip"><span class="sidebar-text">Cara Kerja TCP/IP</span></a></li>
                    <li><a class="nav-link" href="/latihantcpip"><span class="sidebar-text">Latihan</span></a></li>
                </ul>
            </li>

            <!-- Topologi Jaringan -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" style="font-size: 17px;">
                    <i class="fas fa-project-diagram"></i>
                    <span class="sidebar-text">Topologi Jaringan</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/topologi-jaringan"><span class="sidebar-text">Apa itu
                                Topologi?</span></a></li>
                    <li><a class="nav-link" href="/topologi-jaringan"><span class="sidebar-text">Jenis Topologi
                                Jaringan</span></a></li>
                    <li><a class="nav-link" href="/latihantopologi"><span class="sidebar-text">Latihan</span></a></li>
                </ul>
            </li>
        </ul>

        <!-- Tombol Evaluasi -->
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="/evaluasi" class="btn btn-dark btn-lg btn-block btn-icon-split">
                <i class="fas fa-check-circle"></i> Evaluasi
            </a>
        </div>
    </aside>
</div>

<!-- CSS Tambahan -->
<style>
    .sidebar-text {
        display: inline-block;
        max-width: 180px;
        white-space: normal !important;
        word-wrap: break-word;
        color: #4B3621;
    }

    .sidebar-menu .nav-link {
        align-items: flex-start;
    }

    .dropdown-menu {
        word-wrap: break-word;
        white-space: normal;
    }

    /* Highlight aktif */
    .sidebar-menu .nav-item.active>.nav-link {
        background-color: #C19A6B;
        color: #4B3621 !important;
        border-radius: 5px;
        font-weight: bold;
    }

    .sidebar-menu .nav-item.active>.nav-link i,
    .sidebar-menu .nav-item.active>.nav-link .sidebar-text {
        color: #4B3621 !important;
    }

    .dropdown-menu .nav-link.active {
        background-color: #C19A6B;
        color: #4B3621 !important;
        font-weight: bold;
        border-radius: 5px;
    }
</style>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
