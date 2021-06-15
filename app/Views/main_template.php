<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/custom/images/favicon.png') ?>">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/monster-admin/plugins/chartist/dist/chartist.min.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/custom/css/style.min.css') ?>" rel="stylesheet">
</head>
<body>

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?php echo view('fragments/top-header') ?>

        <?php echo view('fragments/left-sidebar.php') ?>

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

        <?php echo view($content) ?>

        <div>

    </div>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url('assets/monster-admin/plugins/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('assets/monster-admin/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/custom/js/app-style-switcher.js') ?>"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('assets/custom/js/waves.js') ?>"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('assets/custom/js/sidebarmenu.js') ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('assets/custom/js/custom.js') ?>"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="<?= base_url('assets/monster-admin/plugins/flot/jquery.flot.js') ?>"></script>
    <script src="<?= base_url('assets/monster-admin/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') ?>"></script>
    <script src="<?= base_url('assets/custom/js/pages/dashboards/dashboard1.js') ?>"></script>

</body>
</html>