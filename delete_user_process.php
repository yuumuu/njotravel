<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    }
    include "koneksi.php"; global $conn;
    $id_author = $_SESSION['id'];

    $id = $_POST['id'];
    $queryItem = mysqli_query($conn, "SELECT * FROM daftar_user WHERE id = $id");
    $hasilItem = mysqli_fetch_assoc($queryItem);
    $fileName_1 = $hasilItem['photoProfileName'];

    $path_1 = "./assets/library_image/$fileName_1";
    if(file_exists($path_1)) {
        unlink($path_1);
    }
    
    $query = "delete from daftar_user where id = $id;";
    $query .= "delete from daftar_gambar where fileName = '$fileName_1';";

    $hasil = mysqli_multi_query($conn, $query);

    if($hasil) {
        header("location:user_all.php");
    }

?>