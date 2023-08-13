<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    } else {
        $id_author = $_SESSION['id'];
    }

    include "koneksi.php"; global $conn;

    $id = $_POST['id'];
    $fileName = $_POST['fileName'];

    $path = "./assets/library_image/$fileName";
    if(file_exists($path)) {
        unlink($path);
    }
    
    $query = "delete from daftar_gambar where id = $id";

    $hasil = mysqli_query($conn, $query);

    if($hasil) {
        header("location:media_library.php");
    }

?>