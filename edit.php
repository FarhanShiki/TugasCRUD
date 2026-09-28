<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $gmail = $_POST['gmail'];

    $query = "INSERT INTO tabel_siswa (nis, nama, umur, email)
              VALUES ('$nis', '$nama', '$umur', '$gmail')";

    mysqli_query($koneksi, $query);

    header("Location: home.php");
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <a href="home.php" class="btn btn-secondary">
        Kembali
    </a>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">StudentAPP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
      </div>
    </div>
  </nav>

<!-- Form -->
<div class="container mt-5">

    <div class="card">
        <div class="card-header">
            Form Tambah Data Siswa
        </div>

        <div class="card-body">

            <form action="" method="post">

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-10">
                        <input type="text" name="nis" class="form-control"
                               placeholder="Masukkan NIS">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control"
                               placeholder="Masukkan Nama">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                        <input type="number" name="umur" class="form-control"
                               placeholder="Masukkan Umur">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="gmail" class="form-control"
                            placeholder="Masukkan Gmail">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" name="simpan" class="btn btn-primary">
                            Simpan
                        </button>

                        <a href="home.php" class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>
                </div>

            </form>

        </div>
    </div>

</div>


  <div class="container p-4">
    <p>&copy; 2026 StudentAPP. All rights reserved.</p>
  </div>