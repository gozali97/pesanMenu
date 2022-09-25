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
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{ url('assets/img/resto.png')}}" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10" style="background-image: url('assets/img/flat.jpg');">
                        <h3 class="text-center mb-3" style="font-weight: 800">Selamat datang di <br>RestoApp</h3>
                        <div class="text-left p-5">
                            <h6 class="font-weight-light mb-5 text-center">Silahkan scan untuk akses menu Restaurant</h6>
                            <div class="card bg-white p-3">
                                @foreach ( $data as $code)
                                <img src="{{ url('https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=').url('/scan?code=').$code->qr_code}}" alt="">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--
    <div class="container mt-5 mx-auto">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-10 mx-auto">
                        <div class="text-left p-5" style="background-image: url('assets/img/flat.jpg');">
                            <h3 class="text-center mb-3" style="font-weight: 800">Selamat datang di <br> AW Resto</h3>
                            <h6 class="font-weight-light mb-5 text-center">Silahkan scan untuk akses menu Restaurant</h6>
                            <div class="card bg-white p-3">
                                @foreach ( $data as $code)
                                <img src="{{ url('https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=').url('/scan?code=').$code->qr_code}}" alt="">
        @endforeach
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div> --}}

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
</body>
</html>
