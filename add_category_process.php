<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    }
    include "koneksi.php"; global $conn;
    $id_author = $_SESSION['id'];


    $name_cat = strtolower($_POST['nameCategory']);
    $description_cat = strtolower($_POST['descCategory']);
    $parent_cat = $_POST['parentCategory'];
    $query = "insert into daftar_kategori values (NULL, '$name_cat', '$description_cat', '$parent_cat')";

    $hasil = mysqli_query($conn, $query);

    if($hasil) {
        header("location:post_categories.php");
    }

?>