<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: dashboard.php");
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
    <title>SIDIA - Sistem Informasi Data Inventaris Ac PLN</title>
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
                    <a class="nav-link active text-black" aria-current="page" href="dashboard.php">Dashboard</a>
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
    <div class="card border-dark mb-3" style="max-width: 1000rem;">
      <div class="card-header">Selamat datang di SIDIA - Sistem Informasi Data Inventaris Ac PLN</div>
      <div class="card-body">
        <h8 class="card-text">Selamat datang <?php echo $_SESSION['username']; ?></h8>
      </div>
    </div>
    <div class="sticky-bottom">
        <footer class="text-center bg-body-tertiary text-black">
            <strong>Copyright &copy; 2023 <a href="login.php">SIDIA-PLN</a>.</strong> All rights reserved.
        </footer>
    </div>
</body>

</html>