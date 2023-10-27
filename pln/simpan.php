<?php
include 'koneksi.php';

$NAMA_RUANGAN =$_POST['NAMA_RUANGAN'];
$MERK_AC      =$_POST['MERK_AC'];
$TIPE         =$_POST['TIPE'];
$KONDISI      =$_POST['KONDISI'];
$KETERANGAN   =$_POST['KETERANGAN'];

$timestamp = time();
$FOTO = $_FILES['FOTO']['name'];
$nama_foto = $timestamp . "_" . $FOTO;

// Menentukan lokasi penyimpanan file foto
$upload_directory = 'pln/FOTO/';

// Pindahkan file foto yang diunggah ke direktori tujuan
move_uploaded_file($_FILES['FOTO']['tmp_name'], $upload_directory . $nama_foto);
$query = "INSERT INTO masuk_data SET NAMA_RUANGAN='$NAMA_RUANGAN', MERK_AC='$MERK_AC', TIPE='$TIPE', KONDISI='$KONDISI', KETERANGAN='$KETERANGAN', FOTO='$nama_foto'";
mysqli_query($koneksi, $query);


header("location:index.php");
?>