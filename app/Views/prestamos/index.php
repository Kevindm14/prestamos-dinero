<?= $this->extend('application') ?>

<?= $this->section('title') ?>
Prestamos
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container d-flex justify-content-center flex-column my-5">
  <div class="d-flex justify-content-between mb-3">
    <h1 class="h4"><strong>Prestamos</strong></h1>
    <a href="<?= base_url() . '/prestamos/new' ?>" class="btn btn-primary">Nuevo Prestamo</a>
  </div>

  <table class="table table-bordered rounded">
    <thead style="background-color: #1c2331; color: white;">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Cliente</th>
        <th scope="col">Valor Total</th>
        <th scope="col">Valor Cuotas</th>
        <th scope="col">Tipo de Prestamos</th>
        <th scope="col">Cuotas</th>
        <th scope="col">Cuotas Restantes</th>
        <th scope="col">Estado</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data as $key) : ?>
        <tr>
          <?php $valueQuota = $key['total_value'] / $key['quotas'] ?>
        <td><?= $key['id'] ?></td>
          <td><?= $key['client_id'] ?></td>
          <td><?= $key['total_value'] ?></td>
          <td><?= $valueQuota ?> </td>
          <td><?= $key['loan_type'] ?></td>
          <td><?= $key['quotas'] ?></td>
          <td><?= $key['quotas'] ?></td>
          <td><span class="badge bg-info text-dark">Pendiente</span></td>
          <td>
            <a href="<?= base_url('/prestamos/delete/'). $key['id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-search-dollar"></i></a>
            <a href="#" class="btn btn-sm btn-success"><i class="fas fa-dollar-sign"></i></a>
            <button class="btn btn-sm btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash"></i></button>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
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
        icon: "error",
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
        icon: "error",
      });
      break;
    case 'deleted':
      swal({
        title: "Good job!",
        text: "Cliente borrado correctamente",
        icon: "success",
      });
      break;
    case 'error_deleted':
      swal({
        title: "Oh no!",
        text: "Error al borrar",
        icon: "error",
      });
      break;

    default:
      break;
  }
</script>

<?= $this->endSection() ?>