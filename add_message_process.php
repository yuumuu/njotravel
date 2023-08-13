<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    }
    include "koneksi.php"; global $conn;
    $id_author = $_SESSION['id'];

    $name = strtolower(htmlspecialchars(stripslashes($_POST['name'])));
    $email = htmlspecialchars($_POST['email']);
    $message = $_POST['message'];

    $query = mysqli_query($conn, "INSERT INTO message VALUES (NULL, '$name', '$email', '$message', NOW());");

    if($query) {
        header("location:contact_us.php");
    }
?>