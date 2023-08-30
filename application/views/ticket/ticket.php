<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('_partials/header.php') ?>
    <?php $this->load->view('_partials/sidenav.php') ?>
    <div id="wrapper">
        <!-- Mini Header -->
        <?php $this->load->view('_partials/mini_header.php') ?>
        <div class="content animate-panel">
            <!-- Standar Table -->
            <?php $this->load->view('_partials/datatables/ticket.php') ?>
        </div>
    </div>
    <?php $this->load->view('_partials/script.php') ?>
</body>

</html>