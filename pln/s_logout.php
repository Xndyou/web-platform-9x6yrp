<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit(); // Terminate script execution after the redirect
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
    <title>Panel Logout</title>
</head>
<body>
    <div class="container-logout">
        <form action="logout.php" method="POST" class="login-email">
            <h3>Selamat Tinggal, <?php echo $_SESSION['username']; ?>!</h3>
            <div class="input-group">
                <button type="submit" class="btn btn-outline-primary">Logout</button>
            </div>
            <center><a href="dashboard.php" class="btn btn-outline-danger" role="button">KEMBALI</a></center>
        </form>
    </div>
</body>
</html>