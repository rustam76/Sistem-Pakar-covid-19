<?php
include('koneksi.php');
include('header.php');
?>

<div class="container">
    <div class="card text-center bg-success mb-3">
        <div class="card-body">
            <h3 class="text-light">Silahkan Masukkan Keluhan Anda <?php echo $_SESSION['username']; ?></h3>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="proses.php" method="post">
                <div style="overflow: scroll; height: 467px;">
                    <?php
                    $qry = "select * from tb_gejala";
                    $data = mysqli_query($koneksi, $qry);
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" value="<?= $d['kd_gejala']; ?>" name="<?= $d['id'] ?>" aria-label="Checkbox for following text input">
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with checkbox" value="<?= $d['gejala']; ?>">
                        </div>
                    <?php } ?>
                </div>
                <br>
                <input type="submit" class="form-control btn btn-warning" name="submit" value="Diagnosa">

            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>