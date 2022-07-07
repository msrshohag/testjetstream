<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home | AHZ Associates</title>
    <meta name="description" content="AHZ Associates" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    {{-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> --}}
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <style>
      .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('css')
    @livewireStyles
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">

    <!--header area-->
    @include('layouts.backend.header')
    
    {{ $slot }}

    <!--footer area-->
    @include('layouts.backend.footer')

    <script src="{{ asset('assets/js/.js') }}"></script>

    @stack('js')
    @livewireScripts
</body>

</html>