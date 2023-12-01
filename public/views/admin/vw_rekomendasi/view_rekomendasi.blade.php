{{-- mainLayoutAdmin --}}
@extends('layout.mainLayoutAdmin')
{{-- end mainLayoutAdmin --}}

{{-- title --}}
@section('title_template')
    <title>WisataLampung | Data Rekomendasi</title>
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
    {{-- barTop --}}
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Rekomendasi
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="button text-white bg-theme-1 shadow-md mr-2"><a href="post_data.html">Tambah Data</a></button>
        </div>
    </div>
    {{-- end barTop --}}

    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table class="table table-report table-report--bordered display datatable w-full">
            <thead>
                <tr>
                    <th class="border text-center whitespace-no-wrap">No</th>
                    <th class="border text-center whitespace-no-wrap">Id</th>
                    <th class="border text-center whitespace-no-wrap">Tanggal Vote</th>
                    <th class="border text-center whitespace-no-wrap">UserId</th>
                    <th class="border text-center whitespace-no-wrap">WisataId</th>
                    <th class="border text-center whitespace-no-wrap">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($result->data->RekomendasiWisata as $output)
                    <tr class="border">
                        <td class="text-center border">{{ $loop->iteration }}</td>
                        <td class="text-center border">{{ $output->id }}</td>
                        <td class="text-center border">{{ $output->tanggal_vote }}</td>
                        <td class="text-center border">{{ $output->userId }}</td>
                        <td class="text-center border">{{ $output->wisataId }}</td>
                        <td class="border w-5">
                            <div class="flex sm:justify-center items-center">
                                <a href="#" class="flex items-center mr-3">
                                    <i data-feather="edit" class="w-4 h-4 mr-1"></i>Edit
                                </a>
                                <a href="#" class="flex items-center text-theme-6">
                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- END: Datatable -->

    {{-- javascript --}}


    {{-- end javascript --}}
@endsection
{{-- end contentAdmin --}}
