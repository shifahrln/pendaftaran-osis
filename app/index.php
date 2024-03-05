<?php
session_start();
$user = $_SESSION['user'];
if (!isset($user)) {
?>
  <script>
    document.location.href = '../index.php';
  </script>
<?php
} else {
  include "boot.php";
?>

  <body>
    <!-- ini bagian awal navbar -->
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <td><img src="image/logo12-removebg-preview.png" width="80px"></td>
          <a class="navbar-brand" href="#">Input Data Calon Anggota Osis Baru</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>

              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
            </ul>
            <form class="d-flex" role="search" method="POST" action="search.php" target="konten">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
              <button class="btn btn-outline-success" type="submit" name="" value="cari">Search</button>
            </form>

            <div class="dropdown-center ms-2">
              <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $user ?>
              </button>
              <ul class="dropdown-menu">

                <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
              </ul>
            </div>

          </div>
        </div>
      </nav>

      <!-- ini bagian akhir navbar -->

      <!-- halaman -->
      <div class="row">
        <div class="col col-3">
          <ul class="list-group">
            <a href="Dashboard.php" target="konten">
              <li class="list-group-item">Dashboard</li>
            </a>
            <a href="input.php" target="konten">
              <li class="list-group-item">Input Data Calon Anggota Osis</li>
            </a>
            <a href="data.php" target="konten">
              <li class="list-group-item">Data Calon Anggota Osis</li>
            </a>
            <a href="laporan.php" target="konten">
              <li class="list-group-item">Laporan</li>
            </a>
            <a href="logout.php">
              <li class="list-group-item">Logout</li>
            </a>
          </ul>
        </div>

        <div class="col">
          <iframe src="dashboard.php" name="konten" frameborder="0" width="100%" height="800"></iframe>
        </div>
      </div>
      <!-- tutup halaman  -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

  </html>
<?php
}
?>