<?php
include('header.php');

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM t_user where id='$id' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<div class="container ">
    <div class="col-md-6 mx-auto mt-5">
        <div class="card shadow-sm">
            <h4 class="text-center mt-3">Form edit</h4>

            <form action="simpandata.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $result[0]['id'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Masukkan Username</label>
                        <input type="text" name="user" value="<?= $result[0]['username'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Masukkan Password</label>
                        <input type="password" name="pass" value="<?= $result[0]['password'] ?>" id="passwordfield" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Masukkan Alamat</label>
                        <textarea name="alamat" class="form-control"><?= $result[0]['alamat'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Masukkan No Hp</label>
                        <input type="number" name="no_hp" value="<?= $result[0]['no_hp'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Masukkan No Hp</label>
                        <input type="file" name="gambar" value="<?= $result[0]['gambar'] ?>" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-success form-control">
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>