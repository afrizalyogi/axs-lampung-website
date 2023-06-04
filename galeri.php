<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
	<head>
		<?php
        $title = "Galeri - ";
				$css = "galeri";
        include './components/meta.php'; 
    ?>
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
								<h1 class="text-uppercase fw-bold mb-5">Galeri AXS Lampung</h1>
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
					<?php
						// Include database connection file
						require_once 'db_connect.php';

						$sql = "SELECT * FROM galeri";
						$result = mysqli_query($conn, $sql);

						// Check if there are any records in the result set
						if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_assoc($result)) {
										?>
										<div class="col">
												<div>
														<img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px" src="<?= $row['image_url'] ?>" />
														<div class="py-4">
																<h4><?= $row['title'] ?></h4>
																<p><?= $row['description'] ?></p>
																<a class="btn btn-primary btn-lg" role="button" href="<?= $row['link_target'] ?>">
																		Lihat Detail
																</a>
														</div>
												</div>
										</div>
										<?php
								}
						} else {
								echo 'No records found.';
						}

						// Close the database connection
						mysqli_close($conn);
					?>
				</div>
			</div>
		</section>
		<?php include './components/footer.php'; ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
