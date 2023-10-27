<?php
require 'koneksi.php';
?>
<html>
<head>
  <title>Data AC</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>
<body>
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
    <td><img src='pln/FOTO/".$row['FOTO']."' id='gambar' style='width: 200px; height: 100px; display: none; margin: 10px;'> <button id='tombol-view' class='btn btn-primary'>View</button</td>
    </tr>";
    
    $no++;
}
?>
        </tbody>
      </table>
    </div>
</div>
    <script>
$(document).ready(function(){
    $('#mauexport').DataTable({
        dom: 'Bfrtip',
        buttons:[
           'copy', 'csv', 'excel', 'pdf', 'print' ]
    })
}); 
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
</body>
</html>