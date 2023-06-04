<nav class="navbar navbar-dark navbar-expand-md py-3">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="./assets/img/logo-axs.png" alt="">
    </a>
    <button
      data-bs-toggle="collapse"
      class="navbar-toggler"
      data-bs-target="#navcol-5">
      <span class="visually-hidden">Toggle navigation</span
      ><span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navcol-5">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?php echo ($active == 'home') ? 'active' : ''; ?>" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($active == 'showcase') ? 'active' : ''; ?>" href="showcase.php">Showcase</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($active == 'galeri') ? 'active' : ''; ?>" href="galeri.php">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($active == 'event') ? 'active' : ''; ?>" href="event.php">Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($active == 'tentang') ? 'active' : ''; ?>" href="tentang.php">Tentang</a>
        </li>
      </ul>
      <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
          // Jika sudah login, tampilkan tombol logout
          echo '<a class="btn btn-outline ms-md-2" role="button" href="logout.php">Logout</a>';
        } else {
          // Jika belum login, tampilkan tombol login
          echo '<a class="btn btn-outline ms-md-2" role="button" href="login.php">Login</a>';
        }
      ?>
    </div>
  </div>
</nav>