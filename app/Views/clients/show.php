<?= $this->extend('application') ?>

<?= $this->section('title') ?>
cliente
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container p-5">
    <a href="<?= base_url() ?>" class="btn btn-sm btn-outline-primary">Volver</a>
    <div class="card p-4 rounded mt-3">
        <h1 class="h3">Cliente <?= $data[0]['id'] ?></h1>
        
        <div class="row mt-3">
            <div class="col-4 border-end">
                <h1 class="h6">Nombre</h1>
                <p><?= $data[0]['first_name'] ?></p>
            </div>
            <div class="col-4 border-end">
                <h1 class="h6">Apellido</h1>
                <p><?= $data[0]['last_name'] ?></p>
            </div>

            <div class="col-4">
                <h1 class="h6">Telefono</h1>
                <p><?= $data[0]['phone'] ?></p>
            </div>

            <hr class="w-100 my-3">

            <div class="col-4">
                <h1 class="h6">Telefono</h1>
                <p><?= $data[0]['email'] ?></p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>