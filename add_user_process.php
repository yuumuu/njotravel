<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    }
    include "koneksi.php"; global $conn;
    $id_author = $_SESSION['id'];

    $firstName = strtolower(htmlspecialchars($_POST['firstName']));
    $lastName = strtolower(htmlspecialchars($_POST['lastName']));
    $username = strtolower(htmlspecialchars(stripslashes($_POST['username'])));
    $email = htmlspecialchars($_POST['email']);
    $passwordRaw = mysqli_real_escape_string($conn, $_POST['password']);
    $role = $_POST['role'];

    if($role == "") {
        header("Location:user_new.php");
        return false;
    } else {
        $role .= "";
    }

    // cek username udah ada belum
    $cekUsername = mysqli_query($conn, "SELECT username FROM daftar_user WHERE username = '$username'");

    if(mysqli_fetch_assoc($cekUsername)) {
        header("location:user_new.php");
        return false;
    }

    $password = password_hash($passwordRaw, PASSWORD_DEFAULT);

    // properti gambar
    $nama_gambar = $_FILES['photoProfile']['name'];
    $ukuran_gambar = $_FILES['photoProfile']['size'];
    $file_gambar = $_FILES['photoProfile']['tmp_name'];
    $target_dir = "assets/library_image/";
    $target_file = $target_dir . $nama_gambar;

    $ekstensi_diperbolehkan = array('jpg','jpeg','png','gif');
    $ekstensiRaw = explode(".", $nama_gambar);
    $ekstensi_gambar = strtolower(end($ekstensiRaw));

    $gambar = addslashes(file_get_contents($_FILES['photoProfile']['tmp_name']));

    if(in_array($ekstensi_gambar, $ekstensi_diperbolehkan) === true) {
        if($ukuran_gambar > 2000000) {
            echo 
            "<script>
            document.location.href = 'user_new.php';
            alert('Ukuran foto terlalu besar!');
            </script>";
            return false;
        } else {
            move_uploaded_file($file_gambar, $target_dir . $nama_gambar);
            $query = "insert into daftar_user values(NULL, '$firstName', '$lastName', '$username', '$email', '$password', '$nama_gambar', '$role' ,'$passwordRaw');";
            
            $query .= "insert into daftar_gambar values (NULL, '$nama_gambar', '$username', NOW())";
        }
    } else {
        echo "<script>
            alert('ekstensi file yang diupload tidak diperbolehkan');
        </script>";
        header("Location:user_new.php");
        return false;
    }


    $hasil = mysqli_multi_query($conn, $query);

    if($hasil) {
        header("Location:user_all.php");
    }

?>