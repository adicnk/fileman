<?= $this->extend('template/relogin') ?>
<?= $this->section('content') ?>

<?php $db = \Config\Database::connect(); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="mt-3">
        <hr>
    </div>
    <!-- Page Heading -->
    <div class="align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <h6 class="h6 mb-0 text-gray">Username / Password Salah</h6>
    </div>
    <a class="btn btn-primary mt-3 mb-4" href="/">Kembali ke User Login</a>
    <div class="mt-3">
        <hr>
    </div>
</div>
<!-- /.container-fluid -->

<?= $this->endSection() ?>