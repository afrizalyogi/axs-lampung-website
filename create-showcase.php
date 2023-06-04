<?php
// Periksa status login pengguna
// Jika pengguna belum login, alihkan ke halaman login
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header('Location: login.php');
  exit;
}

// Jika pengguna sudah login, tampilkan halaman form showcase
?>

<!DOCTYPE html>
<html lang="id">
	<head>
		<?php
			$title = "Showcase - ";
			$css = "create-showcase";
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
						<h2 class="text-uppercase fw-bold">Showcase Mobil Anda</h2>
						<p>Beri Inspirasi Modifikasi Mobil Anda Kepada Para Member</p>
					</div>
				</div>
				<?php
				// Periksa apakah form telah disubmit
				if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					// Include file db_connect.php untuk melakukan koneksi ke database
					include 'db_connect.php';

					// Mendapatkan nilai inputan dari form
					$image_url = $_POST['image_url'];
					$title = $_POST['title'];
					$owner = $_POST['owner'];
					$description = $_POST['description'];
					$link_target = "#";

					// Query untuk memasukkan data showcase ke dalam tabel showcase
					$query = "INSERT INTO showcase (image_url, title, owner, description) VALUES ('$image_url', '$title', '$owner', '$description')";
					$result = mysqli_query($conn, $query);

					// Periksa apakah query berhasil dieksekusi
					if ($result) {
						echo "Data showcase berhasil ditambahkan.";
					} else {
						echo "Terjadi kesalahan saat menambahkan data showcase: " . mysqli_error($conn);
					}

					// Tutup koneksi ke database
					mysqli_close($conn);
				}
				?>

				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<label for="image_url">Image URL:</label>
					<input class="form-control" type="text" name="image_url" id="image_url" required><br>

					<label for="title">Title:</label>
					<input class="form-control" type="text" name="title" id="title" required><br>

					<label for="owner">Owner:</label>
					<input class="form-control" type="text" name="owner" id="owner" required><br>

					<label for="description">Description:</label><br>
					<textarea class="form-control" name="description" id="description" rows="4" required></textarea><br>

					<input class="btn btn-primary" type="submit" value="Submit">
				</form>
			</div>
		</section>
		<?php include './components/footer.php'; ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
