{{-- mainLayoutUser --}}
@extends('layout.mainLayoutUser')
{{-- end mainLayoutUser --}}

{{-- title --}}
@section('title_template')
    <title>WisataLampung | Tentang Kami</title>
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
    <h2 class="intro-y text-2xl font-medium mt-10 text-center mr-auto">
        Tentang Kami
    </h2>
    <!-- BEGIN: Pricing Tab -->
    <div class="intro-y flex justify-center mt-6">
        <div class="pricing-tabs nav-tabs box rounded-full overflow-hidden flex"> <a data-toggle="tab"
                data-target="#layout-1-monthly-fees" href="javascript:;"
                class="flex-1 w-32 lg:w-40 py-2 lg:py-3 whitespace-no-wrap text-center active">Pariwisata Lampung</a> <a
                data-toggle="tab" data-target="#layout-1-annual-fees" href="javascript:;"
                class="flex-1 w-32 lg:w-40 py-2 lg:py-3 whitespace-no-wrap text-center">Wisata ALam Lampung</a> </div>
    </div>
    <!-- END: Pricing Tab -->
    <!-- BEGIN: Pricing Content -->
    <div class="flex mt-10">
        <div class="tab-content">
            <div class="tab-content__pane flex flex-col lg:flex-row active" id="layout-1-monthly-fees">
                <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                    <i data-feather="briefcase" class="w-12 h-12 text-theme-1 mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Business</div>
                    <div class="text-gray-700 text-center mt-5"> 1 Domain <span class="mx-1">•</span> 10 Users <span
                            class="mx-1">•</span> 20 Copies </div>
                    <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto"> 60 <span
                                class="absolute text-2xl top-0 right-0 text-gray-500 -mr-4 mt-1">$</span> </div>
                    </div>
                    <button type="button"
                        class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">PURCHASE
                        NOW</button>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                    <i data-feather="briefcase" class="w-12 h-12 text-theme-1 mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Business</div>
                    <div class="text-gray-700 text-center mt-5"> 1 Domain <span class="mx-1">•</span> 10 Users <span
                            class="mx-1">•</span> 20 Copies </div>
                    <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto"> 60 <span
                                class="absolute text-2xl top-0 right-0 text-gray-500 -mr-4 mt-1">$</span> </div>
                    </div>
                    <button type="button"
                        class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">PURCHASE
                        NOW</button>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5">
                    <i data-feather="shopping-bag" class="w-12 h-12 text-theme-1 mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Enterprise</div>
                    <div class="text-gray-700 text-center mt-5"> 1 Domain <span class="mx-1">•</span> 10 Users <span
                            class="mx-1">•</span> 20 Copies </div>
                    <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto"> 120 <span
                                class="absolute text-2xl top-0 right-0 text-gray-500 -mr-4 mt-1">$</span> </div>
                    </div>
                    <button type="button"
                        class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">PURCHASE
                        NOW</button>
                </div>
            </div>
            <div class="tab-content__pane flex flex-col lg:flex-row" id="layout-1-annual-fees">
                <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                    <i data-feather="briefcase" class="w-12 h-12 text-theme-1 mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Business</div>
                    <div class="text-gray-700 text-center mt-5"> 1 Domain <span class="mx-1">•</span> 10 Users <span
                            class="mx-1">•</span> 20 Copies </div>
                    <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto"> 60 <span
                                class="absolute text-2xl top-0 right-0 text-gray-500 -mr-4 mt-1">$</span> </div>
                    </div>
                    <button type="button"
                        class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">PURCHASE
                        NOW</button>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                    <i data-feather="briefcase" class="w-12 h-12 text-theme-1 mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Business</div>
                    <div class="text-gray-700 text-center mt-5"> 1 Domain <span class="mx-1">•</span> 10 Users <span
                            class="mx-1">•</span> 20 Copies </div>
                    <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto"> 40 <span
                                class="absolute text-2xl top-0 right-0 text-gray-500 -mr-4 mt-1">$</span> </div>
                    </div>
                    <button type="button"
                        class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">PURCHASE
                        NOW</button>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5">
                    <i data-feather="shopping-bag" class="w-12 h-12 text-theme-1 mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Enterprise</div>
                    <div class="text-gray-700 text-center mt-5"> 1 Domain <span class="mx-1">•</span> 10 Users <span
                            class="mx-1">•</span> 20 Copies </div>
                    <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto"> 90 <span
                                class="absolute text-2xl top-0 right-0 text-gray-500 -mr-4 mt-1">$</span> </div>
                    </div>
                    <button type="button"
                        class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">PURCHASE
                        NOW</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Pricing Content -->
    <div class="intro-y box mt-20 px-8 py-12">
        <h2 class="intro-y text-2xl font-medium text-center mr-auto">
            Developer
        </h2>
        <!-- BEGIN: Pricing Tab -->
        <div class="intro-y flex justify-center mt-6">
            <div class="pricing-tabs nav-tabs box rounded-full overflow-hidden flex"> <a data-toggle="tab"
                    data-target="#layout-2-monthly-fees" href="javascript:;"
                    class="flex-1 w-32 lg:w-40 py-2 lg:py-3 whitespace-no-wrap text-center active">Informasi</a> <a
                    data-toggle="tab" data-target="#layout-2-annual-fees" href="javascript:;"
                    class="flex-1 w-32 lg:w-40 py-2 lg:py-3 whitespace-no-wrap text-center">Developer</a> </div>
        </div>
        <!-- END: Pricing Tab -->
        <!-- BEGIN: Pricing Content -->
        <div class="flex mt-10">
            <div class="tab-content">
                <div class="tab-content__pane flex flex-col lg:flex-row active" id="layout-1-monthly-fees">
                    <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                        <i data-feather="briefcase" class="w-12 h-12 text-theme-1 mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Sabda Adjie Saputra</div>
                        <div class="text-xl font-medium text-center mt-1">20312040</div>
                        <div class="text-gray-700 text-center mt-2"> Divisi <span class="mx-1">:</span> Product
                            Manager </div>
                        <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of
                            the
                            printing and typesetting industry.</div>
                        <div class="flex justify-center">
                        </div>
                        <button type="button"
                            class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">Kunjungi
                            Sosmed</button>
                    </div>
                    <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                        <i data-feather="briefcase" class="w-12 h-12 text-theme-1 mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Dhimas Rizaldy</div>
                        <div class="text-xl font-medium text-center mt-1">20312030</div>
                        <div class="text-gray-700 text-center mt-2"> Divisi <span class="mx-1">:</span> Backend
                            Developer </div>
                        <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of
                            the
                            printing and typesetting industry.</div>
                        <div class="flex justify-center">
                        </div>
                        <button type="button"
                            class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">Kunjungi
                            Sosmed</button>
                    </div>
                    <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                        <i data-feather="briefcase" class="w-12 h-12 text-theme-1 mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Adhitya Elga Nalendra</div>
                        <div class="text-xl font-medium text-center mt-1">20312156</div>
                        <div class="text-gray-700 text-center mt-2"> Divisi <span class="mx-1">:</span> Ui/UX </div>
                        <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of
                            the
                            printing and typesetting industry.</div>
                        <div class="flex justify-center">
                        </div>
                        <button type="button"
                            class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">Kunjungi
                            Sosmed</button>
                    </div>
                    <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                        <i data-feather="briefcase" class="w-12 h-12 text-theme-1 mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Siti Anisa</div>
                        <div class="text-xl font-medium text-center mt-1">20312035</div>
                        <div class="text-gray-700 text-center mt-2"> Divisi <span class="mx-1">:</span> Frontend
                            Developer </div>
                        <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of
                            the
                            printing and typesetting industry.</div>
                        <div class="flex justify-center">
                        </div>
                        <button type="button"
                            class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">Kunjungi
                            Sosmed</button>
                    </div>
                    <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                        <i data-feather="briefcase" class="w-12 h-12 text-theme-1 mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Adelia Riskhi Arisandi</div>
                        <div class="text-xl font-medium text-center mt-1">20312105</div>
                        <div class="text-gray-700 text-center mt-2"> Divisi <span class="mx-1">:</span> Frontend
                            Developer </div>
                        <div class="text-gray-600 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of
                            the
                            printing and typesetting industry.</div>
                        <div class="flex justify-center">
                        </div>
                        <button type="button"
                            class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">Kunjungi
                            Sosmed</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Pricing Content -->
    </div>
    <!-- END ISI KONTEN -->
@endsection

@section('footerUser')
    @include('layout.footerUser')
@endsection
