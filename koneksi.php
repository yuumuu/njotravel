<?php

    $server = 'localhost';
    $user = 'root';
    $pass = 'alhazen93';
    $database = 'ujian_ramadhan';

    $conn = mysqli_connect($server, $user, $pass, $database);

    if(mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
        exit();
    }

?>