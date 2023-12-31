{{-- topBarAdmin --}}
<!-- BEGIN: Top Bar -->
<div class="top-bar">
    <!-- BEGIN: Breadcrumb -->
    <div class="-intro-x breadcrumb mr-auto hidden sm:flex">
        <a href="{{ url('admin/') }}" class="breadcrumb--active">Aplication</a> <i data-feather="chevron-right"
            class="breadcrumb__icon"></i>

        @php
            $breadcrumbs = explode('admin/', Request::path());
            $breadcrumbPath = '';
        @endphp

        @foreach ($breadcrumbs as $breadcrumb)
            @php
                $breadcrumbPath .= '/' . $breadcrumb;
            @endphp
            @if ($breadcrumb != '')
                <a href="{{ url($breadcrumbPath) }}" class="breadcrumb--active">{{ ucfirst($breadcrumb) }}</a>
                <i data-feather="chevron-right" class="breadcrumb__icon"></i>
            @endif
        @endforeach
    </div>
    <!-- END: Breadcrumb -->
    <!-- BEGIN: Search -->
    <div class="intro-x relative mr-3 sm:mr-6">
        <div class="search hidden sm:block">
            <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
            <i data-feather="search" class="search__icon"></i>
        </div>
        <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon"></i> </a>
        <div class="search-result">
            {{-- search --}}
            {{-- end search --}}
        </div>
    </div>
    <!-- END: Search -->
    <!-- BEGIN: Notifications -->
    <div class="intro-x dropdown relative mr-auto sm:mr-6">
        <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell"
                class="notification__icon"></i> </div>
        <div
            class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
            <div class="notification-content__box dropdown-box__content box">
                <div class="notification-content__title">Notifications</div>
                <div class="cursor-pointer relative flex items-center ">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-13.jpg') }}">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Administrator</a>
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">Login Administrator</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Notifications -->
    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8 relative">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
            <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('dist/images/profile-12.jpg') }}">
        </div>
        <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
            <div class="dropdown-box__content box bg-theme-38 text-white">
                <div class="p-4 border-b border-theme-40">
                    <div class="font-medium">
                        @auth
                            Email: {{ auth()->user()->email }}
                        @else
                            Pengguna Belum Terautentikasi
                        @endauth
                    </div>
                    <!-- Tampilkan informasi pengguna yang diperlukan -->
                </div>
                <div class="p-2">
                    <a href="{{ route('admin.vw_user.userProfile') }}"
                        class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                        <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                    <a href=""
                        class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                </div>
                <div class="p-2 border-t border-theme-40">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                        <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- END: Account Menu -->
</div>
<!-- END: Top Bar -->
{{-- End topBarAdmin --}}
