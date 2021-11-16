<?= $this->extend('application') ?>

<?= $this->section('title') ?>
Nuevo cliente
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container my-5">
    <form action="<?= base_url() . '/create' ?>" method="post" class="border rounded p-5">
        <h1 class="text-center h4">Nuevo Cliente</h1>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="first_name">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="last_name">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="phone">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
<?= $this->endSection() ?>