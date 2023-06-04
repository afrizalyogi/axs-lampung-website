<?php
	include 'db_connect.php';
	// Periksa apakah form telah disubmit
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Mendapatkan nilai inputan dari form
		$no_telp = $_POST['no_telp'];
		$password = $_POST['password'];

		// Lakukan validasi login, misalnya dengan membandingkan dengan data pengguna di database
		// ...
		$sql = "SELECT * FROM akun WHERE no_telp = '$no_telp' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

		if ($result && mysqli_num_rows($result) > 0) {
			$query = "SELECT nama FROM akun WHERE no_telp = '$no_telp'";

			// Jalankan query
			$result = $conn->query($query);

			// Periksa apakah query berhasil dieksekusi
			if ($result->num_rows > 0) {
					// Ambil data nama dari baris pertama hasil query
					$row = $result->fetch_assoc();
					$nama = $row['nama'];
			}
			// Set session jika login berhasil
			session_start();
			$_SESSION['logged_in'] = true;
			$_SESSION['no_telp'] = $no_telp;
			$_SESSION['nama'] = $nama;

			// Alihkan pengguna ke halaman lain setelah login berhasil
			header('Location: index.php');
			exit;
		} 
		else {
			echo '<div class="alert alert-danger mt-3">Username atau password salah</div>';
		}
	}

	// Tutup koneksi
	mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="id">
	<head>
		<?php
			$title = "Login - ";
			$css = "login";
			include './components/meta.php'; 
    ?>
	</head>

	<body>
		<div class="row">
			<div class="col-md-6 left"></div>
			<div class="col-md-6 right">
				<section id="form" class="py-4 py-xl-5">	
				<br>
					<div class="row mb-5">
						<div class="col-md-8 col-xl-6 text-center mx-auto">
							<h2>Log in</h2>
							<p>Selamat datang kembali anggota AXS Lampung!</p>
						</div>
					</div>
					<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="container text-center">
						<div class="mb-3">
							<input
								class="form-control"
								type="number"
								name="no_telp"
								placeholder="No Telp"
								required
								/>
						</div>
						<div class="mb-3">
							<input
								class="form-control"
								type="password"
								name="password"
								placeholder="Password"
								required />
						</div>
						<div class="mb-3">
							<button class="btn btn-primary d-block w-100" type="submit">
								Login
							</button>
						</div>
					</form>
				</section>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
