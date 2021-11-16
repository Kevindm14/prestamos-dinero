<?= $this->extend('application') ?>

<?= $this->section('title') ?>
Editar cliente
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php 
    $id = $client['id'];
    $first_name = $client['first_name'];
    $last_name = $client['last_name'];
    $phone = $client['phone'];
    $email = $client['email'];
?>
<div class="container my-5">
    <form action="<?= base_url() . '/updateAll' ?>" method="POST" class="border rounded p-5">
        <h1 class="text-center h4">Editar Cliente</h1>

        <input type="hidden" name="id" value="<?= $id ?>">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="first_name" value="<?= $first_name ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="last_name" value="<?= $last_name ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="phone" value="<?= $phone ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?= $email ?>">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
<?= $this->endSection() ?>