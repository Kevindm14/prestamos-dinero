<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?= $this->renderSection('title') ?></title>
  </head>
  <body>
		<nav class="navbar navbar-expand-lg  navbar-dark" style="background-color: #1c2331">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Prestamo dinero</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="<?php echo base_url().'/' ?>">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url().'/' ?>">Clientes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url().'/prestamos' ?>">Prestamos</a>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
									Historial clientes
								</a>

								<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<li><a class="dropdown-item" href="#">Historial</a></li>
								</ul>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="<?php echo base_url().'/logout' ?>">Cerrar sesion</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
			
		<?= $this->renderSection('content') ?>

		<footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
			<section class="p-4">
				<div class="container text-center text-md-start mt-5">
					<!-- Grid row -->
					<div class="row mt-3">
					<!-- Grid column -->
					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
						<!-- Content -->
						<h6 class="text-uppercase fw-bold">Prestamos Dinero</h6>
						<hr
							class="mb-4 mt-0 d-inline-block mx-auto"
							style="width: 60px; background-color: #7c4dff; height: 2px"
							/>
						<p>
						Somos una empresa que agiliza el prestamo de dinero
						</p>
					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
						<!-- Links -->
						<h6 class="text-uppercase fw-bold">Contacto</h6>
						<hr
							class="mb-4 mt-0 d-inline-block mx-auto"
							style="width: 60px; background-color: #7c4dff; height: 2px"
							/>
						<p><i class="fas fa-home mr-3"></i> Barranquilla, Atlantico </p>
						<p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
						<p><i class="fas fa-phone mr-3"></i> +57 300 231 23 89</p>
					</div>
					<!-- Grid column -->
					</div>
					<!-- Grid row -->
				</div>
			</section>

			<!-- Copyright -->
			<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
				© 2021 Copyright: <a class="text-white" href="#">Prestamos Dinero</a>
			</div>
			<!-- Copyright -->
		</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://kit.fontawesome.com/ee6ec8a71b.js" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
