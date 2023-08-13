<?php
session_start();

if(!isset($_SESSION['login'])) {
    header('Location:login.php');
} else {
    $id_login = $_SESSION['id'];
}
include "koneksi.php"; global $conn;

if(isset($_POST['submitPartners'])) {
    $nameSponsor = strtolower($_POST['sponsorName']);
    $URLSponsor = $_POST['sponsorURL'];
    $photoSponsor_name = $_FILES['sponsorFile']['name'];
    $photoSponsor_tmp = $_FILES['sponsorFile']['tmp_name'];
    $photoSponsor_size = $_FILES['sponsorFile']['size'];

    $target_files = "./assets/sponsor/" . $photoSponsor_name;

    if(isset($_FILES['sponsorFile'])) {
        if($photoSponsor_size < 5000000) {
                move_uploaded_file($photoSponsor_tmp, $target_files);

                $query = "INSERT INTO sponsorship VALUES (NULL, '$nameSponsor', '$URLSponsor', '$photoSponsor_name')";
        } else {
            echo "<script type='javascript/text'>javascript:alert('Ukuran terlalu besar!');</script>";
            header("Location:settings.php");
            return false;
        }
    } else {
        echo "<script type='javascript/text'>javascript:alert('Harus memasukkan gambar.');</script>";
        header("Location:settings.php");
        return false;
    }

    $hasil = mysqli_query($conn, $query);

    if($hasil) {
        header("Location:settings.php");
    }
}

?>