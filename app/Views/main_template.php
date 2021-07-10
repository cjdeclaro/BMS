<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/custom/images/favicon.png">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="assets/sweetalert/sweetalert2.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/datatables/datatables.min.css">
    <!-- Custom CSS -->
    <link href="assets/monster-admin/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/custom/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/custom/css/custom.css">

    <?php

    if(isset($summernote)) {
        ?>
        <link rel="stylesheet" href="<?= $summernote ?>">
        <?php
    }

    ?>

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
    
    <script src="assets/monster-admin/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/monster-admin/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/custom/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="assets/custom/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/custom/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/custom/js/custom.js"></script>
    <!-- page script -->

    <?php

    if(isset($summernotejs)) {
        ?>
        <script src="<?= $summernotejs ?>"></script>
        <?php
    }

    ?>

    <script src="<?= base_url($scripts) ?>"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="assets/monster-admin/plugins/flot/jquery.flot.js"></script>
    <script src="assets/monster-admin/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="assets/custom/js/pages/dashboards/dashboard1.js"></script>
    <script src="assets/sweetalert/sweetalert2.js"></script>
    <script src="assets/datatables/datatables.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>