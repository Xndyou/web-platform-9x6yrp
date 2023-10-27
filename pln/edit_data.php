<?php
include 'koneksi.php';
$nomor      =$_GET['no'];
$query      ="SELECT * FROM masuk_data WHERE NO_DATA=$nomor";
$result     =mysqli_query($koneksi, $query);
$row        =mysqli_fetch_array($result);

session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: edit_data.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <!--Data tabel-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Edit Data - SIDIA - Sistem Informasi Data Inventaris Ac PLN</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">
  <!-- Example Code -->

  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid" bis_skin_checked="1">
      <a class="navbar-brand" href="#">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_PLN.png" alt="Logo" width="35" height="50" class="d-inline-block align-text-top" />
        <!--Icon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Righteous&display=swap" rel="stylesheet">
        SIDIA PLN (persero) UP3
      </a>
      <ul class="nav nav-tabs" class="nav justify-content-left">
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link text-black" aria-current="page" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" aria-current="page" href="index.php">Data AC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" aria-current="page" href="s_logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md">
        <h2 class="text-center">Edit Data</h2>
      </div>
      <hr>
    </div>
    <div class="row">
      <div class="col-md">
        <form action="simpan.php" method="post" class="justify-content">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Ruangan</label>
            <input type="text" class="form-control w-50" value="<?php echo $row['NAMA_RUANGAN'];?>" name="NAMA_RUANGAN" placeholder="Nama Ruangan">
          </div>
          <div class="mb-3">
            <label for="merk" class="form-label">Merk Ac</label>
            <input type="text" class="form-control w-50" value="<?php echo $row['MERK_AC'];?>" name="MERK_AC" placeholder="Merk Ac">
          </div>
          <div class="mb-3">
            <label for="tipe-ac-pk">Tipe AC(PK)</label>
            <select class="form-select w-50" name="TIPE" aria-label="Default select example">
              <option selected>Pilih</option>
              <option value="1/2">1/2</option>
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="merk" class="form-label">Kondisi</label>
            <input type="text" class="form-control w-50" value="<?php echo $row['KONDISI'];?>" name="KONDISI" placeholder="Kondisi">
          </div>
          <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan/Usulan</label>
            <input type="text" class="form-control w-50" value="<?php echo $row['KETERANGAN'];?>" name="KETERANGAN" placeholder="Keterangan/Usulan">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Bukti Dokumentasi</label>
            <input class="form-control w-50" type="file" name="FOTO">
          </div>
          <hr>
          <a href="index.php" class="btn btn-secondary" role="button">Kembali</a>
          <button type="submit" name="tambah" value="simpan" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
  <div class="sticky-bottom">
    <footer class="text-center bg-body-tertiary text-black">
      <strong>Copyright &copy; 2023 <a href="login.php">SIDIA-PLN</a>.</strong> All rights reserved.
    </footer>
  </div>
</body>
</html>