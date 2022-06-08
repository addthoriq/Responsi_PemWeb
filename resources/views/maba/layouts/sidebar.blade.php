<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Portal PENMARU</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('beranda') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-home"></i>
            <span>Beranda</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Pribadi & Keluarga
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{Request::is('informasi-pribadi')?'active':''}}">
        <a class="nav-link" href="{{ route('informasi-pribadi') }}">
            <i class="fas fa-address-card"></i>
            <span>Informasi Data Pribadi</span>
        </a>
    </li>
    
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{Request::is('informasi-ayah')||Request::is('informasi-ibu')?'active':''}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Orang Tua</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{Request::is('informasi-ayah')?'active':''}}" href="{{route('informasi-ayah')}}">Data Ayah</a>
                <a class="collapse-item {{Request::is('informasi-ibu')?'active':''}}" href="{{route('informasi-ibu')}}">Data Ibu</a>
            </div>
        </div>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Riwayat Pendidikan dan Berkas
    </div>


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-file-alt"></i>
            <span>Riwayat Pendidikan</span>
        </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-cloud-upload-alt"></i>
            <span>Unggah Berkas</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>