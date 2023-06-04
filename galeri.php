<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
		<title>Galeri - AXS Lampung</title>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
			rel="stylesheet" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/galeri.css" />
	</head>

	<body>
		<?php 
			$active = "galeri";
			include './components/navbar.php'; 
		?>
		<section id="hero" class="py-4 py-xl-5">
			<div class="container">
				<div
					class="border rounded border-0 d-flex flex-column justify-content-center align-items-center p-4 py-5"
					style="
						background: linear-gradient(
								rgba(0, 123, 255, 0.2),
								rgba(0, 123, 255, 0.2)
							),
							url('https://cdn.bootstrapstudio.io/placeholders/1400x800.png')
								center / cover;
						height: 500px;
					">
					<div class="row">
						<div
							class="text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
							<div>
								<h1 class="fw-bold mb-5">Galeri AXS Lampung</h1>
								<a href="#galeri" class="btn btn-primary" type="button">
									Jelajahi Sekarang
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="galeri">
			<div class="container">
				<div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
					<div class="col">
						<div>
							<img
								class="rounded img-fluid d-block w-100 fit-cover"
								style="height: 200px"
								src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
							<div class="py-4">
								<h4>Toyota Avanza 2018</h4>
								<p>
									Nullam id dolor id nibh ultricies vehicula ut id elit. Cras
									justo odio, dapibus ac facilisis in, egestas eget quam. Donec
									id elit non mi porta gravida at eget metus.
								</p>
								<a class="btn btn-primary btn-lg" role="button" href="#">
									Lihat Detail
								</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div>
							<img
								class="rounded img-fluid d-block w-100 fit-cover"
								style="height: 200px"
								src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
							<div class="py-4">
								<h4>Toyota Avanza 2018</h4>
								<p>
									Nullam id dolor id nibh ultricies vehicula ut id elit. Cras
									justo odio, dapibus ac facilisis in, egestas eget quam. Donec
									id elit non mi porta gravida at eget metus.
								</p>
								<a class="btn btn-primary btn-lg" role="button" href="#">
									Lihat Detail
								</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div>
							<img
								class="rounded img-fluid d-block w-100 fit-cover"
								style="height: 200px"
								src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
							<div class="py-4">
								<h4>Toyota Avanza 2018</h4>
								<p>
									Nullam id dolor id nibh ultricies vehicula ut id elit. Cras
									justo odio, dapibus ac facilisis in, egestas eget quam. Donec
									id elit non mi porta gravida at eget metus.
								</p>
								<a class="btn btn-primary btn-lg" role="button" href="#">
									Lihat Detail
								</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div>
							<img
								class="rounded img-fluid d-block w-100 fit-cover"
								style="height: 200px"
								src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
							<div class="py-4">
								<h4>Toyota Avanza 2018</h4>
								<p>
									Nullam id dolor id nibh ultricies vehicula ut id elit. Cras
									justo odio, dapibus ac facilisis in, egestas eget quam. Donec
									id elit non mi porta gravida at eget metus.
								</p>
								<a class="btn btn-primary btn-lg" role="button" href="#">
									Lihat Detail
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include './components/footer.php'; ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
