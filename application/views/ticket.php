<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body class="fixed-navbar fixed-sidebar">
    <?php $this->load->view('_partials/header.php') ?>
    <?php $this->load->view('_partials/sidenav.php') ?>
    <div id="wrapper">
        <!-- Mini Header -->
        <?php $this->load->view('_partials/mini_header.php') ?>
        <div class="content animate-panel">
            <!-- Standar Table -->
            <?php $this->load->view('_partials/datatables/'.$datatable.'.php') ?>
        </div>
    </div>
    <?php $this->load->view('_partials/modals/tambah-data.php') ?>
    <?php $this->load->view('_partials/modals/info.php') ?>
    <?php $this->load->view('_partials/modals/warning.php') ?>
    <?php $this->load->view('_partials/modals/danger.php') ?>
    <?php $this->load->view('_partials/script/script-surat.php') ?>
</body>

</html>