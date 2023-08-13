<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("location:login.php");
} else {
    $id_login = $_SESSION['id'];
}

include "koneksi.php"; global $conn;

$query_login = mysqli_query($conn, "SELECT * FROM daftar_user WHERE id = $id_login");
$result_login = mysqli_fetch_assoc($query_login);
$author = $result_login['username'];

include "koneksi.php"; global $conn;

$question = $_POST['question'];
$answer = $_POST['answer'];

if(isset($_POST['submitSettings'])) {
    $query = "INSERT INTO set_qna VALUES (NULL, '$author', '$question', '$answer', NOW());";
}

$hasil = mysqli_query($conn, $query);

if($hasil) {
    header('location: edit_about_us.php');
}

?>