<?= $this->extend("layouts/template"); ?>

<?= $this->section("content"); ?>
<div class="container d-flex justify-content-center">
    <div class="card my-3 w-50">
        <div class="card-header">
            <h1>Profil Siswa<h1>
</div>
<div class="card-body">
    <div class="row m1-2">
        <h1 class="col-4">Nama</h1>
        <h1>: <?= $siswa['name']; ?> </h1>
    </div>
    <div class="row m1-2">
        <h1 class="col-4">NIS</h1>
        <h1>: <?= $siswa['nis']; ?> </h1>
    </div>
    <div class="row m1-2">
        <h1 class="col-4">Email</h1>
        <h1>: <?= $siswa['email']; ?> </h1>
    </div>
</div>
</div>
</div>
<?= $this->endSection(); ?>