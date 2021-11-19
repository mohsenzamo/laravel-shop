<!DOCTYPE html>
<html class="loading" lang="fa" data-textdirection="rtl">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="Barat Hadian">
    <title>داشبورد تجزیه و تحلیل - قالب مدیریتی آفتاب پرست - بوت استرپ 4 برنامه وب مدرن و پوسته استاتیک داشبورد + کیت رابط کاربری</title>
    <link rel="apple-touch-icon" href="/AdminCss/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/AdminCss/app-assets/images/ico/favicon.ico">
    <link href='/AdminCss/app-assets/css-rtl/Vazir-FD.css' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/css-rtl/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/css-rtl/core/colors/palette-switch.min.css">
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/css-rtl/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/css-rtl/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/css-rtl/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/css-rtl/components.min.css">
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/css-rtl/custom-rtl.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/css-rtl/core/menu/menu-types/horizontal-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/css-rtl/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/css-rtl/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/css-rtl/pages/gap-application.css">
    <link rel="stylesheet" type="text/css" href="/AdminCss/app-assets/css-rtl/pages/dashboard-analytics.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/AdminCss/assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

<!-- BEGIN: Header-->
<!-- fixed-top-->
@include('AdminView/Master/header')
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('AdminView/Master/mainmenu')
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
@yield('contentA')
<!-- END: Content-->


<!-- BEGIN: Customizer-->
@include('AdminView/Master/customizer')
<!-- End: Customizer-->


<!-- BEGIN: Footer-->
@include('AdminView/Master/footer')
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="/AdminCss/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="/AdminCss/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="/AdminCss/app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script type="text/javascript" src="/AdminCss/app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="/AdminCss/app-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
<script src="/AdminCss/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js" type="text/javascript"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="/AdminCss/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
<script src="/AdminCss/app-assets/js/core/app.min.js" type="text/javascript"></script>
<script src="/AdminCss/app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
<script src="/AdminCss/app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="/AdminCss/app-assets/js/scripts/pages/dashboard-analytics.min.js" type="text/javascript"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->
</html>