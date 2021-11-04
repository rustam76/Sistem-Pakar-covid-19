<?php
include 'header.php';

include('koneksi.php');
?>
<div class="container">
    <div style="text-align: center;">
        <div class="card bg-success mb-3">
            <div class="card-body">
                <h1 class="text-light">HASIL DIAGNOSA : <?php echo $_SESSION['username']; ?></h1>
                <script>
                    function myFunction() {
                        window.print();
                    }
                </script>
                <button style="float:right;" class="btn btn-outline-light" onclick="myFunction()">CETAK</button>

            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend form-control">
                <span class="input-group-text">
                    <h5>PENYAKIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                </span>

                <textarea class="form-control" rows="1" readonly><?php echo "$penyakit"; ?></textarea>
            </div>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend form-control">
                <span class="input-group-text">
                    <h5>INFO PENYAKIT&nbsp;&nbsp;&nbsp;</h5>
                </span>

                <textarea class="form-control" rows="8" readonly><?php echo "$info"; ?></textarea>
            </div>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend form-control">
                <span class="input-group-text">
                    <h5>SOLUSI PENYAKIT</h5>
                </span>

                <textarea class="form-control" rows="8" readonly><?php echo "$solusi"; ?> </textarea>
            </div>
        </div>

    </div>
    <br>