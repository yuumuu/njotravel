<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("location:login.php");
} else {
    $id_login = $_SESSION['id'];
}

include "koneksi.php"; global $conn;

if(isset($_POST['submitSettings'])) {
    $companyLogo_name = $_FILES['companyLogo']['name'];
    $companyLogo_tmp = $_FILES['companyLogo']['tmp_name'];
    $companyLogo_size = $_FILES['companyLogo']['size'];

    $target_files = "./assets/image/" . $companyLogo_name;

    $companyName = strtoupper($_POST['companyName']);
    $companyDesc = $_POST['companyDesc'];
    $telephonePT = $_POST['telephonePT'];

    $twitter = $_POST['twitter'];
    $explode_tw = explode("/", $twitter);
    $twitter_name = strtolower(end($explode_tw));
    
    $facebook = $_POST['facebook'];
    $explode_fc = explode("/", $facebook);
    $facebook_name = strtolower(end($explode_fc));

    $instagram = $_POST['instagram'];
    $explode_ig = explode("/", $instagram);
    $insta_name = strtolower(end($explode_ig));

    $youtube = $_POST['youtube'];
    $explode_yt = explode("/", $youtube);
    $youtube_name = strtolower(end($explode_yt));

    if($_FILES['companyLogo']) {
        if($companyLogo_size < 5000000) {
            move_uploaded_file($companyLogo_tmp, $target_files);

            $query = "INSERT INTO settings VALUES (NULL, '$companyLogo_name', '$companyName', '$companyDesc', '$insta_name', '$instagram', '$telephonePT', '', '$facebook_name', '$facebook', '$youtube_name', '$youtube', NOW());";
        } else {
            echo "<script type='text/javascript'>alert('Ukuran gambar terlalu Besar!');</script>";
            header("location:settings.php");
            return false;
        }
    } else {
        header("location:settings.php");
        return false;
    }

    $hasil = mysqli_query($conn, $query);

    if($hasil) {
        header("location:settings.php");
    }
}

?>