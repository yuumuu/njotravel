<?php
    session_start();
    if(isset($_SESSION['login'])) {
        $id = $_SESSION['id'];
    }
    include "koneksi.php"; global $conn;
    $navbarVar = 1;

    $query_home = mysqli_query($conn, "SELECT * FROM set_home ORDER BY dateSet DESC LIMIT 1");
    $result_home = mysqli_fetch_assoc($query_home);
?>
<?php include "head.php"; ?>
<title>NJOTRAVEL - Tour & Travelling Agent</title>
<?php include "header.php"; ?>

<div class="w-100 vh-100 bg-dark position-relative text-white d-flex justify-content-center align-items-start pt-5 overflow-hidden feature-img-home"
style="background-image: url('./assets/library_image/<?= $result_home['featureImg'] ?>');">
    <img src="./assets/home/homepage.png" alt="" width="650" class="amb-feature-img me-4 ms-5">
    <div class="me-5 mt-5 pt-5 text-break">
        <p class="fm-anton title-home text-uppercase" style="text-shadow: 0 0 15px rgba(0,0,0,0.4);">
            <?= $result_home['title'] ?>
        </p>
        <p class="text-start fs-6 text-white w-50">
            <?= $result_home['featureDesc'] ?>
        </p>

        <!-- Carousel Splide JS -->
        <div class="splide w-75 mt-5" aria-label="...">
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev d-none">
                    Prev
                </button>
                <button class="splide__arrow splide__arrow--next d-none">
                    Next
                </button>
            </div>

            <div class="splide__track px-2">
                <ul class="splide__list">
                    <li class="splide__slide overflow-hidden rounded-4" 
                    style="background-image: url('./assets/home/card-home-1.jpg');">
                        <div class="position-absolute start-0 bottom-0 p-3 px-4 fw-semibold text-white bg-opacity-50 w-100 text-center">
                            Danau Lele
                        </div>
                    </li>
                    <li class="splide__slide overflow-hidden rounded-4" 
                    style="background-image: url('./assets/home/card-home-2.jpg');">
                        <div class="position-absolute start-0 bottom-0 p-3 px-4 fw-semibold text-white bg-opacity-50 w-100 text-center">
                            Bukit Oreo
                        </div>
                    </li>
                    <li class="splide__slide overflow-hidden rounded-4" 
                    style="background-image: url('./assets/home/card-home-3.jpg');">
                        <div class="position-absolute start-0 bottom-0 p-3 px-4 fw-semibold text-white bg-opacity-50 w-100 text-center">
                            Sungai Aci
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Add the progress bar element -->
            <div class="my-carousel-progress">
                <div class="my-carousel-progress-bar mt-5"></div>
            </div>
        </div>
    </div>
</div><!-- section 1 home -->

<div class="sec-2-home w-100 bg-white d-flex justify-content-center align-items-center px-5">
    <div class="text-start w-50 ms-5">
        <h4 class=" text-uppercase text-dark-emphasis m-0">
            tempat tujuan favorit
        </h4>
        <p class="display-0 text-uppercase fm-anton text-dark m-0">
            alligarh
        </p>
        <hr class="line-yellow w-50 m-0 rounded-5 border-0">
        <p class="fw-normal text-break w-50 mt-4">
            Aligarh adalah sebuah kota di negara bagian Uttar Pradesh di India. Ini adalah markas administratif distrik Aligarh, dan terletak 342 kilometer barat laut ibu kota negara bagian Lucknow
        </p>
    </div>
    <img src="./assets/home/topic-1.jpg" alt="" width="430" class="rounded-4 me-5">
</div>

<div class="banner w-100 row-center text-white text-center bg-dark text-break"
style="background-image: url('./assets/library_image/<?= $result_home['bannerImg'] ?>');">
<div class="column-center py-5 bg-black bg-opacity-25"
style="width: 100%; height: 22rem;">
        <p class="display-4 fw-semibold text-capitalize m-0">
            enjoy your holiday together
        </p>
        <p class="m-0 w-75 mt-4">
            <?= $result_home['bannerDesc'] ?>
        </p>
        <a href="blog.php" class="shadow mt-4 btn btn-warning p-5 py-2 rounded-2 text-dark">
            See More
        </a>
    </div>
