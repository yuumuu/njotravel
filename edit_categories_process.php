<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    }
    include "koneksi.php"; global $conn;
    $id_author = $_SESSION['id'];

    $id_cat = $_POST['id'];
    $name_cat = strtolower($_POST['nameCategory']);
    $description_cat = strtolower($_POST['descCategory']);
    $parent_cat = $_POST['parentCategory'];
    // $query = "insert into daftar_kategori values (NULL, '$name_cat', '$description_cat', '$parent_cat')";

    $query = "UPDATE daftar_kategori SET name = '$name_cat', description = '$description_cat', parent = '$parent_cat' WHERE id = $id_cat";

    $hasil = mysqli_query($conn, $query);

    if($hasil) {
        header("location:post_categories.php");
    }

?>