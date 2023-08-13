<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    }
    include "koneksi.php"; global $conn;
    $id_author = $_SESSION['id'];

    $id = $_POST['id'];
    $query = "delete from daftar_kategori where id = $id";
    $hasil = mysqli_query($conn, $query);

    if($hasil) {
        header("location:post_categories.php");
    }

?>