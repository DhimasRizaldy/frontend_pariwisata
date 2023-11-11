<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Wisata Lampung | Dashboard</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('/dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
</head>

{{-- Body --}}

<body class="app">

    {{-- mobileNavAdmin --}}
    @yield('mobileNavAdmin')
    {{-- End mobileNavAdmin --}}

    <div class="flex">
        {{-- sidebarAdmin --}}
        @yield('sidebarAdmin')
        {{-- End sidebarAdmin --}}

        <div class="content">

            {{-- topBarAdmin --}}
            @yield('topBarAdmin')
            {{-- End topBarAdmin --}}

            {{-- contentAdmin --}}
            @yield('contentAdmin')
            {{-- End contentAdmin --}}

        </div>

    </div>

    {{-- javascript --}}
    <script src="{{ asset('/dist/js/app.js') }}"></script>
    {{-- end javascript --}}

    @stack('scripts')
</body>