</div>

<div class="w-100 bg-secondary bg-opacity-25 py-5 column-center">
    <h4 class="text-center text-dark">
        The Most Popular Tours in Countries
    </h4>
    <div class="splide splide_2 w-75 mt-5 row-center" aria-label="...">
        <div class="splide__track p-4">
            <ul class="splide__list">
                <?php
                    $query_artikel = "SELECT * FROM daftar_artikel";
                    $hasil_artikel = mysqli_query($conn, $query_artikel);
                    while ($data_artikel = mysqli_fetch_assoc($hasil_artikel)) {
                ?>
                <li class="splide__slide card-info rounded-4 bg-white shadow text-dark column-start">
                    <img src="./assets/library_image/<?= $data_artikel['featureImage'] ?>" alt="" class="w-100">
                    <div class="w-100 p-3 text-center column-center">
                        <h4 class="mt-3 fw-semibold text-uppercase"><?= $data_artikel['titlePost'] ?></h4>
                            <?php
                                $show_card_desc = substr($data_artikel['editorPost'], 0, 120) . "...";
                            ?>
                        <p class="m-0">
                            <?= $show_card_desc; ?>
                        </p>
                        <a href="artikel.php?titlePost=<?= $data_artikel['titlePost'] ?>" class="btn btn-warning p-4 py-1 rounded-2 text-white fw-semibold mt-3">
                            Lihat ...
                        </a>
                    </div>
                </li>
                <?php }; ?>
            </ul>
        </div>
        <!-- Add the progress bar element -->
        <div class="my-carousel-progress">
            <div class="my-carousel-progress-bar"></div>
        </div>
    </div>
</div>

<div class="container column-start w-100 p-5">
    <h4 class="text-black m-0 w-50 d-flex justify-content-start align-items-end lh-1 ms-4 pt-3">
        The Best Beach in The World
        <hr class="bg-warning line-yellow border-0 m-0 w-25 rounded-5 ms-4">
    </h4>
    <div class="w-100 row p-4">
        <div class="col-12 col-lg-7 p-3 beach-right">
            <div class="beach-1 w-100 position-relative rounded-4 overflow-hidden">
                <img src="./assets/home/pantai-silir.jpg" alt="pantai-silir.jpg" width="100%" height="auto" class="position-absolute">
                <div class="title-beach position-absolute column-end-start">
                    <h4>Pantai Silir</h4>
                    <p class="fs-7">
                        Pantai merupakan sebuah bentuk geografis yang terdiri dari pasir, dan terdapat di daerah pesisir laut.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5 p-3 d-flex flex-column justify-content-start beach-right">
            <div class="w-100 position-relative rounded-4 overflow-hidden">
                <img src="./assets/home/pantai-kambil.jpg" alt="pantai-kambil.jpg" width="100%" height="auto" class="position-absolute">
                <div class="title-beach position-absolute column-end-start">
                    <h4>Pantai Kambil</h4>
                    <p class="fs-7">
                        Pantai merupakan sebuah bentuk geografis yang terdiri dari pasir, dan terdapat di daerah pesisir laut.
                    </p>
                </div>
            </div>
            <div class="w-100 position-relative rounded-4 overflow-hidden mt-5">
                <img src="./assets/home/pantai-watu.jpg" alt="pantai-watu.jpg" width="100%" height="auto" class="position-absolute">
                <div class="title-beach position-absolute column-end-start">
                    <h4>Pantai Watu</h4>
                    <p class="fs-7">
                        Pantai merupakan sebuah bentuk geografis yang terdiri dari pasir, dan terdapat di daerah pesisir laut.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid w-100 sec-6-home p-5">
    <h4 class="text-black m-0 w-50 d-flex justify-content-start align-items-end lh-1 ms-4 pt-3 px-5">
        The Best Hill in The World
        <hr class="bg-warning line-yellow border-0 m-0 w-25 rounded-5 ms-4">
    </h4>
    <div class="w-100 row px-5 pt-4 mx-3">
        <?php 
            $query_artikel = "SELECT * FROM daftar_artikel";
            $hasil_artikel = mysqli_query($conn, $query_artikel);
            while ($data_artikel = mysqli_fetch_assoc($hasil_artikel)) {
                
                if(strpos($data_artikel['titlePost'], "-")) {
                    $titlePost_cat = str_replace("-", " ", $data_artikel['titlePost']);
                } else {
                    $titlePost_cat = $data_artikel['titlePost'];
                }
        ?>
        <div class="col-6 col-md-4 col-lg-3 p-3 text-white">
            <div class="card-post position-relative w-100 shadow-sm bg-dark rounded-4 overflow-hidden"
            style="
                background-image: url('./assets/library_image/<?= $data_artikel['featureImage'] ?>');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 400px;
            ">
                <div class="title-card-post position-absolute top-0 start-0 column-end-start">
                    <h4 class="m-0 fw-semibold text-capitalize"><?= $titlePost_cat ?></h4>
                    <p class="fw-normal fs-7 m-0">
                        Artikel ini terkait <?= $titlePost_cat ?>
                    </p>
                    <div class="mt-1">
                        <i class="material-icons fs-5" style="color: #ffc527;">&#xe838;</i>
                        <i class="material-icons fs-5" style="color: #ffc527;">&#xe838;</i>
                        <i class="material-icons fs-5" style="color: #ffc527;">&#xe838;</i>
                        <i class="material-icons fs-5" style="color: #ffc527;">&#xe838;</i>
                        <i class="material-icons fs-5" style="color: #ffc527;">&#xe838;</i>
                    </div>
                </div>
            </div>
        </div>
        <?php }; ?>
    </div>
