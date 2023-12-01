{{-- mainLayoutAdmin --}}
@extends('layout.mainLayoutAdmin')
{{-- end mainLayoutAdmin --}}

{{-- title --}}
@section('title_template')
    <title>WisataLampung | Data User</title>
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
            Data Users
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
                    <th class="border text-center whitespace-no-wrap">Email</th>
                    <th class="border text-center whitespace-no-wrap">GoogleId</th>
                    <th class="border text-center whitespace-no-wrap">Role</th>
                    <th class="border text-center whitespace-no-wrap">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($result->data->user as $output)
                    <tr class="border">
                        <td class="text-center border">{{ $loop->iteration }}</td>
                        <td class="text-center border">{{ $output->id }}</td>
                        <td class="text-center border">{{ $output->email }}</td>
                        <td class="text-center border">{{ $output->googleid }}</td>
                        <td class="w-40 border">
                            <div class="flex items-center justify-center text-theme-9">
                                <i data-feather="check-square" class="w-4 h-4 mr-2"></i>{{ $output->role }}
                            </div>
                        </td>
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
