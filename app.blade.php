<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta accept-charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @if (isset($seo_title))
                {{$seo_title}}
            @endif
        </title>

        {{--
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        --}}


        <link rel="stylesheet" href="https://jinyphp.github.io/css/assets/css/app.css">
        @stack('css')

        <script src="//unpkg.com/alpinejs" defer></script>
        <!-- ChartJS https://www.chartjs.org/ -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


        <!-- Include stylesheet -->
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

        <!-- 한글 NotoSans -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">

        <style>
            // <uniquifier>: Use a unique and descriptive class name
            // <weight>: Use a value from 100 to 900

            .noto-sans kr-<uniquifier> {
                font-family: "Noto Sans KR", sans-serif;
                font-optical-sizing: auto;
                font-weight: <weight>;
                font-style: normal;
            }
        </style>

        @livewireStyles
    </head>

    <body>
        {{$slot}}

        <script src="https://jinyphp.github.io/css/assets/js/app.js" defer></script>
        @livewireScripts
        @stack('scripts')


        <script>
            // Livewire
            document.addEventListener('livewire:load', function () {
                Livewire.on('reloadPage', () => {
                    location.reload();
                    console.log("reloadPage");
                });
            });
        </script>

        <!-- Include the Quill library -->
        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    </body>
</html>
