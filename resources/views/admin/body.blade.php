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
    <title>Apart </title>
    <meta name="robots" content="noindex" />
    <meta name="robots" content="nofollow" />
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

    <!-- fancybox -->
    <link rel="stylesheet" href="{{asset('public/apart/')}}/assets/css/jquery.fancybox.min.css" />

</head>

<style>
@media only screen and (min-width: 560px) {

}

@media only screen and (max-width: 560px) {

}

.image_upload_error{
    color: #b70d0d;
}

.Detail_img{
    width: 100%;
    height: 150px;
    object-fit: cover;
}

.Detail_img_li{
    border-bottom: 1px solid #e9edf4 !important;
    border: 1px solid #e9edf4;
    border-radius: 3px;
    margin: 1px;
    padding-right: 0px;
    padding-left: 0px;
    flex: 0 0 24%;
}

</style>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{asset('public/admin/')}}/assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.html">
                            <img src="{{asset('public/admin/')}}/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{asset('public/admin/')}}/assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <div class="dropdown d-none">
                                <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="fe fe-search"></i>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <div class="input-group-text btn btn-primary">
                                            <i class="fe fe-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- COUNTRY -->
                                        <div class="d-flex country">
                                            <a class="nav-link icon text-center" data-bs-target="#country-selector"
                                                data-bs-toggle="modal">
                                                <i class="fe fe-globe"></i><span
                                                    class="fs-16 ms-2 d-none d-xl-block">Apart</span>
                                            </a>
                                        </div>
                                        <!-- SEARCH -->
                                        <div class="dropdown  d-flex">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="{{asset('public/admin/')}}/assets/images/users/21.jpg" alt="profile-user"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{route('admin.logout')}}">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Logout
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="{{route('admin.home')}}">
                            <img src="{{asset('public/images/logo.png')}}" class="header-brand-img light-logo1">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.home')}}"><i
                                        class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">Home</span></a>
                            </li>
                            
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.settings.edit',1)}}"><i
                                        class="side-menu__icon fe fe-settings"></i><span
                                        class="side-menu__label">Settings</span></a>
                            </li>
                            
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-users"></i><span
                                        class="side-menu__label">Customers</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Customers</a></li>
                                    <li><a href="{{route('admin.customers.index')}}" class="slide-item"> Customers</a></li>
                                    <li><a href="{{route('admin.customers.create')}}" class="slide-item"> Customer Add</a></li>
                                </ul>
                            </li>
                            
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-camera"></i><span
                                        class="side-menu__label">Sliders</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Sliders</a></li>
                                    <li><a href="{{route('admin.sliders.index')}}" class="slide-item"> Sliders</a></li>
                                    <li><a href="{{route('admin.sliders.create')}}" class="slide-item"> Slider Add</a></li>
                                </ul>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-edit"></i><span
                                        class="side-menu__label">Blogs</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Blogs</a></li>
                                    <li><a href="{{route('admin.blogs.index')}}" class="slide-item"> Blogs</a></li>
                                    <li><a href="{{route('admin.blogs.create')}}" class="slide-item"> Blog Add</a></li>
                                </ul>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-file"></i><span
                                        class="side-menu__label">Pages</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                                    <li><a href="{{route('admin.pages.index')}}" class="slide-item"> Pages</a></li>
                                    <li><a href="{{route('admin.pages.create')}}" class="slide-item"> Page Add</a></li>
                                </ul>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-dollar-sign"></i><span
                                        class="side-menu__label">Sales</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Sales</a></li>
                                    <li><a href="{{route('admin.sales.index')}}" class="slide-item"> Sales</a></li>
                                    <li><a href="{{route('admin.sales.create')}}" class="slide-item"> Sale Add</a></li>
                                </ul>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-globe"></i><span
                                        class="side-menu__label">Supports</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Supports</a></li>
                                    <li><a href="{{route('admin.supports.index')}}" class="slide-item"> Supports</a></li>
                                </ul>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.contacts.edit',1)}}"><i
                                        class="side-menu__icon fe fe-phone"></i><span
                                        class="side-menu__label">Contact</span></a>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-octagon"></i><span
                                        class="side-menu__label">Notes</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Notes</a></li>
                                    <li><a href="{{route('admin.notes.index')}}" class="slide-item"> Notes</a></li>
                                    <li><a href="{{route('admin.notes.create')}}" class="slide-item"> Note Add</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>

