<?= $this->extend('application') ?>

<?= $this->section('title') ?>
Nuevo cliente
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php $validation = \Config\Services::validation(); ?>

<div class="container my-5">
    <a href="<?= base_url() ?>" class="btn btn-sm btn-outline-primary">Volver</a>

    <form action="<?= base_url() . '/create' ?>" method="post" class="border rounded p-5 mt-3">
        <h1 class="text-center h4">Nuevo Cliente</h1>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="first_name" value="<?= $data['first_name'] ?>">
            <?php if($validation->getError('first_name')) {?>
              <div class="text-danger mt-2">
                <?= $error = $validation->getError('first_name'); ?>
              </div>
            <?php } ?>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="last_name">
            <?php if($validation->getError('last_name')) {?>
              <div class="text-danger mt-2">
                <?= $error = $validation->getError('last_name'); ?>
              </div>
            <?php } ?>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="phone">
            <?php if($validation->getError('phone')) {?>
              <div class="text-danger mt-2">
                <?= $error = $validation->getError('phone'); ?>
              </div>
            <?php } ?>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            <?php if($validation->getError('email')) {?>
              <div class="text-danger mt-2">
                <?= $error = $validation->getError('email'); ?>
              </div>
            <?php } ?>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<?= $this->endSection() ?>