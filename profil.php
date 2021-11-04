<?php

include('header.php');
include('koneksi.php');


$query = mysqli_query($koneksi, "SELECT * From t_user");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC)


?>
<div class="container">
    <div class="card text-center">
        <div class="card-body">
            <img src="img/<?= $_SESSION['gambar'] ?>" class="rounded-circle" width="100px" height="100">
            <h4 class="mt-3">Hi,<?= $_SESSION['username'] ?></h4>
        </div>
    </div>
    <div class="card mt-3 shadow bg-success">
        <div class="card-body">
            <h5 class="text-light"> Biodata </h5>
            <p class="text-light">Nama : <?= $_SESSION['username'] ?>
                <br>
                Alamat : <?= $_SESSION['alamat'] ?>
                <br>
                No Hp : <?= $_SESSION['no_hp'] ?>
            </p>
        </div>
    </div>

    <div class="form-group mt-3">
        <a href="edit.php?id=<?= $result[0]['id'] ?>" class="btn btn-warning">Edit Data</a>
    </div>
</div>

<?php include('footer.php'); ?>