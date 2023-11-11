<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- csrf token --}}
    <meta name="_token" content="{{ csrf_token() }}">
    {{-- End csrf token --}}

    {{-- Title --}}
    @yield('title_template')
    {{-- End Title --}}

    {{-- Asset cdn, css, tailwind css --}}
    <link rel="stylesheet" href="{{ asset('/dist/css/app.css') }}" />
    {{-- End Asset cdn, css, tailwind css --}}

    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
        }
    </style>

</head>

{{-- Body --}}

<body>

    {{-- Header --}}

    {{-- End Header --}}

    {{-- sidebar --}}

    {{-- End sidebar --}}

    {{-- content --}}

    {{-- End content --}}


    {{-- cdn javascript --}}

    {{-- end cdn javascript --}}

    @stack('scripts')
</body>
