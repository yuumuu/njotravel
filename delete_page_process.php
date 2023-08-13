<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    }
    include "koneksi.php"; global $conn;
    $id_author = $_SESSION['id'];

    $id = $_POST['id'];
    $queryItem = mysqli_query($conn, "SELECT * FROM daftar_halaman WHERE id = $id");
    $hasilItem = mysqli_fetch_assoc($queryItem);
    $fileName_1 = $hasilItem['featureImage'];
    $fileName_2 = $hasilItem['bannerImage'];

    $path_1 = "./assets/library_image/$fileName_1";
    $path_2 = "./assets/library_image/$fileName_2";
    if(file_exists($path_1) || file_exists($path_2)) {
        unlink($path_1);
        unlink($path_2);
    }
    
    if(file_exists($hasilItem['titlePage'].".php")) {
        unlink($hasilItem['titlePage'].".php");
    }

    $query = "delete from daftar_halaman where id = $id;";
    $query .= "delete from daftar_gambar where fileName = '$fileName_1';";
    $query .= "delete from daftar_gambar where fileName = '$fileName_2';";

    $hasil = mysqli_multi_query($conn, $query);

    if($hasil) {
        header("location:page_all.php");
    }

?>