</div>

<div class="w-100 column-center p-5 bg-dark bg-testi pb-4"
style="background-image: url('./assets/home/bg-testi.jpg');">
    <h5 class="m-0 fw-semibold text-white">
        Testimonial Konsumen
        <hr class="w-auto line-yellow border-0 rounded-5 m-0">
    </h5>
    <div class="w-100 row p-5 pb-0 justify-content-center text-white text-center">
        <?php $name_testi = ['MKS Wawan','Thomas Erere','Angkel Ji']; $i = 1; ?>
        <?php foreach($name_testi as $x) : ?>
        <div class="col-4 p-3 column-center">
            <img src="./assets/home/testi-<?= $i ?>.jpg" alt="" width="140" class="rounded-circle">
            <p class="fs-normal m-0 fs-7 mt-4 w-75">
                "Saya sangat puas dengan layanan travel yang saya pesan di NJOPLESIR ini. Banyak penawaran paket hemat untuk kita"
            </p>
            <h6 class="fs-semibold text-warning mt-3">MKS Wawan</h6>
        </div>
        <?php $i++; ?>
        <?php endforeach; ?>
    </div>
</div>

<div class="container bg-white row p-5 justify-content-center flex-wrap">
    <?php 
        $query_sponsor = mysqli_query($conn, "select * from sponsorship");
    ?>
    <?php while($sponsor = mysqli_fetch_assoc($query_sponsor)) : ?>
    <a href="<?= $sponsor['sponsor_url']; ?>" target="_blank" class="text-decoration-none col-6 col-md-4 col-lg-2 px-5"
    style="
        background-image: url('./assets/sponsor/<?= $sponsor['sponsor_logo'] ?>');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        height: 130px;
    ">
    </a>
    <?php endwhile; ?>
</div>

<?php include "footer.php"; ?>

<script>

    var splide = new Splide( '.splide', {
    type   : 'loop',
    perPage: 3,
    perMove: 1,
    focus: 'center',
    } );

    splide.mount();
    
    // splide 2
    var splide2 = new Splide( '.splide_2', {
    type   : 'loop',
    perPage: 3,
    perMove: 1,
    focus: 'center'
    } );

    splide2.mount();

</script>