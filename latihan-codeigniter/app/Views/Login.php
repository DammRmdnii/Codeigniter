<?= $this->extend("layouts/template"); ?>

<?= $this->section("content"); ?>
<div class="container my-5 col-4">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">login</h1>
    </div>
<div class="card-body">

<div class="row">
    <div class="col mx-auto">
        <form action="<?= base_url('login/proses') ?>" method="POST">
        <?= csrf_field() ?>
        <label>Email</label>
        <input type="text" class="form-control" name="email" required>
        <label>Password</label>
        <input type="password" class="form-control" name="password" required>
        <br>
        <input type="submit" class="btn btn-primary" value="Login">
</form>
</div>

</div>
</div>
</div>
</div>

<?= $this->endSection(); ?>