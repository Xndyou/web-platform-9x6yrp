<?php
include 'koneksi.php';

$nomor          =$_POST['no'];
$NAMA_RUANGAN   =$_POST['NAMA_RUANGAN'];
$MERK_AC        =$_POST['MERK_AC'];
$TIPE           =$_POST['TIPE'];
$KONDISI        =$_POST['KONDISI'];
$KETERANGAN     =$_POST['KETERANGAN'];

$query="UPDATE masuk_data SET NAMA_RUANGAN='$NAMA_RUANGAN', MERK_AC='$MERK_AC', TIPE='$TIPE', KONDISI='$KONDISI', KETERANGAN='$KETERANGAN' WHERE NO_DATA='$nomor'";
mysqli_query($koneksi, $query);

header("location:index.php");
?>