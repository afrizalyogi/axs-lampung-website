<nav class="navbar navbar-dark navbar-expand-md py-3">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
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
          <a class="nav-link <?php echo ($active == 'home') ? 'active' : ''; ?>" href="index.php">Home</a>
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
          <a class="nav-link <?php echo ($active == 'tentang') ? 'active' : ''; ?>" href="#">Tentang</a>
        </li>
      </ul>
      <a class="btn btn-outline ms-md-2" role="button" href="#">Login</a>
    </div>
  </div>
</nav>