<!DOCTYPE html>
<html>
<head>
    <title>GIS</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE/dist/css/adminlte.min.css') ?>">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <span class="navbar-brand">GIS Sekolah</span>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <span class="brand-text font-weight-light">GIS</span>
        </a>

        <div class="sidebar">
            <nav>
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item">
                        <a href="/wilayah" class="nav-link">
                            <p>Wilayah</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content -->
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid p-3">
                <?= $this->renderSection('content'); ?>
            </div>
        </section>
    </div>

</div>

<!-- WAJIB: jQuery -->
<script src="<?= base_url('AdminLTE/plugins/jquery/jquery.min.js') ?>"></script>

<!-- WAJIB: Bootstrap -->
<script src="<?= base_url('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- FIX: AdminLTE JS -->
<script src="<?= base_url('AdminLTE/dist/js/adminlte.min.js') ?>"></script>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

</body>
</html>