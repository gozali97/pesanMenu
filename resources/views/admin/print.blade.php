<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Print QrCode</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css')}}">
    <link href="{{ url('assets/css/sb-admin-2.min.css" rel="stylesheet')}}">
    <link href="{{ url('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico')}}" />
</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="text-left p-5" style="background-image: url('assets/images/flat.jpg');">
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
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ url('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('assets/js/off-canvas.js')}}"></script>
    <script src="{{ url('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{ url('assets/js/misc.js')}}"></script>
    <!-- endinject -->
</body>
</html>
