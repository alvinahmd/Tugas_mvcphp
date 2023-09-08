<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];?></title>
    <link rel="stylesheet" href="http://localhost/mvcphp/public/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg" style="position:sticyk 0;background-color: #071952;">
  <div class="container-fluid container" style="color: #EEEDED; font-size: 20px">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?= BASE_URL;?>/home" style="color: #75C2F6">
      RPL <span style="color: white">Rekayasa Perangkat Lunak</span>
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <div class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <p style="margin-top: 12px; color:">
          (Rekayasa Perangkat Lunak )
        </p> -->
      </div>
      <div class="d-flex"  >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"  style="color: #F4F9F9" aria-current="page" href="<?= BASE_URL;?>/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #F4F9F9" href="<?= BASE_URL; ?>/jurusan">Kopetensi Keahlian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #F4F9F9" aria-disabled="true" href="<?= BASE_URL; ?>/data_guru">Data Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #F4F9F9" aria-disabled="true" href="<?= BASE_URL; ?>/data_siswaa">Data Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #F4F9F9" aria-disabled="true" href="<?= BASE_URL; ?>/about">About</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>
</body>
</html>