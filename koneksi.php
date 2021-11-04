<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'db_pakarcovid19');

if (!$koneksi) {
    echo "Error connecting";
}
