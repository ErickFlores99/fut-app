<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title','404')</title>

        <!--  Paleta de colores  -->
        <link rel="stylesheet" href="{{ asset('assets/css/colors.css') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-5.3.3/css/bootstrap.min.css') }}">
         
        <!-- FontAwesime Icons  -->
        <link rel="stylesheet" href="{{ asset('assets/icons/fontawesome-free-6.7.2-web/css/all.min.css') }}">

       

        @yield('css') <!-- Permite cargar CSS adicional por secciones -->
    </head>
    <body>
        @include('sweetalert::alert')

       <!-- Nav Bar -->
       @yield('admin_navbar')
       
        <!-- Page Heading -->
        @yield('admin_header')

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- SweetAlert2 -->
        <script src="{{ asset('assets/libs/sweetalert2@11.js') }}"></script>

        <!-- Popper.js -->
        <script src="assets/libs/popper.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/libs/bootstrap-5.3.3/js/bootstrap.min.js') }}"></script>

        <!-- jQuery -->
        <script src="{{ asset('assets/libs/jquery-3.7.1.min.js') }}"></script>

        <!-- Script de inicialización -->
        <script>
            // Inicialización del tooltip
            document.addEventListener("DOMContentLoaded", function () {
                const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
                tooltipTriggerList.forEach(function (tooltipTriggerEl) {
                    new bootstrap.Tooltip(tooltipTriggerEl, {
                        placement: tooltipTriggerEl.getAttribute('data-bs-placement') || 'top',
                        fallbackPlacements: [],
                        customClass: tooltipTriggerEl.getAttribute('data-custom-class') || ''
                    });
                });
            });
        </script>

        @yield('script') <!-- Permite cargar scripts adicionales por secciones -->
    </body>
</html>

