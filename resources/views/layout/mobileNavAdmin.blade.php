{{-- mobileNavAdmin --}}
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-24 py-5 hidden">
        <li>
            <a href="{{ route('admin/dashboardAdmin') }}" class="menu">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin/vw_user/view_user') }}" class="menu">
                <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                <div class="menu__title"> Data Users </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin/vw_wisata/view_wisata') }}" class="menu">
                <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                <div class="menu__title"> Data Wisata </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin/vw_kategoriwisata/view_kategoriwisata') }}" class="menu">
                <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                <div class="menu__title"> Data Kategori Wisata </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin/vw_daerah/view_daerah') }}" class="menu">
                <div class="menu__icon"> <i data-feather="message-square"></i> </div>
                <div class="menu__title"> Data Daerah </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin/vw_rekomendasi/view_rekomendasi') }}" class="menu">
                <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="menu__title"> Data Rekomendasi </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin/vw_ulasan/view_ulasan') }}" class="menu">
                <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="menu__title"> Data Ulasan </div>
            </a>
        </li>
        <li class="menu__devider my-6"></li>
    </ul>
</div>
<!-- END: Mobile Menu -->
{{-- End mobileNavAdmin --}}
