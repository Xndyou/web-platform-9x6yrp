<?php

    include 'koneksi.php';
    $nomor = $_GET['no'];

    $query = "DELETE FROM masuk_data WHERE NO_DATA=$nomor";
    mysqli_query($koneksi, $query);

    header("location:index.php");
    
?>