<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta name="description" content="Toko Roket Mini Moto">
   <meta name="keywords" content="Toko Roket Mini Moto">
   <meta name="author" content="Diana Fithri Lestari">
   <link href="{{ url('assets/server-side/img/favicon.png') }}" rel="icon">
   <link href="{{ url('assets/server-side/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
   <link href="https://fonts.gstatic.com" rel="preconnect">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   <link href="{{ url('assets/server-side/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ url('assets/server-side/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
   <link href="{{ url('assets/server-side/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
   <link href="{{ url('assets/server-side/vendor/quill/quill.snow.css') }}" rel="stylesheet">
   <link href="{{ url('assets/server-side/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
   <link href="{{ url('assets/server-side/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
   <link href="{{ url('assets/server-side/vendor/simple-datatables/style.css') }}" rel="stylesheet">
   <link href="{{ url('assets/server-side/css/style.css') }}" rel="stylesheet">
   <title>@yield('title')</title>

   <style>
        #logout-form span {
            color: black;
            transition: color 0.3s;
        }

        #logout-form:hover span {
            color: blue;
        }
   </style>
</head>
<body>

    @include('server-side.components.header')

    @include('server-side.components.sidebar')

    @yield('main-content')

    @include('server-side.components.footer')

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <script src="{{ url('assets/server-side/vendor/apexcharts/apexcharts.min.js') }}"></script>
   <script src="{{ url('assets/server-side/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ url('assets/server-side/vendor/chart.js/chart.umd.js') }}"></script>
   <script src="{{ url('assets/server-side/vendor/echarts/echarts.min.js') }}"></script>
   <script src="{{ url('assets/server-side/vendor/quill/quill.min.js') }}"></script>
   <script src="{{ url('assets/server-side/vendor/simple-datatables/simple-datatables.js') }}"></script>
   <script src="{{ url('assets/server-side/vendor/tinymce/tinymce.min.js') }}"></script>
   <script src="{{ url('assets/server-side/vendor/php-email-form/validate.js') }}"></script>
   <script src="{{ url('assets/server-side/js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>
