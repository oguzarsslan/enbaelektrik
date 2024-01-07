<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <title>{{$settings['site_title_' . app()->getLocale()]}}</title>
    <meta name="description" content="Here goes description" />
    <meta name="author" content="author name" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/css/screen.css" />
    <link rel="stylesheet" type="text/css" href="/rs-plugin/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/rs-plugin/css/navigation.css">

    <style>
        .navbar-logo {
            width: 85px;
            height: auto;
        }

        .footer-logo {
            width: 200px;
            height: auto;
        }

        .footer-logo-div {
            text-align-last: end;
        }

        @media only screen and (max-width: 600px) {
            .navbar-logo {
                width: 60px;
            }

            .footer-logo {
                width: 160px;
            }

            .feature-line p {
                padding: 0;
            }

            .home-page-image img {
                display: none;
            }

            .footer-logo-div {
                text-align-last: center;
            }
        }

    </style>
</head>
<body>

<!-- Page Wrapper -->
<div id="page">

    <!-- Header -->
    @include('front.layouts.navbar')

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    @include('front.layouts.footer')

</div>

<!-- Scripts -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/modernizr.js"></script>
<script type="text/javascript" src="/js/nouislider.js"></script>
<script type="text/javascript" src="/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- rs-plugin extensions -->
<script type="text/javascript" src="/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<!-- //rs-plugin extensions -->
<script type="text/javascript" src="/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/js/isotope.js"></script>
<script type="text/javascript" src="/js/slick.js"></script>
<script type="text/javascript" src="/js/options.js"></script>
</body>
</html>
