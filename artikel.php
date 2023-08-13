<?php 
    
    session_start();
    include "koneksi.php"; global $conn;
    if(isset($_SESSION['login'])) {
        $id = $_SESSION['id'];
    }
    $navbarVar = 3;

    $title = $_GET['titlePost'];
    $query_main = "SELECT * from daftar_artikel where titlePost = '$title'";
    $hasil_main = mysqli_query($conn, $query_main);
    $data_main = mysqli_fetch_assoc($hasil_main);

    if(strpos($data_main['titlePost'], "-")) {
        $titlePost_nospace = str_replace("-", " ", $data_main['titlePost']);
    } else {
        $titlePost_nospace = $data_main['titlePost'];
    }

    if($data_main['categoryPost'] == "") {
        $category_post_main = "<i>- nothing -</i>";
    } else {
        $category_post_main = $data_main['categoryPost'];
    }
?>
<?php include "head.php"; ?>
<style>
    nav {background: #1a1a1a;}
    .main {padding: 9rem 4rem 4rem 4rem;}
</style>
<title>NJOTRAVEL | <?= $titlePost_nospace ?></title>
<?php include "header.php"; ?>
<div class="row-center">
    <div class="main container w-100 row row-start">
        <div class="col-8 p-3 pe-lg-5">
            <div class="card border-0">
                <img src="./assets/library_image/<?= $data_main['featureImage'] ?>" class="card-img-top" alt="..." width="100%">
                <div class="card-body px-0">
                    <h5 class="display-5 fw-semibold text-break m-0">
                        <?= ucwords($titlePost_nospace) ?>
                    </h5>
                    <small class="text-body-secondary m-0"><b>author : </b><?= $data_main['authorPost']; ?></small>
                    <br>
                    <small class="text-body-secondary m-0"><b>category : </b><?= $category_post_main; ?></small>
                    <p class="card-text mt-1 lh-normal">
                        <?= $data_main['editorPost']; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4 p-3 pt-4 ps-lg-4 column-start">
            <!-- <div class="w-100 row-center position-relative shadow" style="height: 2.2rem;">
                <input type="text" placeholder="Tulis yang mau kamu cari disini.." 
                name="searchPost" id="searchPost" 
                class="form-control rounded-3 border-0 bg-light position-absolute">
                <img src="./assets/svg/search.svg" alt="" class="rounded-0 rounded-end-3 bg-warning position-absolute z-1 p-1 end-0" style="">
            </div> -->
            <div class="mt-4 w-100 bg-light border rounded-4 shadow p-3 px-4">
                <h3 class="text-center text-black mt-3 fw-bold">Artikel Terbaru</h3>
                <?php
                    include "koneksi.php"; global $conn;
                    $query_newest = "select * from daftar_artikel order by datePost ASC limit 4";
                    $hasil_newest = mysqli_query($conn, $query_newest);
                    while($list_newest = mysqli_fetch_assoc($hasil_newest)) {
                        
                        if(strpos($list_newest['titlePost'], "-")) {
                            $titlePost_new = str_replace("-", " ", $list_newest['titlePost']);
                        } else {
                            $titlePost_new = $list_newest['titlePost'];
                        }
                ?>
                <div class="card border-0 my-0">
                    <a href="artikel.php?titlePost=<?= $list_newest['titlePost'] ?>" class="nav-link">
                        <div class="card-body bg-light px-1">
                            <h5 class="card-title lh-1 fw-semibold"><?= ucwords($titlePost_new) ?></h5>
                            <?php
                                $post_newest = $list_newest['editorPost'];
                                $desc_new = "";

                                if(strlen($post_newest) < 55) {
                                    $desc_new .= $post_newest;
                                } else {
                                    $desc_new .= substr($post_newest, 0, 55) . "...";
                                }
                            ?>
                            <p class="card-text lh-sm m-0">
                                <?= $desc_new; ?>
                            </p>
                            <hr class="w-100 bg-black border-0 my-0" style="height: 1.5px; opacity: 1;">
                        </div>
                    </a>
                </div>
                <?php }; ?>
            </div>
            
            <div class="w-100 mt-4">
                <?php
                    $query_cat_related = "select * from daftar_artikel where categoryPost = '$category_post_main' limit 3";
        
                    $hasil_cat_related = mysqli_query($conn, $query_cat_related);
        
                    while($value_cat_related = mysqli_fetch_assoc($hasil_cat_related)) {
                        $desc_cat = "";
        
                        if(strlen($value_cat_related['editorPost']) < 40) {
                            $desc_cat .= $value_cat_related['editorPost'];
                        } else {
                            $desc_cat .= substr($value_cat_related['editorPost'], 0, 40) . "...";
                        }

                        if(strpos($value_cat_related['titlePost'], "-")) {
                            $titlePost_cat = str_replace("-", " ", $value_cat_related['titlePost']);
                        } else {
                            $titlePost_cat = $value_cat_related['titlePost'];
                        }
                ?>
                <div class="card my-3 border-0 rounded-5 shadow w-100">
                    <a href="artikel.php?titlePost=<?= $value_cat_related['titlePost']?>" class="nav-link">
                        <div class="row-center w-100">
                            <div class="rounded-4"
                            style="
                                background-image: url('./assets/library_image/<?= $value_cat_related['featureImage'] ?>');
                                background-position: center;
                                background-size: cover;
                                width: 140px!important;
                                height: 140px!important;
                            "></div>
                            <div class="card-body pe-2">
                                <h5 class="card-title fw-semibold lh-1 text-capitalize">
                                    <?= $titlePost_cat ?>
                                </h5>
                                <p class="card-text card-break lh-sm">
                                    <?$desc_cat?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php }; ?>
            </div>
            
            <div class="ads-blog" data-aos="fade-up" style="background: url('./assets/blog/ads-blog.jpg'); width: 360px;">
                <input type="checkbox" name="close-ads" id="close-ads">
                <div class="hr w-100">
                    <label for="close-ads">
                        <img src="./assets/svg/close.svg" draggable="false" id="close" title="close Ads">
                    </label>
                    <h2>Nyalakan Semangatmu</h2>
                    <a href="https://www.youtube.com/watch?v=UVW-x9EVYZQ&ab_channel=AgungHapsah" target="_blank" rel="noopener noreferrer">
                        Kunjungi Iklan
                    <img src="./assets/svg/ad.svg" draggable="false">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php include "footer.php"; ?>
<script>
    var prevScrollpos = window.pageYOffset;

    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        
        if (prevScrollpos > currentScrollPos) {
            document.querySelector("nav").style.top = "0";
        } else {
            document.querySelector("nav").style.top = "-120px";
        }
        
        if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
            document.querySelector("nav").style.backgroundColor = "#1a1a1a";
            document.querySelector("nav").style.transition = "all 1s ease";
        } else {
            document.querySelector("nav").style.transition = "all 1s ease";
        }
    prevScrollpos = currentScrollPos;
    };
</script>