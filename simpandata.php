<?php
include('koneksi.php');

$username = $_POST['user'];
$password = $_POST['pass'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

//$url = $_POST['gambar'];
$rand = rand();
$extensi = array('jpg', 'jpeg', 'png', 'gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
//fungsi cek extensi
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if (!in_array($ext, $extensi)) {
    echo "Maaf Format File tidak di terima";
} else {
    if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/' . $rand . '_' . $filename);

        $simpan = mysqli_query($koneksi, "INSERT INTO t_user set username='$username',password='$password',alamat='$alamat',no_hp='$no_hp',gambar='$xx'");

        if ($simpan) {
            header('location:login.php');
        } else {
            echo "Gagal menhapus";
        }
    } else {
        echo "Ukuran File Terlalu besar";
    }
}
