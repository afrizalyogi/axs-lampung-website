<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
		<title>AXS Lampung</title>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
			rel="stylesheet" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/index.css" />
	</head>

	<body>
		<?php 
			$active = "home";
			include './components/navbar.php'; 
		?>
		<div id="hero">
			<section class="py-5">
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
								class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
								<div>
									<h1 class="fw-bold">AXS Lampung</h1>
									<p class="mb-4">Independent We Stand. Brotherhood No Limit</p>
									<a href="#tentang" class="btn btn-primary" type="button">
										Jelajahi Sekarang
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<section id="tentang">
			<div class="container row gy-4">
				<div
					class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
					<div style="max-width: 350px">
						<h2 class="text-uppercase fw-bold">Tentang Kami</h2>
						<hr />
						<p class="mt-3 mb-4">
							AXS Lampung adalah sebuah komunitas mobil Avanza dan Xenia yang
							bertujuan untuk saling membantu antar komunitas, baik secara
							internal maupun eksternal. Kami adalah komunitas yang
							didedikasikan untuk para pemilik mobil Avanza dan Xenia di Lampung
							dan sekitarnya.
						</p>
						<a class="btn btn-primary btn-lg" role="button" href="#">
							Lihat Detail
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="p-xl-5 m-xl-5">
						<img
							class="rounded img-fluid w-100"
							style="min-height: 300px"
							src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
					</div>
				</div>
			</div>
		</section>
		<section id="tim">
			<div class="container">
				<h2 class="fw-bold">Tim Kami</h2>
				<hr />
				<div class="row gy-4">
				<?php
					// Read the JSON file
					$json = file_get_contents('./data/tim.json');
					// Decode the JSON data into an associative array
					$teams = json_decode($json, true);

					// Iterate over the teams array
					foreach ($teams as $team) {
						$image = $team['image'];
						$name = $team['name'];
						$title = $team['title'];
						?>
						<div class="col">
							<div>
								<img class="rounded img-fluid d-block w-100" style="height: 200px" src="<?= $image ?>" />
								<div class="py-4 text-center">
									<h4><?= $name; ?></h4>
									<p><?= $title; ?></p>
								</div>
							</div>
						</div>
						<?php
					}
				?>
				</div>
			</div>
		</section>
		<section id="partner">
			<div class="container">
				<div class="row gy-4">
				<div class="row">
					<?php
						// Read the JSON file
						$json = file_get_contents('./data/brand.json');
						// Decode the JSON data into an array
						$images = json_decode($json, true);

						// Iterate over the images array
						foreach ($images as $image) {
							$name = $image['name'];
							$url = $image['url'];
					?>
						<div class="col">
							<div>
								<img class="rounded img-fluid d-block w-100" style="height: 64px" src="<?= $url ?>" alt="<?= $name ?>" />
							</div>
						</div>
					<?php
						}
					?>
				</div>
			</div>
		</section>
		<section id="event">
			<div class="container">
				<h2 class="fw-bold">Kegiatan Mendatang</h2>
				<hr />
				<div class="row gy-4">
				<div class="row">
					<?php
						// Read the JSON file
						$json = file_get_contents('./data/event.json');
						// Decode the JSON data into an associative array
						$activities = json_decode($json, true);

						// Iterate over the activities array
						foreach ($activities as $activity) {
							$image = $activity['image'];
							$title = $activity['title'];
							$link = $activity['link'];
					?>
						<div class="col">
							<div>
								<img class="rounded img-fluid d-block w-100" style="height: 200px" src="<?= $image ?>" />
								<div class="py-4">
									<h4 class="mb-3"><?= $title ?></h4>
									<a class="btn btn-primary btn-lg" role="button" href="<?= $link ?>">
										Lihat Detail
									</a>
								</div>
							</div>
						</div>
					<?php
						}
					?>
				</div>
			</div>
		</section>
		<?php include './components/footer.php'; ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
