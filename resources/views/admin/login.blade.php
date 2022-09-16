<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

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
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/styles/style.css')}}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');

    </script>
</head>
<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="login.html">
                    <img src="{{ url('assets/img/restoapp.png')}}" alt="">
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="/user/register" data-color="#E94560">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{ url('assets/img/resto.png')}}" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center" data-color="#E94560">Login RestoApp</h2>
                        </div>
                        <form action="/user/loginUser" method="POST">
                            @csrf
                            {{-- <div class="select-role">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="options" id="admin">
                                        <div class="icon"><img data-color="#E94560" src="{{ url('assets/vendors/images/briefcase.svg')}}" class="svg" alt="">
                    </div>
                    <span>I'm</span>
                    Admin
                    </label>
                    <label class="btn">
                        <input type="radio" name="options" id="user">
                        <div class="icon"><img src="{{ url('assets/vendors/images/person.svg')}}" class="svg" alt=""></div>
                        <span>I'm</span>
                        Kasir
                    </label>
                </div>
            </div> --}}
            <div class="input-group custom">
                <input type="text" class="form-control form-control-lg" name="email" placeholder="Username">
                <div class="input-group-append custom">
                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                </div>
            </div>
            <div class="input-group custom">
                <input type="password" class="form-control form-control-lg" name="password" placeholder="**********">
                <div class="input-group-append custom">
                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                </div>
            </div>
            <div class="row pb-30">
                <div class="col-6">
                    <a href="forgot-password.html">Forgot Password</a>
                    {{-- <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember</label>
                        </div> --}}
                </div>
                <div class="col-6">
                    {{-- <div class="forgot-password"></div> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="input-group mb-0">
                        <!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
                        <button type="submit" class="btn btn-lg btn-block text-white" data-bgcolor="#E94560" href="">Login</button>
                    </div>
                    {{-- <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div> --}}
                    {{-- <div class="input-group mb-0">
                        <a class="btn btn-outline-primary btn-lg btn-block" href="register.html">Register To Create Account</a>
                    </div> --}}
                </div>
            </div>
            </form>
        </div>
    </div>
    {{-- </div>
    </div>
    </div> --}}
    <!-- js -->
    <script src="{{ url('assets/vendors/scripts/core.js')}}"></script>
    <script src="{{ url('assets/vendors/scripts/script.min.js')}}"></script>
    <script src="{{ url('assets/vendors/scripts/process.js')}}"></script>
    <script src="{{ url('assets/vendors/scripts/layout-settings.js')}}"></script>
</body>
</html>