@yield('content')
        
        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © 2022 <a href="javascript:void(0)">Apart</a>. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{asset('public/admin/')}}/assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="{{asset('public/admin/')}}/assets/js/jquery.sparkline.min.js"></script>

    <!-- Sticky js -->
    <script src="{{asset('public/admin/')}}/assets/js/sticky.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{asset('public/admin/')}}/assets/js/circle-progress.min.js"></script>

    <!-- PIETY CHART JS-->
    <script src="{{asset('public/admin/')}}/assets/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/peitychart/peitychart.init.js"></script>

    <!-- SIDEBAR JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset('public/admin/')}}/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/p-scroll/pscroll.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{asset('public/admin/')}}/assets/plugins/chart/Chart.bundle.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/chart/rounded-barchart.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/chart/utils.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/select2/select2.full.min.js"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/dataTables.responsive.min.js"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{asset('public/admin/')}}/assets/js/apexcharts.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/apexchart/irregular-data-series.js"></script>

    <!-- C3 CHART JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/charts-c3/d3.v5.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/charts-c3/c3-chart.js"></script>

    <!-- CHART-DONUT JS -->
    <script src="{{asset('public/admin/')}}/assets/js/charts.js"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/flot/jquery.flot.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/flot/jquery.flot.fillbetween.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/flot/chart.flot.sampledata.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/flot/dashboard.sampledata.js"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{asset('public/admin/')}}/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{asset('public/admin/')}}/assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{asset('public/admin/')}}/assets/js/index1.js"></script>

    <!-- Color Theme js -->
    <script src="{{asset('public/admin/')}}/assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('public/admin/')}}/assets/js/custom.js"></script>

    <!-- SWEET-ALERT JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/sweet-alert/sweetalert.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/js/sweet-alert.js"></script>

    <!-- DATA TABLE JS-->
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/jszip.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/js/table-data.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- GALLERY JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/gallery/picturefill.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/gallery/lightgallery.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/gallery/lightgallery-1.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/gallery/lg-pager.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/gallery/lg-autoplay.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/gallery/lg-fullscreen.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/gallery/lg-zoom.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/gallery/lg-hash.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/gallery/lg-share.js"></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="{{asset('public/admin/')}}/assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/fancyuploder/jquery.fileupload.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/fancyuploder/fancy-uploader.js"></script>

    <!-- OWL CAROUSEL JS-->
    <script src="{{asset('public/admin/')}}/assets/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="{{asset('public/admin/')}}/assets/js/owl-carousel.js"></script>

    <!-- OWL Carousel js -->
    <script src="{{asset('public/admin/')}}/assets/js/carousel.js"></script>

    <!-- INTERNAL SUMMERNOTE Editor JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/summernote/summernote1.js"></script>
    <script src="{{asset('public/admin/')}}/assets/js/summernote.js"></script>

    <!-- INPUT MASK JS-->
    <script src="{{asset('public/admin/')}}/assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{asset('public/admin/')}}/assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- FILE UPLOADES JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/fileuploads/js/fileupload.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/fileuploads/js/file-upload.js"></script>

    <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="{{asset('public/admin/')}}/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- SELECT2 JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/select2/select2.full.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/js/select2.js"></script>

    <!-- BOOTSTRAP-DATERANGEPICKER JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="{{asset('public/admin/')}}/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

    <!-- INTERNAL Sumoselect js-->
    <script src="{{asset('public/admin/')}}/assets/plugins/sumoselect/jquery.sumoselect.js"></script>

    <!-- TIMEPICKER JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/time-picker/jquery.timepicker.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/time-picker/toggles.min.js"></script>

    <!-- INTERNAL intlTelInput js-->
    <script src="{{asset('public/admin/')}}/assets/plugins/intl-tel-input-master/intlTelInput.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/intl-tel-input-master/country-select.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/intl-tel-input-master/utils.js"></script>

    <!-- INTERNAL jquery transfer js-->
    <script src="{{asset('public/admin/')}}/assets/plugins/jQuerytransfer/jquery.transfer.js"></script>

    <!-- INTERNAL multi js-->
    <script src="{{asset('public/admin/')}}/assets/plugins/multi/multi.min.js"></script>

    <!-- DATEPICKER JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/date-picker/date-picker.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/date-picker/jquery-ui.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/input-mask/jquery.maskedinput.js"></script>

    <!-- COLOR PICKER JS -->
    <script src="{{asset('public/admin/')}}/assets/plugins/pickr-master/pickr.es5.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/js/picker.js"></script>

    <!-- MULTI SELECT JS-->
    <script src="{{asset('public/admin/')}}/assets/plugins/multipleselect/multiple-select.js"></script>
    <script src="{{asset('public/admin/')}}/assets/plugins/multipleselect/multi-select.js"></script>

    <!-- FORMELEMENTS JS -->
    <script src="{{asset('public/admin/')}}/assets/js/formelementadvnced.js"></script>
    <script src="{{asset('public/admin/')}}/assets/js/form-elements.js"></script>

    <!-- fancybox -->
    <script src="{{asset('public/apart/')}}/assets/js/jquery.fancybox.min.js"></script>

    <!-- MY DATEPİCKER -->
    <script>
    var dateToday = new Date();
    $( function(){
    $( ".mydatepicker" ).datepicker({
        minDate: dateToday,
        onSelect: function (selectedDate) {
            
        },
        onClose: function (selectedDate) {
            $(".mydatepicker2").datepicker("option", "minDate", selectedDate);
            $(".mydatepicker2").datepicker("show");
        },
        dateFormat: "dd-mm-yy",
        altFormat: "yy-mm-dd",
        altField:"#tarih-db",
        monthNames: [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ],
        dayNamesMin: [ "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat" ],
        firstDay:1
    });

    $( ".mydatepicker2" ).datepicker({
        onSelect: function (selectedDate) {
            
        },
        dateFormat: "dd-mm-yy",
        altFormat: "yy-mm-dd",
        altField:"#tarih-db",
        monthNames: [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ],
        dayNamesMin: [ "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat" ],
        firstDay:1
    });
    });
    </script>

    
@yield('script')

</body>

</html>