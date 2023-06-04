<!DOCTYPE html>
<html lang="id">
<head>
    <?php
        $title = "Event - ";
        $css = "event";
        include './components/meta.php'; 
    ?>
</head>

<body>
    <?php 
        $active = "event";
        include './components/navbar.php'; 
    ?>
    <section id="event">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-8 col-xl-6 text-center mx-auto">
						<h2 class="text-uppercase fw-bold">Kegiatan Mendatang</h2>
						<p>Update Info Tentang Kegiatan AXS Lampung</p>
					</div>
				</div>
                <?php
                    // Include database connection file
                    require_once 'db_connect.php';

                    // Select data from the 'event' table
                    $sql = "SELECT * FROM event";
                    $result = mysqli_query($conn, $sql);

                    // Check if there are any records in the result set
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="row my-3">
                                <div class="col">
                                    <img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px" src="<?= $row['image_url'] ?>" />
                                </div>
                                <div class="col">
                                    <h4><?= $row['title'] ?></h4>
                                    <p><?= $row['description'] ?></p>
                                    <a class="btn btn-primary btn-lg" role="button" href="<?= $row['link_target'] ?>">
                                        Lihat Detail
                                    </a>
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
		</section>
    <?php include './components/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>