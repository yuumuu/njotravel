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
    $authorPost = $result_author['username'];

    $id = $_POST['id'];
    $titlePost = str_replace(" ", "-", strtolower(htmlspecialchars($_POST['titlePost'])));
    $editorPost = $_POST['editorPost'];
    $categoryPost = $_POST['selectCatePost'];
    
    if(isset($categoryPost) == "") {
        $categoryPost = "Random";
        return $categoryPost;
    }
    
    // properti gambar header
    if(!file_exists($_FILES['featureImage']['tmp_name']) || !is_uploaded_file($_FILES['featureImage']['tmp_name'])) {
        $query = "update daftar_artikel set titlePost = '$titlePost', authorPost = '$authorPost', editorPost = '$editorPost', categoryPost = '$categoryPost', datePost = NOW() where id = $id";
    } else {
        $featureImage_name = $_FILES['featureImage']['name'];
        $featureImage_size = $_FILES['featureImage']['size'];
        $featureImage_tmp = $_FILES['featureImage']['tmp_name'];
        $target_featureimg = "assets/library_image/" . $featureImage_name;

        $extension_accepted = array('png', 'jpg', 'jpeg', 'gif');
        $extension_raw = explode('.', $featureImage_name);
        $extension_photo = strtolower(end($extension_raw));
        
        $featureName_new = uniqid();
        $featureName_new .= ".";
        $featureName_new .= $extension_photo;
        $target_featureimg = "assets/library_image/" . $featureName_new;

        $query_last = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM daftar_artikel WHERE id = $id"));

        $gambar_ada = $query_last['featureImage'];

        if(file_exists("assets/library_image/" . $gambar_ada)) {
            unlink("assets/library_image/" . $gambar_ada);
        }

        if(in_array($extension_photo, $extension_accepted) === true) {
            if($featureImage_size > 5000000) {
                // header("location:edit_post.php?id=$id");
                echo 
                "<script>
                document.location.href = 'edit_post.php?id=$id';
                alert('Ukuran foto terlalu besar!');
                </script>";
                return false;
            } else {
                move_uploaded_file($featureImage_tmp, $target_featureimg);
                $query = "update daftar_artikel set titlePost = '$titlePost', authorPost = '$authorPost', editorPost = '$editorPost', categoryPost = '$categoryPost', featureImage = '$featureName_new', datePost = NOW() where id = $id;";

                $query .= "delete from daftar_gambar where fileName = '$gambar_ada';";

                $query .= "insert into daftar_gambar values (NULL, '$featureName_new', '$authorPost', NOW());";
            }
        } else {
            header("location:edit_post.php?id=$id");
            echo "<script>alert('Ekstensi file yang diupload tidak diperbolehkan!');</script>";
            return false;
        }
    }

    $hasil = mysqli_multi_query($conn, $query);

    if($hasil) {
        // header("location:edit_post.php?id=$id");
        echo 
        "<script>
            document.location.href='edit_post.php?id=$id';
            alert('Anda telah berhasil mengubah data');
        </script>";
    }

?>