{{-- mobileNavUser --}}
<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-24 py-5 hidden">
        <li>
            <a href="{{ route('user/dashboardUser') }}" class="menu">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title"> Home </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="edit"></i> </div>
                <div class="menu__title"> Kategori Wisata Alam <i data-feather="chevron-down"
                        class="menu__sub-icon"></i>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-crud-data-list.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Wisata Pantai </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-crud-form.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Wisata Gunung </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-crud-data-list.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Wisata Air terjun </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-crud-form.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Wisata Hutan </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-crud-data-list.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Wisata Danau </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-crud-form.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Wisata Taman Nasional </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="side-menu-chat.html" class="menu">
                <div class="menu__icon"> <i data-feather="message-square"></i> </div>
                <div class="menu__title"> Rekomendasi </div>
            </a>
        </li>
        <li>
            <a href="{{ route('user/vw_tentangkami/tentangKami') }}" class="menu">
                <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="menu__title"> Tentang kami </div>
            </a>
        </li>
        <li>
            <a href="{{ route('Login') }}" class="menu">
                <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="menu__title"> Login </div>
            </a>
        </li>
        <li class="menu__devider my-6"></li>
    </ul>
</div>
<!-- END: Mobile Menu -->
{{-- End mobileNavUser --}}
