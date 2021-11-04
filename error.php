<?php include 'header.php';  ?>

<div class="container">
    <div style="text-align: center;">
        <div class="card bg-success mb-3">
            <div class="card-body">
                <h1 class="text-light">HASIL DIAGNOSA : <?php echo $_SESSION['username']; ?></h1><br>
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend form-control">
            <span class="input-group-text">
                <h5>PENYAKIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
            </span>

            <textarea class="form-control" style="color:red;" rows="1" readonly>Belum Diketahui</textarea>
        </div>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend form-control">
            <span class="input-group-text">
                <h5>INFO PENYAKIT&nbsp;&nbsp;&nbsp;</h5>
            </span>

            <textarea class="form-control" style="color:red;" rows="6" readonly>
    Tidak ditemukan info terkait gejala-gejala yang anda masukkan, Karena keterbatasan data kami.
  </textarea>
        </div>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend form-control">
            <span class="input-group-text">
                <h5>SOLUSI PENYAKIT</h5>
            </span>

            <textarea class="form-control" style="color:red;" rows="6" readonly>
    Harap lakukan pemerikasaan lebih lanjut melalui dokter..!!
  </textarea>
        </div>
    </div>
</div><br>
<?php include 'footer.php'; ?>