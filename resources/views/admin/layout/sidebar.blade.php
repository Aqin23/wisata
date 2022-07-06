<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Jember Travel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">JT</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Nav::isResource('admin') }}">
                <a href="{{ url('/dashboard') }}" class="nav-link "><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>

            <li class="{{ Nav::isResource('paketwisata') }}">
                <a href="{{ url('/paketwisata') }}" class="nav-link "><i class="fas fa-bicycle"></i><span>Paket
                        Wisata</span></a>

            </li>
            <li class="{{ Nav::isResource('detailwisata') }}">
                <a href="{{ url('/detailwisata') }}" class="nav-link "><i class="fas fa-pencil-ruler"></i><span>Detail
                        Paket</span></a>

            </li>

            <li class="{{ Nav::isResource('booking') }}">
                <a href="{{ route('managePesanan') }}" class="nav-link "><i
                        class="fas fa-money-bill"></i><span>Pesanan</span></a>

            </li>

            @if (empty(Auth::user()) || Auth::user()->role == 'admin')
                <li class="{{ Nav::isResource('user') }}">
                    <a href="{{ url('/user') }}" class="nav-link "><i class="fas fa-users"></i><span>User</span></a>

                </li>
            @endif
        </ul>


    </aside>
</div>
