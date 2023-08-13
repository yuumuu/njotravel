<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    }
    include "koneksi.php"; global $conn;
    $id_author = $_SESSION['id'];

    $query_author = mysqli_query($conn, "SELECT * FROM daftar_user WHERE id = '$id_author'");

    $result_author = mysqli_fetch_assoc($query_author);

    $uploader = $result_author['username'];

    $file_name = $_FILES['fileName']['name'];
    $file_tmp = $_FILES['fileName']['tmp_name'];
    $file_size = $_FILES['fileName']['size'];
    $target_file = "assets/library_image/" . $file_name;
    
    if(isset($_FILES['fileName'])) {
        $extension_accepted = array('png', 'jpg', 'jpeg', 'gif');
        $extension_raw = explode('.', $file_name);
        $extension_photo = strtolower(end($extension_raw));
        
        if(in_array($extension_photo, $extension_accepted) === true) {
            if($file_size > 5000000) {
                header("location:media_new.php");
                echo "<script>alert('Ukuran foto terlalu besar!')</script>";
                return false;
            } else {
                move_uploaded_file($file_tmp, $target_file);
                $query = "insert into daftar_gambar values (NULL, '$file_name', '$uploader', NOW())";
            }
        } else {
            header("location:media_new.php");
            echo "<script>alert('Ekstensi file yang diupload tidak diperbolehkan!');</script>";
            return false;
        }
    }
    
    $hasil = mysqli_query($conn, $query);

    if($hasil) {
        header("location:media_library.php");
    }
?>