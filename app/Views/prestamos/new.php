<?= $this->extend('application') ?>

<?= $this->section('title') ?>
Nuevo cliente
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php $validation = \Config\Services::validation(); ?>

<div class="container my-5">
    <a href="<?= base_url('/prestamos') ?>" class="btn btn-sm btn-outline-primary">Volver</a>

    <form action="<?= base_url() . '/prestamos/create' ?>" method="post" class="border rounded p-5 mt-3">
        <h1 class="text-center h4">Nuevo Prestamo</h1>

        <div class="row">
            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Clientes</label>
                <select name="client_id" id="clientID" class="form-control">
                    <option value="" disabled selected>Selecciona un Cliente</option>
                    <?php foreach ($clients as $key) : ?>
                        <option value="<?= $key["id"] ?>"><?= $key["first_name"] ?> <?= $key["last_name"] ?></option>
                    <?php endforeach ?>
                </select>
                <?php if($validation->getError('first_name')) {?>
                <div class="text-danger mt-2">
                    <?= $error = $validation->getError('first_name'); ?>
                </div>
                <?php } ?>
            </div>

            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Valor total</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="total_value">
                <?php if($validation->getError('last_name')) {?>
                <div class="text-danger mt-2">
                    <?= $error = $validation->getError('last_name'); ?>
                </div>
                <?php } ?>
            </div>

            

            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Tipo de prestamo</label>
                <select name="loan_type" id="loanType" class="form-control">
                    <option value="" disabled selected>Tipo de prestamo</option>
                    <?php foreach ($prestamoType as $key => $item) : ?>
                        <option value="<?= $item ?>"><?= $key ?></option>
                    <?php endforeach ?>
                </select>
                <?php if($validation->getError('email')) {?>
                <div class="text-danger mt-2">
                    <?= $error = $validation->getError('email'); ?>
                </div>
                <?php } ?>
            </div>

            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Cuotas</label>
                <input type="number" id="quotas" name="quotas" class="form-control">
                <?php if($validation->getError('email')) {?>
                <div class="text-danger mt-2">
                    <?= $error = $validation->getError('email'); ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<?= $this->endSection() ?>