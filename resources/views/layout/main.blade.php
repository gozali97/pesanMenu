<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RestoApp</title>
    <!-- plugins:css -->

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/img/logo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/img/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/img/logo.png">
    <!-- endinject -->
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet')}}">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/styles/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/styles/style.css')}}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
</head>
<body>
    {{-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                Loading...
            </div>
        </div>
    </div> --}}
    @include('layout.header')

    @include('layout.sidebar')
    @yield('content')


    @include('layout.footer')
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>

    <!-- js -->
    <script src="{{ url('assets/vendors/scripts/core.js')}}"></script>
    <script src="{{ url('assets/vendors/scripts/script.min.js')}}"></script>
    <script src="{{ url('assets/vendors/scripts/process.js')}}"></script>
    <script src="{{ url('assets/vendors/scripts/layout-settings.js')}}"></script>
    <script src="{{ url('assets/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ url('assets/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ url('assets/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ url('assets/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ url('assets/vendors/scripts/dashboard.js')}}"></script>


    <!-- buttons for Export datatable -->
    <script src="{{ url('assets/src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ url('assets/src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ url('assets/src/plugins/datatables/js/buttons.print.min.js')}}"></script>
    <script src="{{ url('assets/src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
    <script src="{{ url('assets/src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
    <script src="{{ url('assets/src/plugins/datatables/js/pdfmake.min.js')}}"></script>
    <script src="{{ url('assets/src/plugins/datatables/js/vfs_fonts.js')}}"></script>
    <!-- Datatable Setting js -->
    <script src="{{ url('assets/vendors/scripts/datatable-setting.js')}}"></script>
</body>
</body>

</body>
</html>
