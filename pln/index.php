<?php
require 'koneksi.php';
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <!--Data tabel-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>SIDIA - Sistem Informasi Data Inventaris Ac PLN</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
  </script>
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
          <a class="nav-link text-black" aria-current="page" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-black" aria-current="page" href="tambah.php">Data Ac</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" aria-current="page" href="s_logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="div">
    <center>
      <h1>Unit UP3 Banjarmasin</h1>
    </center>
    <hr>
  </div>
  <div class="row">
    <div class="col-md">
      <a href="tambah.php" class="btn btn-primary"><i class="bi bi-file-earmark-plus"></i>&nbsp;Tambah Data</a>
      <a href="export.php" class="btn btn-success ms-1" target="_blank"><i class="bi bi-file-earmark-spreadsheet"></i>&nbsp;Ekspor ke Excell</a>
    </div>
  </div>
  <div class="row my-5">
    <div class="col-md">
      <table id="mauexport" class="table table-striped nowrap" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Ruangan</th>
            <th>Merk Ac</th>
            <th>Tipe Ac</th>
            <th>Kondisi</th>
            <th>Keterangan</th>
            <th>Foto</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
        include 'koneksi.php';
        $query = "SELECT * FROM masuk_data";
        $result = mysqli_query($koneksi, $query);
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>
            <td>$no</td>
            <td>".$row['NAMA_RUANGAN']."</td>
            <td>".$row['MERK_AC']."</td>
            <td>".$row['TIPE']."</td>
            <td>".$row['KONDISI']."</td>
            <td>".$row['KETERANGAN']."</td>
            <td>
            <img src='image/" . $row['FOTO'] . "' style='width: 200px; height: 100px; margin: 10px;'>
            </td>
            <td><a href='edit_data.php?no=" . $row['NO_DATA'] . "' role='button' class='btn btn-success ms-2'>Edit</a>
            <a href='hapus.php?no=" . $row['NO_DATA'] . "' role='button' class='btn btn-danger ms-2'>Hapus</a></td>
            </tr>";
            $no++;
        }
        ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="sticky-bottom">
    <footer class="text-center bg-body-tertiary text-black">
      <strong>Copyright &copy; 2023 <a href="login.php">SIDIA-PLN</a>.</strong> All rights reserved.
    </footer>
  </div>
 
