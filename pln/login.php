<?php
include 'koneksi.php';
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
 
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = ($_POST['password']);
 
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);
 
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - Sistem Informasi Data AC</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Righteous&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_PLN.png" alt="Logo UP3 Banjarmasin">
        </div>
        <div class="title">
            Sistem Informasi Data Ac
            <br>
            PLN UP3 Banjarmasin
        </div>
        <form action="" method="POST" class="login-email">
        <div class="input-group">
            <input type="text" name="email" id="email" placeholder="Email" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
        <div class="input-group">
            <button type="submit" name="submit" class="btn">Login</button>
        </div>
        </form>
    </div>
</body>
</html>
