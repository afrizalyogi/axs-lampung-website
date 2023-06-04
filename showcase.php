<!DOCTYPE html>
<html lang="id">
	<head>
		<?php
			$title = "Showcase - ";
			$css = "showcase";
			include './components/meta.php'; 
    ?>
	</head>

	<body>
		<?php 
			$active = "showcase";
			include './components/navbar.php'; 
		?>
		<section id="showcase">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-8 col-xl-6 text-center mx-auto">
						<h2 class="text-uppercase fw-bold">Showcase</h2>
						<p>Inspirasi Modifikasi Dari Komunitas Kami</p>
					</div>
				</div>
				<div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
					<?php
						include 'db_connect.php';

						$query = "SELECT * FROM showcase";
						$result = mysqli_query($conn, $query);

						// Periksa apakah query berhasil dieksekusi
						if (mysqli_num_rows($result) > 0) {
							// Looping untuk menampilkan data modifikasi mobil
							while ($row = mysqli_fetch_assoc($result)) {
					?>
								<div class="col">
									<div>
										<img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px" src="<?= $row['image_url'] ?>" />
										<div class="py-4">
											<h4><?= $row['title'] ?></h4>
											<h6><?= $row['owner'] ?></h6>
											<p><?= $row['description'] ?></p>
											<a class="btn btn-primary btn-lg" role="button" href="<?= $row['link_target'] ?>">Lihat Detail</a>
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
