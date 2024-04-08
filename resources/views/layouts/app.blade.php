<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
    x-bind:class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <wireui:scripts />

</head>

<body class="dark:bg-gray-900 h-full bg-gray-50">
    <div class="antialiased bg-gray-50 dark:bg-gray-900">

        <livewire:layout.includes.navbar/>
        <livewire:layout.includes.sidebar/>

        <main class="md:ml-64 ">
            <div class="p-4 h-full pt-10">
                {{-- @include('layouts.breadcrumb') --}}
                <section class="mt-5">
                    {{ $slot }}
                </section>
            </div>
        </main>
    </div>


</body>
@if (Route::is('home') or Route::is('menu'))
    @include('footer')
@endif

</html>
