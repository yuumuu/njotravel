<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    }
    include "koneksi.php"; global $conn;
    $id_author = $_SESSION['id'];

    $id = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM message WHERE id = $id");

    if($query) {
        header("location:edit_contact_us.php");
    }
?>