<?php
    session_start();
    if(isset($_SESSION['login'])) {
        $id = $_SESSION['id'];
    }
    include "koneksi.php"; global $conn;
    $navbarVar = 3;

    $query_new = "select * from daftar_artikel order by datePost ASC limit 1";
    $hasil_new = mysqli_query($conn, $query_new);
    $post_new = mysqli_fetch_assoc($hasil_new);
    
    $query_blog = mysqli_query($conn, "SELECT * FROM set_blog ORDER BY dateSet DESC LIMIT 1");
    $result_blog = mysqli_fetch_assoc($query_blog);

?>
<?php include "head.php"; ?>
<title>NJOTRAVEL - Blog</title>
<?php $gambar_feature = $result_blog['featureImg']; $titlePage_feature = ucwords(strtolower($result_blog['title'])); ?>
<?php include "header.php"; include "feature.php"; ?>

<div class="w-100 container p-5 column-center bg-white">
    <h1 class="w-100 mt-5 mb-3 text-center fw-semibold text-capitalize text-dark text-opacity-75">
        adventure
    </h1>
    <hr class="rounded-5 my-5 mx-0 bg-black" style="height: 2px; width: 95%; opacity: 1;">
    <div class="row-center align-items-start row w-100 px-4">
        <div class="col-7 card border-0"><a class="nav-link" href="artikel.php?titlePost=<?= $post_new['titlePost'] ?>">
            <img src="./assets/library_image/<?= $post_new['featureImage'] ?>" class="card-img-top" alt="..." width="100%">
            <div class="card-body px-0">
                <h5 class="display-5 fw-semibold text-break"><?= $post_new['titlePost'] ?></h5>
                        <?php 
                            $num_char = 300;

                            $artikel = $post_new['editorPost'];
                        ?>
                <p class="card-text">
                    <?= substr($artikel, 0, $num_char) . "..."; ?>
                </p>
                <a href="artikel.php?titlePost=<?= $post_new['titlePost'] ?>" class="text-body-secondary nav-link fst-italic text-dark">
                    Read More
                </a>
            </div>
        </a></div>
        <div class="col-5">
            <?php
                $query_cat_related = "select * from daftar_artikel order by id limit 3";

                $hasil_cat_related = mysqli_query($conn, $query_cat_related);

                while($value_cat_related = mysqli_fetch_assoc($hasil_cat_related)) {
                    $desc_cat = "";
                    $desc_cat_title = "";

                    if(strlen($value_cat_related['titlePost']) < 10) {
                        $desc_cat_title .= $value_cat_related['titlePost'];
                    } else {
                        $desc_cat_title .= substr($value_cat_related['titlePost'], 0, 10) . "...";
                    }
                    
                    if(strlen($value_cat_related['editorPost']) < 40) {
                        $desc_cat .= $value_cat_related['editorPost'];
                    } else {
                        $desc_cat .= substr($value_cat_related['editorPost'], 0, 40) . "...";
                    }
            ?>
            <div class="card mb-3 border-0 overflow-hidden"  style="height: 200px;">
                <div class="row-center g-0">
                    <div class="col-md-5 overflow-hidden rounded-3"
                    style="
                    background-image: url('./assets/library_image/<?= $value_cat_related['featureImage'] ?>');
                    background-position: center;
                    background-size: cover;
                    height: 200px;
                    ">
                    </div><a href="artikel.php?titlePost=<?= $value_cat_related['titlePost'] ?>" class="nav-link">
                    <div class="col-md-6">
                        <div class="card-body pe-0">
                            <h5 class="card-title h3 fw-semibold text-body-secondary">
                                <?= $desc_cat_title; ?>
                            </h5>
                            <?php 
                                $num_char = 90;
                                $artikel_ref = $value_cat_related['editorPost'];
                            ?>
                            <p class="card-text mb-2">
                                <?= substr($artikel_ref, 0, $num_char) . "..."; ?>
                            </p>
                            <a href="artikel.php?titlePost=<?= $value_cat_related['titlePost'] ?>" class="card-text nav-link fst-italic text-dark">
                                <small class="text-body-secondary">Read More</small>
                            </a>
                        </div>
                    </a></div>
                </div>
            </div>
            <?php }; ?>
        </div>
    </div>
    <hr class="rounded-5 my-5 mx-0 bg-black" style="height: 2px; width: 95%; opacity: 1;">
    <!-- <div class="row-center row w-100 px-3">
        <div class="col-4 row-center bg-dark position-relative">
            <input type="text" name="searchPost" id="searchPost" placeholder="Tulis yang mau kamu cari disini.." class="form-control rounded-0 border-0 bg-light position-absolute">
            <img src="./assets/svg/search.svg" alt="" class="bg-warning position-absolute z-1 p-1 end-0">
        </div>
        <div class="col-8 row justify-content-center text-center h5">
            <a href="" class="col-3 nav-link fw-normal text-capitalize">pantai</a>
            <a href="" class="col-3 nav-link fw-normal text-capitalize">gunung</a>
            <a href="" class="col-3 nav-link fw-normal text-capitalize">hutan</a>
            <a href="" class="col-3 nav-link fw-normal text-capitalize">museum</a>
        </div>
    </div> -->
    <div class="w-100 justify-content-start row pt-5">
        <?php
            $artikel_kategori = "select * from daftar_artikel where id limit 24";

            $list_artikel = mysqli_query($conn, $artikel_kategori);

            while($list_atas = mysqli_fetch_assoc($list_artikel)) {

        ?>
        <div class="col-3 card border-0 bg-white mb-3 rounded-0" style="max-height: 28rem;">
            <img src="./assets/library_image/<?= $list_atas['featureImage'] ?>" class="card-img-top" alt="..." width="100%">
            <div class="card-body px-0">
                <h5 class="h3 fw-semibold text-break">Card title</h5>
                        <?php 
                            $num_char = 80;

                            $desc_post = $list_atas['editorPost'];
                        ?>
                <p class="card-text">
                    <?= substr($desc_post, 0, $num_char) . "..."; ?>
                </p>
                <a href="artikel.php?titlePost=<?= $post_new['titlePost'] ?>" class="text-body-secondary nav-link fst-italic text-dark">Read More</a>
            </div>
        </div>
        <?php }; ?>
    </div>
    <div class="banner w-100 mx-5 text-center text-white column-center bg-dark p-5 rounded-4"
    style="
    background-image: url('./assets/library_image/<?= $result_blog['bannerImg'] ?>');
    background-size: cover;
    background-position: center;">
        <h3 class="m-0">testestes</h3>
        Ingin tahu lebih banyak lagi?
        <a href="contact_us.php" class="btn btn-warning px-4 border-0 rounded-5 mt-3">Selengkapnya</a>
    </div>
</div>

<?php include "footer.php"; ?>