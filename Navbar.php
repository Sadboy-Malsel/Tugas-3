<?php
include "css.php";
?>
<html>
    <body>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>Perpustakaan Universitas Gajayana</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datamahasiswa.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datadosen.php">Dosen</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="matakuliah.php">Mata Kuliah</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="datajadwal.php">Jadwal Kuliah</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 
    </body>
</html>
