{{-- mainLayoutAdmin --}}
@extends('layout.mainLayoutAdmin')
{{-- end mainLayoutAdmin --}}

{{-- title --}}
@section('title_template')
    <title>WisataLampung | Dashboard</title>
@endsection
{{-- end title --}}

{{-- mobileNavAdmin --}}
@section('mobileNavAdmin')
    @include('layout.mobileNavAdmin')
@endsection
{{-- end mobileNavAdmin --}}

{{-- sidebarAdmin --}}
@section('sidebarAdmin')
    @include('layout.sidebarAdmin')
@endsection
{{-- end sidebarAdmin --}}

{{-- topBarAdmin --}}
@section('topBarAdmin')
    @include('layout.topBarAdmin')
@endsection
{{-- end topBarAdmin --}}

{{-- contentAdmin --}}
@section('contentAdmin')
    {{-- contentAdmin --}}
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        General Report
                    </h2>
                    <!-- BEGIN: General Report -->
                    @isset($userData)
                        <p>Selamat datang, {{ $userData->email }}!</p>
                    @endisset
                    <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i>
                        Reload Data </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                            title="33% Higher than last month"> 33% <i data-feather="chevron-up"
                                                class="w-4 h-4"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">4.510</div>
                                <div class="text-base text-gray-600 mt-1">Data Wisata</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="credit-card" class="report-box__icon text-theme-11"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer"
                                            title="2% Lower than last month"> 2% <i data-feather="chevron-down"
                                                class="w-4 h-4"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">3.521</div>
                                <div class="text-base text-gray-600 mt-1">Data Kategori Wisata</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="monitor" class="report-box__icon text-theme-12"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                            title="12% Higher than last month"> 12% <i data-feather="chevron-up"
                                                class="w-4 h-4"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">2.145</div>
                                <div class="text-base text-gray-600 mt-1">Data Daerah</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="user" class="report-box__icon text-theme-9"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                            title="22% Higher than last month"> 22% <i data-feather="chevron-up"
                                                class="w-4 h-4"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">152.000</div>
                                <div class="text-base text-gray-600 mt-1">Data Users</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->

            <!-- BEGIN: Weekly Top Seller -->
            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Rekomendasi By Users
                    </h2>
                    {{-- <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <button class="button box flex items-center text-gray-700"> <i data-feather="file-text"
                                class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                        <button class="ml-3 button box flex items-center text-gray-700"> <i data-feather="file-text"
                                class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                    </div> --}}
                </div>
                {{-- <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-no-wrap">IMAGES</th>
                                <th class="whitespace-no-wrap">PRODUCT NAME</th>
                                <th class="text-center whitespace-no-wrap">STOCK</th>
                                <th class="text-center whitespace-no-wrap">STATUS</th>
                                <th class="text-center whitespace-no-wrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                                src="dist/images/preview-2.jpg" title="Uploaded at 6 August 2022">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                                src="dist/images/preview-8.jpg" title="Uploaded at 1 May 2021">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                                src="dist/images/preview-11.jpg" title="Uploaded at 10 October 2020">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="" class="font-medium whitespace-no-wrap">Apple MacBook Pro 13</a>
                                    <div class="text-gray-600 text-xs whitespace-no-wrap">PC &amp; Laptop</div>
                                </td>
                                <td class="text-center">77</td>
                                <td class="w-40">
                                    <div class="flex items-center justify-center text-theme-9"> <i
                                            data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square"
                                                class="w-4 h-4 mr-1"></i> Edit </a>
                                        <a class="flex items-center text-theme-6" href=""> <i
                                                data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                                src="dist/images/preview-7.jpg" title="Uploaded at 21 July 2020">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                                src="dist/images/preview-13.jpg" title="Uploaded at 31 December 2021">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                                src="dist/images/preview-2.jpg" title="Uploaded at 9 September 2020">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="" class="font-medium whitespace-no-wrap">Dell XPS 13</a>
                                    <div class="text-gray-600 text-xs whitespace-no-wrap">PC &amp; Laptop</div>
                                </td>
                                <td class="text-center">100</td>
                                <td class="w-40">
                                    <div class="flex items-center justify-center text-theme-9"> <i
                                            data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square"
                                                class="w-4 h-4 mr-1"></i> Edit </a>
                                        <a class="flex items-center text-theme-6" href=""> <i
                                                data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                                src="dist/images/preview-9.jpg" title="Uploaded at 5 January 2021">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                                src="dist/images/preview-6.jpg" title="Uploaded at 18 November 2021">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                                src="dist/images/preview-13.jpg" title="Uploaded at 1 June 2021">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="" class="font-medium whitespace-no-wrap">Oppo Find X2 Pro</a>
                                    <div class="text-gray-600 text-xs whitespace-no-wrap">Smartphone &amp; Tablet</div>
                                </td>
                                <td class="text-center">50</td>
                                <td class="w-40">
                                    <div class="flex items-center justify-center text-theme-9"> <i
                                            data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square"
                                                class="w-4 h-4 mr-1"></i> Edit </a>
                                        <a class="flex items-center text-theme-6" href=""> <i
                                                data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                                src="dist/images/preview-11.jpg" title="Uploaded at 22 April 2020">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                                src="dist/images/preview-10.jpg" title="Uploaded at 12 December 2020">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                                src="dist/images/preview-12.jpg" title="Uploaded at 7 May 2020">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="" class="font-medium whitespace-no-wrap">Apple MacBook Pro 13</a>
                                    <div class="text-gray-600 text-xs whitespace-no-wrap">PC &amp; Laptop</div>
                                </td>
                                <td class="text-center">50</td>
                                <td class="w-40">
                                    <div class="flex items-center justify-center text-theme-9"> <i
                                            data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square"
                                                class="w-4 h-4 mr-1"></i> Edit </a>
                                        <a class="flex items-center text-theme-6" href=""> <i
                                                data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                    <ul class="pagination">
                        <li>
                            <a class="pagination__link" href=""> <i class="w-4 h-4"
                                    data-feather="chevrons-left"></i> </a>
                        </li>
                        <li>
                            <a class="pagination__link" href=""> <i class="w-4 h-4"
                                    data-feather="chevron-left"></i> </a>
                        </li>
                        <li> <a class="pagination__link" href="">...</a> </li>
                        <li> <a class="pagination__link" href="">1</a> </li>
                        <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                        <li> <a class="pagination__link" href="">3</a> </li>
                        <li> <a class="pagination__link" href="">...</a> </li>
                        <li>
                            <a class="pagination__link" href=""> <i class="w-4 h-4"
                                    data-feather="chevron-right"></i> </a>
                        </li>
                        <li>
                            <a class="pagination__link" href=""> <i class="w-4 h-4"
                                    data-feather="chevrons-right"></i> </a>
                        </li>
                    </ul>
                    <select class="w-20 input box mt-3 sm:mt-0">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div> --}}
            </div>
            <!-- END: Weekly Top Seller -->
        </div>
        <div class="col-span-12 xxl:col-span-3 xxl:border-l border-theme-5 -mb-10 pb-10">
            <div class="xxl:pl-6 grid grid-cols-12 gap-6">


                <!-- BEGIN: Important Notes -->
                <div
                    class="col-span-12 md:col-span-6 xl:col-span-12 xxl:col-span-12 xl:col-start-1 xl:row-start-1 xxl:col-start-auto xxl:row-start-auto mt-3">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-auto">
                            Important Notes
                        </h2>
                        <button data-carousel="important-notes" data-target="prev"
                            class="slick-navigator button px-2 border border-gray-400 flex items-center text-gray-700 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i> </button>
                        <button data-carousel="important-notes" data-target="next"
                            class="slick-navigator button px-2 border border-gray-400 flex items-center text-gray-700"> <i
                                data-feather="chevron-right" class="w-4 h-4"></i> </button>
                    </div>
                    <div class="mt-5 intro-x">
                        <div class="slick-carousel box zoom-in" id="important-notes">
                            <div class="p-5">
                                <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                <div class="text-gray-500 mt-1">20 Hours ago</div>
                                <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the
                                    printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                    the
                                    1500s.</div>
                                <div class="font-medium flex mt-5">
                                    <button type="button" class="button button--sm bg-gray-200 text-gray-600">View
                                        Notes</button>
                                    <button type="button"
                                        class="button button--sm border border-gray-300 text-gray-600 ml-auto">Dismiss</button>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                <div class="text-gray-500 mt-1">20 Hours ago</div>
                                <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the
                                    printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                    the
                                    1500s.</div>
                                <div class="font-medium flex mt-5">
                                    <button type="button" class="button button--sm bg-gray-200 text-gray-600">View
                                        Notes</button>
                                    <button type="button"
                                        class="button button--sm border border-gray-300 text-gray-600 ml-auto">Dismiss</button>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                <div class="text-gray-500 mt-1">20 Hours ago</div>
                                <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the
                                    printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                    the
                                    1500s.</div>
                                <div class="font-medium flex mt-5">
                                    <button type="button" class="button button--sm bg-gray-200 text-gray-600">View
                                        Notes</button>
                                    <button type="button"
                                        class="button button--sm border border-gray-300 text-gray-600 ml-auto">Dismiss</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Important Notes -->
            </div>
        </div>
    </div>

    {{-- javascript --}}

    {{-- end javascript --}}
@endsection

@section('footerAdmin')
    @include('layout.footerAdmin')
@endsection

{{-- end contentAdmin --}}
