<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:title" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:description" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:image" content="https://yeshadmin.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>ENBA Elektrik Admin Panel</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <link href="/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- tagify-css -->
    <link href="/vendor/tagify/dist/tagify.css" rel="stylesheet">

    <!-- Style css -->
    <link href="/css/style.css" rel="stylesheet">

</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div>
        <img src="images/pre.gif" alt="">
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">
    <!--**********************************
        Sidebar start
    ***********************************-->
    @include('adminPanel.layouts.sidebar')
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    @yield('content')

    <!--**********************************
        Content body end
    ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="/vendor/global/global.min.js"></script>
<script src="/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="/vendor/apexchart/apexchart.js"></script>

<!-- Dashboard 1 -->
<script src="/js/dashboard/dashboard-1.js"></script>
<script src="/vendor/draggable/draggable.js"></script>
<script src="/vendor/swiper/js/swiper-bundle.min.js"></script>


<!-- tagify -->
<script src="/vendor/tagify/dist/tagify.js"></script>

<script src="/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/js/buttons.html5.min.js"></script>
<script src="/vendor/datatables/js/jszip.min.js"></script>
<script src="/js/plugins-init/datatables.init.js"></script>

<!-- Apex Chart -->

<script src="/vendor/bootstrap-datetimepicker/js/moment.js"></script>
<script src="/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>


<!-- Vectormap -->
<script src="/vendor/jqvmap/js/jquery.vmap.min.js"></script>
<script src="/vendor/jqvmap/js/jquery.vmap.world.js"></script>
<script src="/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/deznav-init.js"></script>
<script src="/js/demo.js"></script>
<script src="/js/styleSwitcher.js"></script>
<script src="/vendor/ckeditor/ckeditor.js"></script>

</body>
</html>
