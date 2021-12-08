<!doctype html>
<html lang="en" class="h-100 w-100">
	<head>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>

	<body style="background: #00796B;" class="d-flex justify-content-center align-items-center w-100 h-100 row">
		<div class="card p-4 col-6">
			<div>
				<h2 class="text-center mb-4">Registrarse</h2>

				<?php if(isset($validation)):?>
				<div class="alert alert-warning">
					<?= $validation->listErrors() ?>
				</div>
				<?php endif;?>

				<form action="<?php echo base_url(); ?>/SignupController/store" method="post">
					<div class="form-group mb-3">
						<input type="text" name="name" placeholder="First Name" value="<?= set_value('first_name') ?>" class="form-control" >
					</div>

					<div class="form-group mb-3">
						<input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
					</div>

					<div class="form-group mb-3">
						<input type="password" name="password" placeholder="Password" class="form-control" >
					</div>

					<div class="form-group mb-3">
						<input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" >
					</div>

					<div class="d-grid">
						<button type="submit" class="btn btn-dark">Registrarse</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>