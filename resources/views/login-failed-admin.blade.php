<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/apart/')}}/assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Apart</title>
    <meta name="robots" content="noindex" />
    <meta name="robots" content="nofollow" />
    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('public/apart/')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('public/apart/')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('public/apart/')}}/assets/css/dark-style.css" rel="stylesheet" />
    <link href="{{asset('public/apart/')}}/assets/css/transparent-style.css" rel="stylesheet">
    <link href="{{asset('public/apart/')}}/assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('public/apart/')}}/assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('public/apart/')}}/assets/colors/color1.css" />
    
    <!-- fancybox -->
    <link rel="stylesheet" href="{{asset('public/apart/')}}/assets/css/jquery.fancybox.min.css" />

</head>

<body class="">

    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
        <img src="{{asset('public/apart/')}}/assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- End GLOBAL-LOADER -->

        <!-- PAGE -->
        <div class="page">
            <!-- PAGE-CONTENT OPEN -->
            <div class="page-content error-page error2 text-white">
                <div class="container text-center">
                    <div class="error-template">
                        <h5 class="error-details">
                        LOGIN FAILED!
                        </h5>
                        <div class="text-center">
                            <a class="btn btn-secondary mt-5 mb-5" href="{{route('admin.login')}}"> <i class="fa fa-long-arrow-left"></i> Back to Home Page </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE-CONTENT OPEN CLOSED -->
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE -->

    <!-- JQUERY JS -->
    <script src="{{asset('public/apart/')}}/assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('public/apart/')}}/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('public/apart/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="{{asset('public/apart/')}}/assets/js/show-password.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="{{asset('public/apart/')}}/assets/js/generate-otp.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset('public/apart/')}}/assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="{{asset('public/apart/')}}/assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('public/apart/')}}/assets/js/custom.js"></script>

</body>

</html>