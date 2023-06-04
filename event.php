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
    <link rel="stylesheet" href="assets/css/event.css" />
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
						<h2 class="fw-bold">Kegiatan Mendatang</h2>
						<p>Update Info Tentang Kegiatan AXS Lampung</p>
					</div>
				</div>
				<div class="row my-3">
					<div class="col">
						<img
								class="rounded img-fluid d-block w-100 fit-cover"
								style="height: 200px"
								src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
							
						
					</div>
					<div class="col">
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
                <div class="row my-3">
					<div class="col">
						<img
								class="rounded img-fluid d-block w-100 fit-cover"
								style="height: 200px"
								src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
							
						
					</div>
					<div class="col">
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
		</section>
    <?php include './components/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>