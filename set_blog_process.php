<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
    } else {
        $id_login = $_SESSION['id'];
    }

    include 'koneksi.php'; global $conn;
    
    $query_author = mysqli_query($conn, "SELECT * FROM daftar_user WHERE id = '$id_login'");
    $result_author = mysqli_fetch_assoc($query_author);
    $author = $result_author['username'];

    $title = $_POST['titleFeatureBlog'];

    $featureImage_name = $_FILES['featureImage']['name'];
    $featureImage_tmp = $_FILES['featureImage']['tmp_name'];
    $featureImage_size = $_FILES['featureImage']['size'];

    $bannerImage_name = $_FILES['bannerImage']['name'];
    $bannerImage_tmp = $_FILES['bannerImage']['tmp_name'];
    $bannerImage_size = $_FILES['bannerImage']['size'];

    $extension_accepted = array('png', 'jpg', 'jpeg', 'gif');

    $extension_raw_feature = explode('.', $featureImage_name);
    $extension_photo_feature = strtolower(end($extension_raw_feature));

    $featureName_new = uniqid();
    $featureName_new .= ".";
    $featureName_new .= $extension_photo_feature;
    
    $extension_raw_banner = explode('.', $bannerImage_name);
    $extension_photo_banner = strtolower(end($extension_raw_banner));

    $bannerName_new = uniqid();
    $bannerName_new .= ".";
    $bannerName_new .= $extension_photo_banner;

    $target_files = "assets/library_image/";

    if(isset($_FILES['featureImage']) && isset($_FILES['bannerImage'])) {
        if($featureImage_size < 5000000 && $bannerImage_size < 5000000) {
                move_uploaded_file($featureImage_tmp, $target_files . $featureName_new);
                move_uploaded_file($bannerImage_tmp, $target_files . $bannerName_new);

                $query = "INSERT INTO set_blog VALUES (NULL, '$title', '$featureName_new', '$bannerName_new', NOW());";

                $query .= "INSERT INTO daftar_gambar values (NULL, '$featureName_new', '$author', NOW());";

                $query .= "INSERT INTO daftar_gambar values (NULL, '$bannerName_new', '$author', NOW());";
        } else {
            echo "<script type='text/javascript'>javascript:alert('Ukuran terlalu besar!');</script>";
            header("Location:edit_blog.php");
            return false;
        }
    } else {
        echo "<script type='text/javascript'>javascript:alert('Harus memasukkan gambar.');</script>";
        header("Location:edit_blog.php");
        return false;
    }

    $hasil = mysqli_multi_query($conn, $query);

    if($hasil) {
        header("Location:edit_blog.php");
    }

?>