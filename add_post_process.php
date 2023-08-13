<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    } else {
        $id_author = $_SESSION['id'];
    }
    include "koneksi.php"; global $conn;

    $query_author = mysqli_query($conn, "SELECT * FROM daftar_user WHERE id = '$id_author'");
    $result_author = mysqli_fetch_assoc($query_author);
    $authorPost = $result_author['username'];

    $titlePost = str_replace(" ", "-", strtolower(htmlspecialchars($_POST['titlePost'])));
    $editorPost = $_POST['editorPost'];
    $categoryPost = $_POST['selectCatePost'];

    if(isset($categoryPost)) {
        $categoryPost = "Random";
    }

    // properti gambar header
    if(!file_exists($_FILES['featureImage']['tmp_name']) || !is_uploaded_file($_FILES['featureImage']['tmp_name'])) {
        $gambarDefaultPost = "feature_image_default.jpg";
        
        $query = "insert into daftar_artikel values (NULL, '$titlePost', '$authorPost', '$editorPost', '$categoryPost', '$gambarDefaultPost', NOW())";
    } else {
        $featureImage_name = $_FILES['featureImage']['name'];
        $featureImage_size = $_FILES['featureImage']['size'];
        $featureImage_tmp = $_FILES['featureImage']['tmp_name'];
        
        $extension_accepted = array('png', 'jpg', 'jpeg', 'gif');
        $extension_raw = explode('.', $featureImage_name);
        $extension_photo = strtolower(end($extension_raw));
        
        $featureName_new = uniqid();
        $featureName_new .= ".";
        $featureName_new .= $extension_photo;
        $target_featureimg = "assets/library_image/" . $featureName_new;
    
        if(in_array($extension_photo, $extension_accepted) === true) {
            if($featureImage_size > 5000000) {
                header("location:post_new.php");
                echo "<script>alert('Ukuran foto terlalu besar!')</script>";
                return false;
            } else {
                move_uploaded_file($featureImage_tmp, $target_featureimg);
                $query = "INSERT into daftar_artikel values (NULL, '$titlePost', '$authorPost', '$editorPost', '$categoryPost', '$featureName_new', NOW());";

                $query .= "INSERT into daftar_gambar values (NULL, '$featureName_new', '$authorPost', NOW());";
            }
        } else {
            header("location:post_new.php");
            echo "<script>alert('Ekstensi file yang diupload tidak diperbolehkan!');</script>";
            return false;
        }
    }

    $hasil = mysqli_multi_query($conn, $query);

    if($hasil) {
        header("location:post_all.php");
    }

?>