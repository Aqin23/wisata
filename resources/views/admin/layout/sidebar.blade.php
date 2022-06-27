<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Nav::isResource('admin') }}">
                <a href="{{ url('/admin') }}" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>

            <li class="{{ Nav::isResource('paketwisata') }}">
                <a href="{{ url('/paketwisata') }}" class="nav-link "><i class="fas fa-fire"></i><span>Paket
                        Wisata</span></a>

            </li>
            <li class="{{ Nav::isResource('detailwisata') }}">
                <a href="{{ url('/detailwisata') }}" class="nav-link "><i class="fas fa-fire"></i><span>Detail
                        Paket</span></a>

            </li>


        </ul>


    </aside>
</div>
