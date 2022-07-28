<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="<?= base_url('/'); ?>/img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>Dashboard | <?= $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('/'); ?>/assets/DataTables/datatables.min.css" />
    <link rel="stylesheet" href="<?= base_url('/'); ?>/assets/toastr/build/toastr.min.css">
    <link href="<?= base_url('/'); ?>/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?= $this->include('admin/layout/sidebar'); ?>

        <div class="main">
            <?= $this->include('admin/layout/navbar'); ?>

            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><i class="align-middle me-2" data-feather="home"></i><a
                            href="<?= base_url('U'); ?>"> Home</a>

                        <?php if ($title != 'Home') : ?>
                        / <?= $parentdir; ?> / <?= $title; ?>
                        <?php endif ?>

                    </h1>

                    <?= $this->renderSection('content'); ?>

                </div>
            </main>

            <?= $this->include('admin/layout/footer'); ?>
        </div>
    </div>
    <script src="<?= base_url('/'); ?>/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?= base_url('/'); ?>/assets/DataTables/datatables.min.js"></script>
    <script src="<?= base_url('/'); ?>/js/sweetalert.js"></script>
    <script src="<?= base_url('/'); ?>/assets/toastr/build/toastr.min.js"></script>
    <script src="<?= base_url('/'); ?>/js/app.js"></script>
    <?= $this->renderSection('script'); ?>

    <script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "showDuration": "600",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    </script>

    <?php ?>

    <?php
    if (session()->getFlashdata('dataMessage')) {
        foreach (session()->getFlashdata('dataMessage') as $item) {
            echo '<script>toastr["' .
                session()->getFlashdata('type-status') . '"]("' . $item . '")</script>';
        }
    }
    if (session()->getFlashdata('message')) {
        echo '<script>toastr["' .
            session()->getFlashdata('type-status') . '"]("' . session()->getFlashdata('message') . '")</script>';
    }
    ?>

</body>

</html>