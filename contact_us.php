<?php
    session_start();
    if(isset($_SESSION['login'])) {
        $id = $_SESSION['id'];
    }
    include "koneksi.php"; global $conn;
    $navbarVar = 4;

    $query_contact = mysqli_query($conn, "SELECT * FROM set_contact ORDER BY dateSet DESC LIMIT 1");
    $result_contact = mysqli_fetch_assoc($query_contact);

    $query = "select * from daftar_halaman";
    $titlePage_feature = ucwords(strtolower($result_contact['title']));
    $gambar_feature = $result_contact['featureImg'];
?>
<?php include "head.php"; ?>
<style>
    .form-control {
        background-color: #D9D9D9!important;
    }

    .link_contact {
        background: #D9D9D9!important;
    }
</style>
<title>NJOTRAVEL - Contact Us</title>
<?php include "header.php"; include "feature.php"; ?>
<div class="w-100 container p-5 bg-white column-center">
    <div class="form row-start row w-100 p-5">
        <div class="col-7 p-4 pe-5">
            <form action="add_message_process.php" method="post" class="column-start pe-4">
                <label for="name">Nama</label>
                <input class="form-control rounded-4 bg-dark bg-opacity-25" placeholder="Tulis nama kamu disini .." type="text" name="name" id="name" autocomplete="off">
                <label class="mt-3" for="email">Email</label>
                <input class="form-control rounded-4 bg-dark bg-opacity-25" placeholder="Tulis email kamu disini .." type="text" name="email" id="email" autocomplete="off">
                <label class="mt-3" for="message">Pesan</label>
                <textarea class="form-control rounded-4 bg-dark bg-opacity-25" placeholder="Tulis pesan kamu disini .." name="message" id="message" cols="30" rows="10"></textarea>
                <input type="submit" value="Kirim Pesan" name="submitMessage" class="btn btn-warning text-white fw-normal mt-4 rounded-1 px-4">
            </form>
        </div>
        <div class="col-5 p-4 pt-5">
            <h2 class="w-75 text-break fw-semibold">Saran dan Pesan kepada kami</h2>
            <p class="text-break fw-light mt-3">
                Tulis saran atau pesan kamu di kolom ini supaya kami dapat terus mengevaluasi dan mengembangkan pelayanan kami demi kepuasan pelangggan.
            </p>
            <?php
                $query_link = mysqli_query($conn, "select * from settings order by dateSet limit 1");
                $result_link = mysqli_fetch_assoc($query_link);
            ?>
            <div class="row-start w-75">
                <a href="<?= $result_link['youtube_url'] ?>" target="_blank" class="link_contact btn mx-2 p-2 btn-light text-dark">
                    <img src="./assets/svg/youtubev2.svg" width="24" alt="">
                </a>
                <a href="<?= $result_link['facebook_url'] ?>" target="_blank" class="link_contact btn mx-2 p-2 btn-light text-dark">
                    <img src="./assets/svg/facebookv2.svg" width="24" alt="">
                </a>
                <a href="<?= $result_link['instagram_url'] ?>" target="_blank" class="link_contact btn mx-2 p-2 btn-light text-dark">
                    <img src="./assets/svg/instagramv2.svg" width="24" alt="">
                </a>
            </div>
        </div>
        <hr class="w-100 bg-dark border-0 rounded-5 my-5 mx-4" style="height: 2px; opacity: 1;">
    </div>
    <div class="w-100 row px-5">
        <div class="col-7 column-start px-4 pe-5">
            <h2 class="">Kantor Cabang Kami</h2>
            <p class="text-break pe-5">
                Njoplesir membuka kantor cabang di berbagai wilayah Indonesia hingga ke negara-negara Asia Tenggara.
            </p>
        </div>
        <!-- <div class="col-5 row-center pb-3 align-items-end position-relative">
            <input type="text" name="searchPost" id="searchPost" placeholder="Tulis yang mau kamu cari disini.." class="form-control rounded-0 border-0 bg-light position-absolute">
            <img src="./assets/svg/search.svg" alt="" class="btn rounded-0 bg-warning position-absolute z-1 p-1 end-0">
        </div> -->
    </div>
    <div class="p-5 mb-4 w-100 maps" data-aos="fade-up">
        <div class="mapouter ps-4 rounded-5 overflow-hidden">
            <div class="gmap_canvas rounded-5 overflow-hidden">
                <iframe class="gmap_iframe" width="100%" 
                frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" 
                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=id&amp;q=<?= $result_contact['locCompany'] ?>&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                ></iframe>
            <a href="https://formatjson.org/">format json</a>
        </div>
            <style>
                .mapouter{position:relative;text-align:right;width:100%;height:500px;}
                .gmap_canvas {overflow:hidden;background:none!important;width:100%;height:500px;}
                .gmap_iframe {height:500px!important;}
            </style>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>