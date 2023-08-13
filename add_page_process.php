<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    } else {
        $id_login = $_SESSION['id'];
    }
    include "koneksi.php"; global $conn;

    $query_author = mysqli_query($conn, "SELECT * FROM daftar_user where id = $id_login");
    $result_author = mysqli_fetch_assoc($query_author);
    $authorPage = $result_author['username'];

    $titlePage = $_POST['titlePage'];
    $editorPage = $_POST['editorPage'];
    $featureImage_name = $_FILES['featureImage']['name'];
    $featureImage_tmp = $_FILES['featureImage']['tmp_name'];
    $featureImage_type = $_FILES['featureImage']['type'];
    $featureImage_size = $_FILES['featureImage']['size'];
    
    $bannerDesc = $_POST['bannerDesc'];
    $bannerImage_name = $_FILES['bannerImage']['name'];
    $bannerImage_tmp = $_FILES['bannerImage']['tmp_name'];
    $bannerImage_type = $_FILES['bannerImage']['type'];
    $bannerImage_size = $_FILES['bannerImage']['size'];

    $queryNav = mysqli_query($conn, "SELECT * FROM daftar_halaman ORDER BY id DESC LIMIT 1");
    $resultNav = mysqli_fetch_assoc($queryNav);
    $dataNav = $resultNav['navbarId'];

    $navbarId = $dataNav + 1;
    
    $target_featureimg = "assets/library_image/";
    
    $titlePage_nospace = "";
    if(strpos($titlePage, " ")) {
        $tes = str_replace(" ", "_", $titlePage);
        $titlePage_nospace .= $tes;
    } else {
        $titlePage_nospace .= $titlePage;
    }
    
    if(isset($featureImage_tmp) && $featureImage_size < 5000000) {
        if(!file_exists($bannerImage_tmp) || !is_uploaded_file($bannerImage_tmp)) {
            
            move_uploaded_file($featureImage_tmp, $target_featureimg . $featureImage_name);
            
            $query = 'INSERT INTO daftar_halaman VALUES (NULL, "' . $titlePage_nospace . '",  "' . $authorPage . '", "' . $editorPage . '", "' . $featureImage_name . '", "", "", NOW(), ' . $navbarId .');';
            
            $query .= 'INSERT INTO daftar_gambar VALUES (NULL, "' . $featureImage_name . '", "' . $authorPage . '", NOW());';
            
        } else {
    
            $extension_accepted = array('png', 'jpg', 'jpeg', 'gif');
            $extension_raw = explode('.', $bannerImage_name);
            $extension_photo = strtolower(end($extension_raw));
            
            if(in_array($extension_photo, $extension_accepted)) {
                if($bannerImage_size < 5000000) {

                    move_uploaded_file($bannerImage_tmp, $target_featureimg . $bannerImage_name);
                    move_uploaded_file($featureImage_tmp, $target_featureimg . $featureImage_name);

                    $query = 'INSERT INTO daftar_halaman VALUES (NULL, "' . $titlePage_nospace . '",  "' . $authorPage . '", "' . $editorPage . '", "' . $featureImage_name . '", "' . $bannerImage_name . '", "' . $bannerDesc . '", NOW(), ' . $navbarId .');';

                    $query .= 'INSERT INTO daftar_gambar VALUES (NULL, "' . $bannerImage_name . '", "' . $authorPage . '", NOW());';
                    $query .= 'INSERT INTO daftar_gambar VALUES (NULL, "' . $featureImage_name . '", "' . $authorPage . '", NOW());';


                } else {
                    echo '<script>alert("Ukuran gambar terlalu besar!")</script>';
                    header("location:page_new.php");
                    return false;
                }
            } else {
                echo '<script>alert("Ekstensi Gambar tidak sesuai!")</script>';
                header("location:page_new.php");
                return false;
            }
        }
    } elseif($featureImage_size > 5000000) {
        echo '<script>alert("Ukuran gambar terlalu besar!")</script>';
        header("location:page_new.php");
        return false;
    } else {
        echo '<script>alert("Harap masukkan gambar utama!")</script>';
        header("location:page_new.php");
        return false;
    }

    $hasil = mysqli_multi_query($conn, $query);

    $var = '$titlePages = "' . $titlePage . '"; 
    $editorPages = "' . $editorPage . '"; 
    $gambar_feature = "'. $featureImage_name . '"; 
    $titlePage_feature = "About ' . $titlePage . '"; 
    $navbarVar = ' . $navbarId . '; 
    $bannerImages_name = "' . $bannerImage_name . '"; 
    $bannerDescs = "' . $bannerDesc . '";';

    $file = fopen("$titlePage_nospace.php", "w");

    $template = file_get_contents("template_page.php");
    fwrite($file, "<?php ");
    fwrite($file, $var);
    fwrite($file, " ?>");
    fwrite($file, $template);

    fclose($file);

    if($hasil) {
        header("location:page_all.php");
    }
    
?>