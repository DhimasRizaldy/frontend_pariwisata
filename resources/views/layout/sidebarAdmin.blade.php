{{-- sidebarAdmin --}}
<nav class="side-nav">
    <a href="{{ route('admin/dashboardAdmin') }}"
        class="side-menu {{ request()->is('admin/dashboardAdmin*') ? 'side-menu--active' : '' }}"
        class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
        <span class="hidden xl:block text-white text-lg ml-3"> Wisata<span class="font-medium">Lampung</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ route('admin/dashboardAdmin') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin/vw_user/view_user') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                <div class="side-menu__title"> Data Users </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin/vw_wisata/view_wisata') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                <div class="side-menu__title"> Data Wisata </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin/vw_kategoriwisata/view_kategoriwisata') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                <div class="side-menu__title"> Data Kategori Wisata </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin/vw_daerah/view_daerah') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                <div class="side-menu__title"> Data Daerah </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin/vw_rekomendasi/view_rekomendasi') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Data Rekomendasi </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin/vw_ulasan/view_ulasan') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Data Ulasan </div>
            </a>
        </li>
        <li class="side-nav__devider my-6"></li>
    </ul>
</nav>
{{-- End sidebarAdmin --}}
