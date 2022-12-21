<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/admin/')}}/assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Apart Admin</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('public/admin/')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('public/admin/')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('public/admin/')}}/assets/css/dark-style.css" rel="stylesheet" />
    <link href="{{asset('public/admin/')}}/assets/css/transparent-style.css" rel="stylesheet">
    <link href="{{asset('public/admin/')}}/assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('public/admin/')}}/assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('public/admin/')}}/assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr">

    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="{{asset('public/admin/')}}/assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <img src="{{asset('public')}}/images/logo.png" class="header-brand-img" alt="">
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form" method="post" action="{{route('admin.login_check')}}">
                            @csrf
                            <div class="panel panel-primary">
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Username" name="username" id="username">
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="password" placeholder="Password" name="password" id="password">
                                            </div>
                                            <div class="container-login100-form-btn">
                                                <button class="login100-form-btn btn-primary" type="submit">
                                                        Login
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="{{asset('public/admin/')}}/assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="{{asset('public/admin/')}}/assets/js/show-password.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="{{asset('public/admin/')}}/assets/js/generate-otp.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset('public/admin/')}}/assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="{{asset('public/admin/')}}/assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('public/admin/')}}/assets/js/custom.js"></script>

</body>

</html>