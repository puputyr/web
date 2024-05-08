<?php
include 'koneksi.php';

if (isset($_POST['sign_in'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_user = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");
    if ($check_user) {
        echo "<script>alert('Email tidak terdaftar')</script>";
    }
    if ($check_user != $password) {
        echo "<script>alert('Kamu lupa ya?')</script>";

    } else {
        echo "<script>alert('Selamat anda dapet ayang');window.location.href=' .php'</script>";
    }
}
?>
