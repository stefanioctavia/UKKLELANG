<?php
include "../conf/conn.php";

$username = mysqli_real_escape_string($koneksi, htmlentities($_POST['username']));
$password = mysqli_real_escape_string($koneksi, htmlentities($_POST['password']));

$query = "SELECT * FROM admin WHERE username = '$username' AND password = ('$password')";
$check = mysqli_query($koneksi, $query);

if (!$check) {
    die("Kesalahan pada query: " . mysqli_error($koneksi)); // Penanganan error yang lebih baik
}

if (mysqli_num_rows($check) >= 1) {
    session_start();
    $row = mysqli_fetch_array($check);

    $_SESSION['id_admin'] = $row['id_admin'];
    echo "<script>alert('Selamat Datang {$row['username']} Kamu Telah Login Ke Halaman Admin !!!');
    window.location.href='../index.php'</script>";
} else {
    echo '<script>alert("Masukkan Username dan Password dengan Benar !!!");
    window.location.href="login.php"</script>';
}
?>
