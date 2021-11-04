<?php
session_start();
include('koneksi.php');

if (!$_SESSION) {

    $username = $_POST['username'];
    $password = $_POST['pass'];

    $query = mysqli_query($koneksi, "SELECT * FROM t_user where username='$username' and password='$password'");
    $user = mysqli_fetch_all($query, MYSQLI_ASSOC);



    if ($user) {
        $_SESSION['id'] = $user[0]['id'];
        $_SESSION['username'] = $user[0]['username'];
        $_SESSION['alamat'] = $user[0]['alamat'];
        $_SESSION['no_hp'] = $user[0]['no_hp'];
        $_SESSION['gambar'] = $user[0]['gambar'];
        echo "<script>
                alert('berhasil Login');
                window.location.href='home.php';
                </script>";
    } else {
        echo "<script>
                alert('Gagal Login');
                window.location.href='login.php';
                </script>";
    }
} else {
    echo "gg";
}
