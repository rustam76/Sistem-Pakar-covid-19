<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $query = 'select id from tb_kode where ';
    array_pop($_POST);
    $input = array();
    foreach ($_POST as $row) {
        $query .= $row . "=1 and ";
        array_push($input, $row);
    }
    $query .= "1=1";
    $data = mysqli_query($koneksi, $query);
    $id = '';
    $rule = array(
        array("G001", "G002", "G003", "G004"),
        array("G005", "G006", "G007", "G008", "G009", "G010"),
        array("G011", "G012", "G013"),
        array("G001", "G002", "G014", "G015", "G016", "G017")
    );

    $status = false;
    for ($i = 0; $i < sizeof($rule); $i++) {
        $result = ($input == $rule[$i]);
        if ($result) {
            $status = true;
        }
    }
    //var_dump($status);

    if ($status == true) {
        while ($d = mysqli_fetch_array($data)) {
            $id = $d['id'];
        }
        $cari_penyakit = "select * from tb_penyakit where id=$id";
        $db = mysqli_query($koneksi, $cari_penyakit);
        while ($d = mysqli_fetch_array($db)) {
            $penyakit = $d['penyakit'];
            $info = $d['info'];
            $solusi = $d['solusi'];
            include 'pakar.php';
        }
    } else {
        include 'error.php';
    }
}
