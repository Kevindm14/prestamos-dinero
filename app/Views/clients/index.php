<?= $this->extend('application') ?>

<?= $this->section('title') ?>
Clientes
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container d-flex justify-content-center flex-column my-5">
  <div class="d-flex justify-content-between">
    <h1 class="mb-3 h4"><strong>Clientes</strong></h1>
    <a href="<?= base_url() . '/new' ?>" class="btn btn-primary">Nuevo cliente</a>
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
      <?php foreach ($data as $key) : ?>
        <tr>
          <td><?= $key["id"] ?></td>
          <td>
            <a href="#"><?= $key["first_name"] ?></a>
          </td>
          <td><?= $key["last_name"]  ?></td>
          <td><?= $key["phone"] ?></td>
          <td><?= $key["created_at"] ?></td>
          <td>
            <a href="<?= base_url() . '/edit/' . $key['id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-pen"></i></a>
            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Borrar cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Estas seguro de borrar el cliente?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Borrar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  let msg = '<?php echo $message ?>';

  switch (msg) {
    case 'created':
      swal({
        title: "Good job!",
        text: "Agregado con exito",
        icon: "success",
      });
      break;
    case 'error_created':
      swal({
        title: "Oh no!",
        text: "Error al agregar",
        icon: "danger",
      });
      break;
    case 'updated':
      swal({
        title: "Good job!",
        text: "Actualizado correctamente",
        icon: "success",
      });
      break;
    case 'error_updated':
      swal({
        title: "Oh no!",
        text: "Error al actualizar",
        icon: "danger",
      });
      break;

    default:
      break;
  }
</script>

<?= $this->endSection() ?>