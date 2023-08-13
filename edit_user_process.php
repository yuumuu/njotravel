<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    } else {
        $id_author = $_SESSION['id'];
    }
    include "koneksi.php"; global $conn;
    $id_author = $_SESSION['id'];
    $query_author = mysqli_query($conn, "SELECT * FROM daftar_user WHERE id = '$id_author'");
    $result_author = mysqli_fetch_assoc($query_author);
    $authorPost = $result_author['username'];

    $id = $_POST['id'];
    $firstName = strtolower(htmlspecialchars($_POST['firstName']));
    $lastName = strtolower(htmlspecialchars($_POST['lastName']));
    $username = strtolower(htmlspecialchars(stripslashes($_POST['username'])));
    $email = htmlspecialchars($_POST['email']);
    $passwordRaw = mysqli_real_escape_string($conn, $_POST['password']);
    $role = $_POST['role'];

    $password = password_hash($passwordRaw, PASSWORD_DEFAULT);

    $query_last = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM daftar_user WHERE id = $id"));

    $gambar_ada = $query_last['photoProfileName'];

    // properti gambar
    if(!file_exists($_FILES['photoProfile']['tmp_name']) || !is_uploaded_file($_FILES['photoProfile']['tmp_name'])) {
        $query = "update daftar_user set 
        firstName = '$firstName', lastName = '$lastName',
        username = '$username', email = '$email',
        password = '$password', role = '$role', passwordRaw = '$passwordRaw' where id = $id";
    } else {
        $nama_gambar = $_FILES['photoProfile']['name'];
        $ukuran_gambar = $_FILES['photoProfile']['size'];
        $file_gambar = $_FILES['photoProfile']['tmp_name'];
        $target_dir = "assets/library_image/";
        
        $ekstensi_diperbolehkan = array('jpg','jpeg','png','gif');
        $ekstensi_raw = explode(".", $nama_gambar);
        $ekstensi_gambar = strtolower(end($ekstensi_raw));

        $photoProfile = uniqid();
        $photoProfile .= ".";
        $photoProfile .= $ekstensi_gambar;

        if(in_array($ekstensi_gambar, $ekstensi_diperbolehkan) === true) {
            if($ukuran_gambar > 2000000) {
                echo 
                "<script>
                document.location.href = 'edit_user.php?id=$id';
                alert('Ukuran foto terlalu besar!');
                </script>";
                return false;
            } else {
                move_uploaded_file($file_gambar, $target_dir . $photoProfile);
                $query = "update daftar_user set 
                firstName = '$firstName', lastName = '$lastName',
                username = '$username', email = '$email',
                password = '$password', photoProfileName = '$photoProfile',
                role = '$role', passwordRaw = '$passwordRaw' where id = $id;";

                if(file_exists("assets/library_image/" . $gambar_ada)) {
                    unlink("assets/library_image/" . $gambar_ada);
                }
            
                $query .= "delete from daftar_gambar where fileName = '$gambar_ada';";

                $query .= "insert into daftar_gambar values (NULL, '$photoProfile', '$authorPost', NOW());";
            }
        } else {
            echo "<script>
                alert('ekstensi file yang diupload tidak diperbolehkan');
            </script>";
            header("Location:edit_user.php?id=$id");
            return false;
        }
    }

    $hasil = mysqli_multi_query($conn, $query);

    if($hasil) {
        header("Location:edit_user.php?id=$id");
    }

?>