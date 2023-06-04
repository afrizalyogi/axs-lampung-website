<?php
	session_start();
	include 'db_connect.php';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$no_telp = $_POST['no_telp'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM akun WHERE no_telp = '$no_telp' AND password = '$password'";
		$result = mysqli_query($conn, $sql);

		if ($result && mysqli_num_rows($result) > 0) {
			$query = "SELECT nama FROM akun WHERE no_telp = '$no_telp'";

			$result = $conn->query($query);

			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$nama = $row['nama'];
			}
			
			$_SESSION['logged_in'] = true;
			$_SESSION['no_telp'] = $no_telp;
			$_SESSION['nama'] = $nama;

			// Alihkan pengguna ke halaman lain setelah login berhasil
			header('Location: index.php');
			exit;
		} 
		else {
			$error_message = 'Username atau password salah';
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
							<?php if (isset($error_message)): ?>
                <div class="alert alert-danger mt-3"><?php echo $error_message; ?></div>
              <?php endif; ?>
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
