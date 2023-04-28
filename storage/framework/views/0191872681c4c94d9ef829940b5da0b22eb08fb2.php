<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="<?php echo e(route('dashboard.index')); ?>" class="fw-bold f-16">Klinik PMB Asy-Syifa </a>
            
            
        </div>
        <div class="logo-icon-wrapper"><a href="#"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="#"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Home</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='dashboard.index' ? 'active' : ''); ?>" href="<?php echo e(route('dashboard.index')); ?>"><i data-feather="home"> </i><span>Dashboard</span></a></li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6>Pelayanan</h6>
                        </div>
                    </li>

                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='pasien.index' ? 'active' : ''); ?>" href="<?php echo e(route('pasien.index')); ?>"><i data-feather="users"> </i><span>Daftar Pasien</span></a></li>
                    <?php if(Auth::user()->role == "Admin"): ?>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='pendaftaran-pasien.index' ? 'active' : ''); ?>" href="<?php echo e(route('pendaftaran-pasien.index')); ?>"><i data-feather="user-plus"> </i><span>Pendaftaran Pasien</span></a></li>
                    <?php endif; ?>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='pemeriksaan-pasien.index' ? 'active' : ''); ?>" href="<?php echo e(route('pemeriksaan-pasien.index')); ?>"><i data-feather="user-check"> </i><span><?php echo e(Auth::user()->role == "Dokter" ? 'Daftar Pasienku' : 'Pemeriksaan Pasien'); ?></span></a></li>

                    <?php if(Auth::user()->role == "Admin"): ?>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Farmasi</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='stok-barang' ? 'active' : ''); ?>" href="<?php echo e(route('stok-barang')); ?>"><i class="fa fa-warehouse fa-md mx-1"> </i><span>Stok Barang</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='obat-masuk' ? 'active' : ''); ?>" href="<?php echo e(route('obat-masuk')); ?>"><i class="fa fa-truck-loading fa-md mx-1"> </i><span>Obat Masuk</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='obat-keluar' ? 'active' : ''); ?>" href="<?php echo e(route('obat-keluar')); ?>"><i class="fa fa-dolly-flatbed fa-md mx-1"> </i><span>Obat Keluar</span></a></li>
                    <?php endif; ?>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Laporan</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/laporan/pasien' ? 'active' : ''); ?>" href="#"><i class="fa fa-procedures fa-md mx-1"></i><span>Pasien</span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/laporan/pasien' ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/produk' ? 'block;' : 'none;'); ?>">
                            <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='pasien-harian' ? 'active' : ''); ?>" href="<?php echo e(route('pasien-harian')); ?>">Harian</a></li>
                            <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='pasien-bulanan' ? 'active' : ''); ?>" href="<?php echo e(route('pasien-bulanan')); ?>">Bulanan</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == 'laporan/keuangan' ? 'active' : ''); ?>" href="#"><i class="fa-solid fa-receipt fa-lg mx-1"></i><span>Keuangan</span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == 'laporan/keuangan' ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == 'laporan/keuangan' ? 'block;' : 'none;'); ?>">
                            
                            <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='pendapatan-harian' ? 'active' : ''); ?>" href="<?php echo e(route('pendapatan-harian')); ?>">Pendapatan Harian</a></li>
                            <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='pendapatan-bulanan' ? 'active' : ''); ?>" href="<?php echo e(route('pendapatan-bulanan')); ?>">Pendapatan Bulanan</a></li>

                            <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='piutang' ? 'active' : ''); ?>" href="<?php echo e(route('piutang')); ?>">Piutang</a></li>
                            <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='cashflow' ? 'active' : ''); ?>" href="<?php echo e(route('cashflow')); ?>">Cashflow</a></li>
                        </ul>
                    </li>



                    <?php if(Auth::user()->role == "Admin"): ?>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>Konfigurasi</h6>
                            </div>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/manajemen-klinik' ? 'active' : ''); ?>" href="#"><i class="fa fa-clinic-medical fa-md mx-1"></i><span>Manajemen Klinik</span>
                                <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/manajemen-klinik' ? 'down' : 'right'); ?>"></i></div>
                            </a>
                            <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/manajemen-klinik' ? 'block;' : 'none;'); ?>">

                                <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='poli.index' ? 'active' : ''); ?>" href="<?php echo e(route('poli.index')); ?>">Poli</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/produk' ? 'active' : ''); ?>" href="#"><i class="fa fa-boxes fa-md mx-1"></i><span>Obat</span>
                                <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/produk' ? 'down' : 'right'); ?>"></i></div>
                            </a>
                            <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/produk' ? 'block;' : 'none;'); ?>">
                                <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='daftar-produk.index' ? 'active' : ''); ?>" href="<?php echo e(route('daftar-produk.index')); ?>">Daftar Obat</a></li>
                                <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='kategori.index' ? 'active' : ''); ?>" href="<?php echo e(route('kategori.index')); ?>">Kategori</a></li>
                            </ul>
                        </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/manajemen-user' ? 'active' : ''); ?>" href="#"><i class="fa fa-users fa-md mx-1">

                            </i><span>Manajemen User</span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/manajemen-user' ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/manajemen-user' ? 'block;' : 'none;'); ?>">
                            <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='user-pengguna.index' ? 'active' : ''); ?>" href="<?php echo e(route('user-pengguna.index')); ?>">User Pengguna</a></li>
                            <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='daftar-dokter.index' ? 'active' : ''); ?>" href="<?php echo e(route('daftar-dokter.index')); ?>">Dokter </a></li>
                        </ul>
                    </li>

                    <?php endif; ?>





































































                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/layouts/simple/sidebar.blade.php ENDPATH**/ ?>