{{-- mainLayoutUser --}}
@extends('layout.mainLayoutUser')
{{-- end mainLayoutUser --}}

{{-- title --}}
@section('title_template')
    <title>WisataLampung | Profile</title>
@endsection
{{-- end title --}}

{{-- mobileNavUser --}}
@section('mobileNavUser')
    @include('layout.mobileNavUser')
@endsection
{{-- end mobileNavUser --}}

{{-- topBarUser --}}
@section('topBarUser')
    @include('layout.topBarUser')
@endsection
{{-- end topBarUser --}}

{{-- topMenuUser --}}
@section('topMenuUser')
    @include('layout.topMenuUser')
@endsection
{{-- end topMenuUser --}}

{{-- contentUser --}}
@section('contentUser')
    <!-- ISI KONTEN DISINI -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i
                    data-feather="chevron-right" class="breadcrumb__icon"></i> <a href=""
                    class="breadcrumb--active">Profile</a> </div>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
                    <i data-feather="search" class="search__icon"></i>
                </div>
                <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon"></i>
                </a>
                <div class="search-result">
                    <div class="search-result__content">
                        <div class="search-result__content__title">Pages</div>
                    </div>
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
                                <div
                                    class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Admin</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not
                                    simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                                    making it over 20</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="{{ asset('dist/images/profile-2.jpg"') }}>
                                <div
                                    class="w-3
                                    h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">It is a long established fact that a reader will
                                be distracted by the readable content of a page when looking at its layout. The point of
                                using Lorem </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                src="{{ asset('dist/images/profile-14.jpg') }}">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not
                                simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                                making it over 20</div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                src="{{ asset('dist/images/profile-6.jpg') }}">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a>
                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem
                                Ipsum available, but the majority have suffered alteration in some form, by injected
                                humour, or randomi</div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                src="{{ asset('dist/images/profile-5.jpg') }}">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Edward Norton</a>
                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text
                                ever since the 1500</div>
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
                        <div class="font-medium">Diki Chandra</div>
                        <div class="text-xs text-theme-41">Administrator</div>
                    </div>
                    <div class="p-2">
                        <a href="profile.html"
                            class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                            <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        <a href="profile.html"
                            class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                            <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>

                    </div>
                    <div class="p-2 border-t border-theme-40">
                        <a href="admin-menu-login.html"
                            class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                            <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>

    <!-- ISI KONTEN DISINI -->

    <!-- PROFILE -->
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Profile Information
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 xxl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-11.jpg') }}">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">Administrator</div>
                        <div class="text-gray-600">Admin</div>
                    </div>

                </div>

            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Display Information
                    </h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 xl:col-span-4">
                            <div class="border border-gray-200 rounded-md p-5">
                                <div class="w-40 h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img class="rounded-md" alt="Midone Tailwind HTML Admin Template"
                                        src="{{ asset('dist/images/profile-11.jpg') }}">
                                    <div title="Remove this profile photo?"
                                        class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2">
                                        <i data-feather="x" class="w-4 h-4"></i>
                                    </div>
                                </div>
                                <div class="w-40 mx-auto cursor-pointer relative mt-5">
                                    <button type="button" class="button w-full bg-theme-1 text-white">Change
                                        Photo</button>
                                    <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-8">
                            <div>
                                <label>Display Name</label>
                                <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2"
                                    placeholder="Input text" value="Keanu Reeves" disabled>
                            </div>
                            <div class="mt-3">
                                <label>Nearest MRT Station</label>
                                <div class="mt-2">
                                    <select class="select2 w-full">
                                        <option value="1">Admiralty</option>
                                        <option value="2">Aljunied</option>
                                        <option value="3">Ang Mo Kio</option>
                                        <option value="4">Bartley</option>
                                        <option value="5">Beauty World</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Postal Code</label>
                                <div class="mt-2">
                                    <select class="select2 w-full">
                                        <option value="1">018906 - 1 STRAITS BOULEVARD SINGA...</option>
                                        <option value="2">018910 - 5A MARINA GARDENS DRIVE...</option>
                                        <option value="3">018915 - 100A CENTRAL BOULEVARD...</option>
                                        <option value="4">018925 - 21 PARK STREET MARINA...</option>
                                        <option value="5">018926 - 23 PARK STREET MARINA...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Address</label>
                                <textarea class="input w-full border mt-2" placeholder="Adress">10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore</textarea>
                            </div>
                            <button type="button" class="button w-20 bg-theme-1 text-white mt-3">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Display Information -->
            <!-- BEGIN: Personal Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Personal Information
                    </h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 xl:col-span-6">
                            <div>
                                <label>Email</label>
                                <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2"
                                    placeholder="Input text" value="keanureeves@left4code.com" disabled>
                            </div>
                            <div class="mt-3">
                                <label>Name</label>
                                <input type="text" class="input w-full border mt-2" placeholder="Input text"
                                    value="Keanu Reeves" disabled>
                            </div>
                            <div class="mt-3">
                                <label>ID Type</label>
                                <select class="input w-full border mt-2">
                                    <option>IC</option>
                                    <option>FIN</option>
                                    <option>Passport</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label>ID Number</label>
                                <input type="text" class="input w-full border mt-2" placeholder="Input text"
                                    value="357821204950001">
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div>
                                <label>Phone Number</label>
                                <input type="text" class="input w-full border mt-2" placeholder="Input text"
                                    value="65570828">
                            </div>
                            <div class="mt-3">
                                <label>Address</label>
                                <input type="text" class="input w-full border mt-2" placeholder="Input text"
                                    value="10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore">
                            </div>
                            <div class="mt-3">
                                <label>Bank Name</label>
                                <div class="mt-2">
                                    <select class="select2 w-full">
                                        <option value="1">SBI - STATE BANK OF INDIA</option>
                                        <option value="1">CITI BANK - CITI BANK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Bank Account</label>
                                <input type="text" class="input w-full border mt-2" placeholder="Input text"
                                    value="DBS Current 011-903573-0">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="" class="text-theme-6 flex items-center"> <i data-feather="trash-2"
                                class="w-4 h-4 mr-1"></i> Delete Account </a>
                        <button type="button" class="button w-20 bg-theme-1 text-white ml-auto">Save</button>
                    </div>
                </div>
            </div>
            <!-- END: Personal Information -->
        </div>
    </div>
    <!-- END PROFILE -->

    <!-- END ISI KONTEN -->
    </div>
    <!-- END ISI KONTEN -->
@endsection

@section('footerUser')
    @include('layout.footerUser')
@endsection
