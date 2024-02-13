<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INTERSAT</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('/') }}/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/vendor/fonts/boxicons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/demo.css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css" />
    <script src="{{ url('/') }}/assets/vendor/js/helpers.js"></script>
    <script src="{{ url('/') }}/assets/js/config.js"></script>
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Incluimos el aside -->
        @include('modulos.aside')
            <div class="layout-page">
                <!-- Incluimos el nav -->
                @include('modulos.nav')
                    
                <div>                
                    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
                        <div class="hero-container">
                            <h1>Sistema de Administración INTERSAT</h1>
                            <h2 class="text-end">Panel de Control</h2>
                        </div>
                    </section>
                </div>
                        <!-- contenido dinamico -->
                        {{--@yield('contenido-dinamico')--}}
                @include('modulos.footer')
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    

</body>
<script src="{{ url('/')}}/assets/vendor/js/typed.js/typed.umd.js"></script>
<script src="{{ url('/') }}/assets/vendor/libs/jquery/jquery.js"></script>
<script src="{{ url('/') }}/assets/vendor/libs/popper/popper.js"></script>
<script src="{{ url('/') }}/assets/vendor/js/bootstrap.js"></script>
<script src="{{ url('/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{ url('/') }}/assets/vendor/js/menu.js"></script>
<script src="{{ url('/') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="{{ url('/') }}/assets/js/main.js"></script>
<script src="{{ url('/') }}/assets/js/dashboards-analytics.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
</html>
