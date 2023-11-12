{{-- Sidebar User --}}
<!-- BEGIN: Top Menu -->
<nav class="top-nav">
    <ul>
        <li>
            <a href="{{ route('user/dashboardUser') }}"
                class="top-menu {{ Route::is('user/dashboardUser') ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                <div class="top-menu__title"> Home </div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Kategori Wisata Alam <i data-feather="chevron-down"
                        class="top-menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="top-menu-kategori-wisata.html" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="top-menu__title"> Wisata Pantai </div>
                    </a>
                </li>
                <li>
                    <a href="top-menu-kategori-wisata.html" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="top-menu__title"> Wisata Gunung </div>
                    </a>
                </li>
                <li>
                    <a href="top-menu-kategori-wisata.html" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="top-menu__title"> Wisata Air terjun </div>
                    </a>
                </li>
                <li>
                    <a href="top-menu-kategori-wisata.html" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="top-menu__title"> Wisata Hutan </div>
                    </a>
                </li>
                <li>
                    <a href="top-menu-kategori-wisata.html" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="top-menu__title"> Wisata Danau </div>
                    </a>
                </li>
                <li>
                    <a href="top-menu-kategori-wisata.html" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="top-menu__title"> Wisata Taman Nasional </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="top-menu-rekomendasi-wisata.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                <div class="top-menu__title"> Rekomendasi </div>
            </a>
        </li>
        <li>
            <a href="top-menu-tentang-kami.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                <div class="top-menu__title"> Tentang Kami </div>
            </a>
        </li>
        <li>
            <a href="{{ route('Login') }}" class="top-menu {{ Route::is('Login') ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                <div class="top-menu__title"> Login </div>
            </a>
        </li>
    </ul>
</nav>
<!-- END: Top Menu -->
{{-- End Sidebar User --}}
