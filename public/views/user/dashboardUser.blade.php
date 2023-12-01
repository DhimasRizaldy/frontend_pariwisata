{{-- mainLayoutUser --}}
@extends('layout.mainLayoutUser')
{{-- end mainLayoutUser --}}

{{-- title --}}
@section('title_template')
    <title>WisataLampung | Dashboard</title>
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
        <!-- BEGIN: Responsive Display -->
        <div class="intro-y box mt-10">
            <div class="p-5" id="responsive-slider">
                <div class="preview">
                    <div class="slider mx-6 responsive-mode">
                        <div class="h-32 px-2">
                            <div class="h-full bg-gray-200 rounded-md">
                                <h3 class="h-full font-medium flex items-center justify-center text-2xl">
                                    1
                                </h3>
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-gray-200 rounded-md">
                                <h3 class="h-full font-medium flex items-center justify-center text-2xl">
                                    2
                                </h3>
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-gray-200 rounded-md">
                                <h3 class="h-full font-medium flex items-center justify-center text-2xl">
                                    3
                                </h3>
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-gray-200 rounded-md">
                                <h3 class="h-full font-medium flex items-center justify-center text-2xl">
                                    4
                                </h3>
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-gray-200 rounded-md">
                                <h3 class="h-full font-medium flex items-center justify-center text-2xl">
                                    5
                                </h3>
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-gray-200 rounded-md">
                                <h3 class="h-full font-medium flex items-center justify-center text-2xl">
                                    6
                                </h3>
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-gray-200 rounded-md">
                                <h3 class="h-full font-medium flex items-center justify-center text-2xl">
                                    7
                                </h3>
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-gray-200 rounded-md">
                                <h3 class="h-full font-medium flex items-center justify-center text-2xl">
                                    8
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="source-code hidden">
                    <button data-target="#copy-responsive-slider"
                        class="copy-code button button--sm border flex items-center text-gray-700"> <i data-feather="file"
                            class="w-4 h-4 mr-2"></i> Copy code </button>
                    <div class="overflow-y-auto h-64 mt-3">
                        <pre class="source-preview" id="copy-responsive-slider"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv class=&quot;slider mx-6 responsive-mode&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-32 px-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-full bg-gray-200 rounded-md&quot;HTMLCloseTag HTMLOpenTagh3 class=&quot;h-full font-medium flex items-center justify-center text-2xl&quot;HTMLCloseTag1HTMLOpenTag/h3HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;h-32 px-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-full bg-gray-200 rounded-md&quot;HTMLCloseTag HTMLOpenTagh3 class=&quot;h-full font-medium flex items-center justify-center text-2xl&quot;HTMLCloseTag2HTMLOpenTag/h3HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;h-32 px-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-full bg-gray-200 rounded-md&quot;HTMLCloseTag HTMLOpenTagh3 class=&quot;h-full font-medium flex items-center justify-center text-2xl&quot;HTMLCloseTag3HTMLOpenTag/h3HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;h-32 px-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-full bg-gray-200 rounded-md&quot;HTMLCloseTag HTMLOpenTagh3 class=&quot;h-full font-medium flex items-center justify-center text-2xl&quot;HTMLCloseTag4HTMLOpenTag/h3HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;h-32 px-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-full bg-gray-200 rounded-md&quot;HTMLCloseTag HTMLOpenTagh3 class=&quot;h-full font-medium flex items-center justify-center text-2xl&quot;HTMLCloseTag5HTMLOpenTag/h3HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;h-32 px-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-full bg-gray-200 rounded-md&quot;HTMLCloseTag HTMLOpenTagh3 class=&quot;h-full font-medium flex items-center justify-center text-2xl&quot;HTMLCloseTag6HTMLOpenTag/h3HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;h-32 px-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-full bg-gray-200 rounded-md&quot;HTMLCloseTag HTMLOpenTagh3 class=&quot;h-full font-medium flex items-center justify-center text-2xl&quot;HTMLCloseTag7HTMLOpenTag/h3HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;h-32 px-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;h-full bg-gray-200 rounded-md&quot;HTMLCloseTag HTMLOpenTagh3 class=&quot;h-full font-medium flex items-center justify-center text-2xl&quot;HTMLCloseTag8HTMLOpenTag/h3HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Responsive Display -->

        <!-- Konten -->
        <div class="intro-y flex items-center justify-center mt-10 mb-10">
            <h2 class="text-lg font-bold">
                Data Wisata Alam Lampung
            </h2>
        </div>

        <!-- Searching -->
        <div class="flex items-center justify-between bg-gray-100 p-4">
            <!-- Pencarian -->
            <div class="relative">
                <input type="text" class="border rounded-md py-2 px-4 w-64 focus:outline-none focus:border-blue-500"
                    placeholder="Cari...">
                <button class="absolute right-0 top-0 mt-3 mr-4">
                    <i data-feather="search" class="text-gray-500"></i>
                </button>
            </div>
        </div>
        <!-- End Searching -->

        <div class="intro-y grid grid-cols-12 gap-6 mt-5">
            <!-- BEGIN: Blog Layout -->
            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                <div class="flex items-center border-b border-gray-200 px-5 py-4">
                    <div class="w-10 h-10 flex-none image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-8.jpg') }}">
                    </div>
                    <div class="ml-3 mr-auto">
                        <a href="" class="font-medium">Leonardo DiCaprio</a>
                        <div class="flex text-gray-600 truncate text-xs mt-1"> <a class="text-theme-1 inline-block truncate"
                                href="">Photography</a> <span class="mx-1">•</span> 14 seconds ago </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="h-40 xxl:h-56 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md"
                            src="{{ asset('dist/images/preview-9.jpg') }}">
                    </div>
                    <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of
                        model
                        sentences</a>
                    <div class="text-gray-700 mt-2">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected humour, or randomi</div>
                </div>
                <div class="flex items-center px-5 py-3 border-t border-gray-200">
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                        title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                        title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                    <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                        <div class="mr-2"> Comments: <span class="font-medium">30</span> </div>
                        <div class="mr-2"> Views: <span class="font-medium">85k</span> </div>
                        <div class="ml-auto"> Likes: <span class="font-medium">87k</span> </div>
                    </div>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white">Vote</button>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white"><a
                            href="top-menu-detail-wisata.html">Lihat</a></button>
                </div>
            </div>
            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                <div class="flex items-center border-b border-gray-200 px-5 py-4">
                    <div class="w-10 h-10 flex-none image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-8.jpg') }}">
                    </div>
                    <div class="ml-3 mr-auto">
                        <a href="" class="font-medium">Leonardo DiCaprio</a>
                        <div class="flex text-gray-600 truncate text-xs mt-1"> <a
                                class="text-theme-1 inline-block truncate" href="">Photography</a> <span
                                class="mx-1">•</span> 14 seconds ago </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="h-40 xxl:h-56 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md"
                            src="{{ asset('dist/images/preview-9.jpg') }}">
                    </div>
                    <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of
                        model
                        sentences</a>
                    <div class="text-gray-700 mt-2">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected humour, or randomi</div>
                </div>
                <div class="flex items-center px-5 py-3 border-t border-gray-200">
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                        title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                        title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                    <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                        <div class="mr-2"> Comments: <span class="font-medium">30</span> </div>
                        <div class="mr-2"> Views: <span class="font-medium">85k</span> </div>
                        <div class="ml-auto"> Likes: <span class="font-medium">87k</span> </div>
                    </div>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white">Vote</button>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white"><a
                            href="top-menu-detail-wisata.html">Lihat</a></button>
                </div>
            </div>
            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                <div class="flex items-center border-b border-gray-200 px-5 py-4">
                    <div class="w-10 h-10 flex-none image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-8.jpg') }}">
                    </div>
                    <div class="ml-3 mr-auto">
                        <a href="" class="font-medium">Leonardo DiCaprio</a>
                        <div class="flex text-gray-600 truncate text-xs mt-1"> <a
                                class="text-theme-1 inline-block truncate" href="">Photography</a> <span
                                class="mx-1">•</span> 14 seconds ago </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="h-40 xxl:h-56 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md"
                            src="{{ asset('dist/images/preview-9.jpg') }}">
                    </div>
                    <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of
                        model
                        sentences</a>
                    <div class="text-gray-700 mt-2">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected humour, or randomi</div>
                </div>
                <div class="flex items-center px-5 py-3 border-t border-gray-200">
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                        title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                        title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                    <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                        <div class="mr-2"> Comments: <span class="font-medium">30</span> </div>
                        <div class="mr-2"> Views: <span class="font-medium">85k</span> </div>
                        <div class="ml-auto"> Likes: <span class="font-medium">87k</span> </div>
                    </div>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white">Vote</button>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white"><a
                            href="top-menu-detail-wisata.html">Lihat</a></button>
                </div>
            </div>
            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                <div class="flex items-center border-b border-gray-200 px-5 py-4">
                    <div class="w-10 h-10 flex-none image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-8.jpg') }}">
                    </div>
                    <div class="ml-3 mr-auto">
                        <a href="" class="font-medium">Leonardo DiCaprio</a>
                        <div class="flex text-gray-600 truncate text-xs mt-1"> <a
                                class="text-theme-1 inline-block truncate" href="">Photography</a> <span
                                class="mx-1">•</span> 14 seconds ago </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="h-40 xxl:h-56 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md"
                            src="{{ asset('dist/images/preview-9.jpg') }}">
                    </div>
                    <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of
                        model
                        sentences</a>
                    <div class="text-gray-700 mt-2">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected humour, or randomi</div>
                </div>
                <div class="flex items-center px-5 py-3 border-t border-gray-200">
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                        title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                        title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                    <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                        <div class="mr-2"> Comments: <span class="font-medium">30</span> </div>
                        <div class="mr-2"> Views: <span class="font-medium">85k</span> </div>
                        <div class="ml-auto"> Likes: <span class="font-medium">87k</span> </div>
                    </div>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white">Vote</button>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white"><a
                            href="top-menu-detail-wisata.html">Lihat</a></button>
                </div>
            </div>
            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                <div class="flex items-center border-b border-gray-200 px-5 py-4">
                    <div class="w-10 h-10 flex-none image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-8.jpg') }}">
                    </div>
                    <div class="ml-3 mr-auto">
                        <a href="" class="font-medium">Leonardo DiCaprio</a>
                        <div class="flex text-gray-600 truncate text-xs mt-1"> <a
                                class="text-theme-1 inline-block truncate" href="">Photography</a> <span
                                class="mx-1">•</span> 14 seconds ago </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="h-40 xxl:h-56 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md"
                            src="{{ asset('dist/images/preview-9.jpg') }}">
                    </div>
                    <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of
                        model
                        sentences</a>
                    <div class="text-gray-700 mt-2">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected humour, or randomi</div>
                </div>
                <div class="flex items-center px-5 py-3 border-t border-gray-200">
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                        title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                        title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                    <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                        <div class="mr-2"> Comments: <span class="font-medium">30</span> </div>
                        <div class="mr-2"> Views: <span class="font-medium">85k</span> </div>
                        <div class="ml-auto"> Likes: <span class="font-medium">87k</span> </div>
                    </div>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white">Vote</button>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white"><a
                            href="top-menu-detail-wisata.html">Lihat</a></button>
                </div>
            </div>
            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                <div class="flex items-center border-b border-gray-200 px-5 py-4">
                    <div class="w-10 h-10 flex-none image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-8.jpg') }}">
                    </div>
                    <div class="ml-3 mr-auto">
                        <a href="" class="font-medium">Leonardo DiCaprio</a>
                        <div class="flex text-gray-600 truncate text-xs mt-1"> <a
                                class="text-theme-1 inline-block truncate" href="">Photography</a> <span
                                class="mx-1">•</span> 14 seconds ago </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="h-40 xxl:h-56 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md"
                            src="{{ asset('dist/images/preview-9.jpg') }}">
                    </div>
                    <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of
                        model
                        sentences</a>
                    <div class="text-gray-700 mt-2">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected humour, or randomi</div>
                </div>
                <div class="flex items-center px-5 py-3 border-t border-gray-200">
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                        title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                        title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                    <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                        <div class="mr-2"> Comments: <span class="font-medium">30</span> </div>
                        <div class="mr-2"> Views: <span class="font-medium">85k</span> </div>
                        <div class="ml-auto"> Likes: <span class="font-medium">87k</span> </div>
                    </div>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white">Vote</button>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white"><a
                            href="top-menu-detail-wisata.html">Lihat</a></button>
                </div>
            </div>
            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                <div class="flex items-center border-b border-gray-200 px-5 py-4">
                    <div class="w-10 h-10 flex-none image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-8.jpg') }}">
                    </div>
                    <div class="ml-3 mr-auto">
                        <a href="" class="font-medium">Leonardo DiCaprio</a>
                        <div class="flex text-gray-600 truncate text-xs mt-1"> <a
                                class="text-theme-1 inline-block truncate" href="">Photography</a> <span
                                class="mx-1">•</span> 14 seconds ago </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="h-40 xxl:h-56 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md"
                            src="{{ asset('dist/images/preview-9.jpg') }}">
                    </div>
                    <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of
                        model
                        sentences</a>
                    <div class="text-gray-700 mt-2">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected humour, or randomi</div>
                </div>
                <div class="flex items-center px-5 py-3 border-t border-gray-200">
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                        title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                        title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                    <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                        <div class="mr-2"> Comments: <span class="font-medium">30</span> </div>
                        <div class="mr-2"> Views: <span class="font-medium">85k</span> </div>
                        <div class="ml-auto"> Likes: <span class="font-medium">87k</span> </div>
                    </div>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white">Vote</button>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white"><a
                            href="top-menu-detail-wisata.html">Lihat</a></button>
                </div>
            </div>
            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                <div class="flex items-center border-b border-gray-200 px-5 py-4">
                    <div class="w-10 h-10 flex-none image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-8.jpg') }}">
                    </div>
                    <div class="ml-3 mr-auto">
                        <a href="" class="font-medium">Leonardo DiCaprio</a>
                        <div class="flex text-gray-600 truncate text-xs mt-1"> <a
                                class="text-theme-1 inline-block truncate" href="">Photography</a> <span
                                class="mx-1">•</span> 14 seconds ago </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="h-40 xxl:h-56 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md"
                            src="{{ asset('dist/images/preview-9.jpg') }}">
                    </div>
                    <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of
                        model
                        sentences</a>
                    <div class="text-gray-700 mt-2">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected humour, or randomi</div>
                </div>
                <div class="flex items-center px-5 py-3 border-t border-gray-200">
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                        title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                        title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                    <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                        <div class="mr-2"> Comments: <span class="font-medium">30</span> </div>
                        <div class="mr-2"> Views: <span class="font-medium">85k</span> </div>
                        <div class="ml-auto"> Likes: <span class="font-medium">87k</span> </div>
                    </div>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white">Vote</button>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white"><a
                            href="top-menu-detail-wisata.html">Lihat</a></button>
                </div>
            </div>
            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                <div class="flex items-center border-b border-gray-200 px-5 py-4">
                    <div class="w-10 h-10 flex-none image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-8.jpg') }}">
                    </div>
                    <div class="ml-3 mr-auto">
                        <a href="" class="font-medium">Leonardo DiCaprio</a>
                        <div class="flex text-gray-600 truncate text-xs mt-1"> <a
                                class="text-theme-1 inline-block truncate" href="">Photography</a> <span
                                class="mx-1">•</span> 14 seconds ago </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="h-40 xxl:h-56 image-fit">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-md"
                            src="{{ asset('dist/images/preview-9.jpg') }}">
                    </div>
                    <a href="" class="block font-medium text-base mt-5">200 Latin words, combined with a handful of
                        model
                        sentences</a>
                    <div class="text-gray-700 mt-2">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected humour, or randomi</div>
                </div>
                <div class="flex items-center px-5 py-3 border-t border-gray-200">
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 text-gray-600 mr-2 tooltip"
                        title="Bookmark"> <i data-feather="bookmark" class="w-3 h-3"></i> </a>
                    <a href=""
                        class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 text-theme-10 ml-auto tooltip"
                        title="Share"> <i data-feather="share-2" class="w-3 h-3"></i> </a>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-gray-200">
                    <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                        <div class="mr-2"> Comments: <span class="font-medium">30</span> </div>
                        <div class="mr-2"> Views: <span class="font-medium">85k</span> </div>
                        <div class="ml-auto"> Likes: <span class="font-medium">87k</span> </div>
                    </div>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white">Vote</button>
                    <button class="button w-24 rounded-full shadow-md mr- mb-2 mt-2 bg-theme-1 text-white"><a
                            href="top-menu-detail-wisata.html">Lihat</a></button>
                </div>
            </div>
            <!-- END: Blog Layout -->
            <!-- BEGIN: Pagination -->
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
                <ul class="pagination">
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i>
                        </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i>
                        </a>
                    </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li> <a class="pagination__link" href="">1</a> </li>
                    <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                    <li> <a class="pagination__link" href="">3</a> </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i>
                        </a>
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
            </div>
            <!-- END: Pagination -->
        </div>
        <!-- Konten -->
    </div>
    <!-- END ISI KONTEN -->
@endsection

@section('footerUser')
    @include('layout.footerUser')
@endsection
