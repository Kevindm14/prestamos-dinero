<?= $this->extend('application') ?>

<?= $this->section('title') ?>
Clientes
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container d-flex justify-content-center flex-column my-5">
    <div class="d-flex justify-content-between">
        <h1 class="mb-3 h4"><strong>Clientes</strong></h1>
        <button class="btn btn-primary">Nuevo cliente</button>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Creado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $key): ?>
                <tr>
                    <td><?= $key["id"] ?></td>
                    <td>
                        <a href="#"><?= $key["first_name"] ?></a>
                    </td>
                    <td><?= $key["last_name"]  ?></td>
                    <td><?= $key["phone"] ?></td>
                    <td><?= $key["created_at"] ?></td>
                    <td>
                        <button class="btn btn-sm btn-warning"><i class="fas fa-pen"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>