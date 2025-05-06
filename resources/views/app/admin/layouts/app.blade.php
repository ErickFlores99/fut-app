<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Admin') }}</title>

        @yield('css') <!-- Permite cargar CSS adicional por secciones -->
    </head>
    <body>
        <!-- Nav Bar -->
        @include('app.admin.components.navbar')

        <!-- Page Heading -->
        @include('app.admin.components.header')

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        @yield('script') <!-- Permite cargar scripts adicionales por secciones -->
    </body>
</html>
