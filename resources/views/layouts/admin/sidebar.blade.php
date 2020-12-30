<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ route('kategori') }}"><i class="fa fa-list fa-fw"></i> Kategori Wisata</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-street-view fa-fw"></i> Destinasi Wisata<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('addDest') }}">Tambah Destinasi</a>
                    </li>
                    <li>
                        <a href="{{ route('ListDestinasi') }}">Daftar Destinasi</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Profil Pandeglang<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('bupati') }}">Kelola Bupati</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"></i>Tentang Pandeglang</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-hotel fa-fw"></i> Akomodasi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('penginapan') }}">Penginapan</a>
                    </li>
                    <li>
                        <a href="{{ route('transportasi') }}">Transportasi</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
</div>