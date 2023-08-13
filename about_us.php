<?php
    session_start();
    if(isset($_SESSION['login'])) {
        $id = $_SESSION['id'];
    }
    include "koneksi.php"; global $conn;
    $navbarVar = 2;
    
    $query_about = mysqli_query($conn, "SELECT * FROM set_about ORDER BY dateSet DESC LIMIT 1");
    $result_about = mysqli_fetch_assoc($query_about);

    $query_qna = mysqli_query($conn, "SELECT * FROM set_qna");
?>
<?php include "head.php"; ?>
<title>NJOTRAVEL - <?= ucwords($result_about['title']) ?></title>
<style>

    .sec-5-about {
        padding: 130px 230px 170px 230px;
        background: #fff;
        text-align: center;
        color: #464646;
    }

    .sec-5-about h1 {
        font-size: 37px;
        margin-bottom: 50px;
    }

    .main-question {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        width: 100%;
        margin-top: 60px;
    }

    .content-question {
        background: #D9D9D9;
        margin: 0.7rem 0;
        border-radius: 0.5rem;
        box-shadow: 3px 4px 3px rgba(0,0,9,0.3);
        position: relative;
    }

    .question {
        padding: 1.3rem 3rem 1.3rem 2rem;
        min-height: 3.5rem;
        line-height: 1.25rem;
        font-size: large;
        display: flex;
        align-items: center;
        position: relative;
        cursor: pointer;
        letter-spacing: 0.01rem;
    }

    .question img {
        position: absolute;
        right: 30px; top: 20px;
        transform: rotateX(0deg);
        transition: transform .2s ease;
    }

    .question.active img {
        transform: rotateX(180deg);
        transition: transform .5s ease;
    }

    .content-answer {
        max-height: 0;
        overflow: hidden;
        background: whitesmoke;
        border-radius: 0 0 10px 10px;
        transition: max-height .2s ease;
    }

    .answer {
        padding: 2rem;
        text-align: justify;
        line-height: 1.4rem;
        letter-spacing: 0.01rem;
        font-size: medium;
    }
</style>
<?php $titlePage_feature = ucwords($result_about['title']); $gambar_feature = $result_about['featureImg']; ?>
<?php include "header.php"; ?>
<?php include "feature.php"; ?>
<div class="w-100 column-center text-center" style="padding: 6rem 10rem 6rem 10rem;">
    <h1 class="text-uppercase fw-semibold">NJOPLESIR</h1>
    <p class="fw-normal text-break w-75 py-3 px-5">
        <?= $result_about['featureDesc'] ?>
    </p>
    <hr class="w-75 bg-dark rounded-5 border-0 my-3" style="height: 2px; opacity: 1;">
    <div class="row w-100 px-5 justify-content-center my-3 text-center">
        <div class="column-center col-4 text-break">
            <img src="./assets/about/tiket.jpg" alt="" width="140">
            <h3 class="fw-semibold text-capitalize my-0 mt-4">
                Tiket Traveling
            </h3>
            <p class="fw-normal mt-1 w-75">
                Menawarkan kepada anda tiket traveling temnpat populer
            </p>
        </div>
        <div class="column-center col-4 text-break">
            <img src="./assets/about/transport.jpg" alt="" width="140">
            <h3 class="fw-semibold text-capitalize my-0 mt-4">
                Transportasi
            </h3>
            <p class="fw-normal mt-1 w-75">
                Menawarkan berbagai pilihan transportasi untuk travel
            </p>
        </div>
        <div class="column-center col-4 text-break">
            <img src="./assets/about/destinasi.jpg" alt="" width="140">
            <h3 class="fw-semibold text-capitalize my-0 mt-4">
                Destinasi
            </h3>
            <p class="fw-normal mt-1 w-75">
                Menawarkan berbagai tempat populer untuk dikunjungi
            </p>
        </div>
    </div>
</div>
<!-- <div class="w-100 d-flex justify-content-center align-items-end p-5" style="background-color: #e8e8e8;">
    <div class="p-5">
        <div class="ms-5 row-center rounded-4" 
        style="background: url('./assets/about/thumbnail-1.jpg');
        background-size: cover; height: 30rem; width: 30rem;
        background-repeat: no-repeat;
        background-position: center;">
            <button class="btn rounded-circle p-0"><img src="https://cdn-icons-png.flaticon.com/512/4028/4028574.png" width="80" style="filter: invert(100%);"></button>
        </div>
    </div>
    <div class="p-5 me-5 column-start">
        <h1 class="w-50">Dokumen Perjalanan</h1>
        <p class="text-start fs-3s">
            Curabitur scelerisque, arcu a pulvinar interdum, urna libero volutpat augue, tempor accumsan nunc sapien vel sem. Aliquam sagittis finibus eros. Suspendisse iaculis risus sollicitudin enim luctus aliquam.
        </p>
        <div class="row-start">
            <div>
                <div class="row-center rounded-3 mx-2" 
                style="background: url('./assets/about/thumbnail-2.jpg');
                background-size: cover; height: 10rem; width: 10rem;
                background-repeat: no-repeat;
                background-position: center;">
                    <button class="btn rounded-circle p-0"><img src="https://cdn-icons-png.flaticon.com/512/4028/4028574.png" width="50" style="filter: invert(100%);"></button>
                </div>
            </div>
            <div>
                <div class="row-center rounded-3 mx-2" 
                style="background: url('./assets/about/thumbnail-3.jpg');
                background-size: cover; height: 10rem; width: 10rem;
                background-repeat: no-repeat;
                background-position: center;">
                    <button class="btn rounded-circle p-0"><img src="https://cdn-icons-png.flaticon.com/512/4028/4028574.png" width="50" style="filter: invert(100%);"></button>
                </div>
            </div>
            <div>
                <div class="row-center rounded-3 mx-2" 
                style="background: url('./assets/about/Group 421.jpg');
                background-size: cover; height: 10rem; width: 10rem;
                background-repeat: no-repeat;
                background-position: center;">
                    <button class="btn rounded-circle p-0"><img src="https://cdn-icons-png.flaticon.com/512/4028/4028574.png" width="50" style="filter: invert(100%);"></button>
                </div>
            </div>
            
        </div>
    </div>
</div> -->
<div class="w-100 position-relative"
style="background-image: url('./assets/library_image/<?= $result_about['bannerImg'] ?>');
background-size: auto 100%;
background-attachment: fixed;
background-repeat: no-repeat;
box-sizing: border-box;
height: 38rem;">
    <div class="ms-5 text-white position-absolute column-start text-start" 
    style="left: 52%; top: 9rem; width: 25rem;">
        <?= $result_about['bannerDesc'] ?>
        <a href="blog.php" class="btn btn-warning px-5 text-white rounded-3">See More</a>
    </div>
</div>
<div class="sec-5-about" id="qna-about">
    <h1 data-aos="fade-up" data-aos-duration="800">Questions</h1>
    <div class="main-question">
        <?php while($result_qna = mysqli_fetch_assoc($query_qna)) : ?>
        <div class="content-question w-100" data-aos="fade-up" data-aos-duration="800">
            <div class="question">
                <?= $result_qna['question'] ?>
                <img src="./assets/svg/dropdown.svg" width="26px" draggable="false">
            </div>
            <div class="content-answer">
                <div class="answer">
                    <?= $result_qna['answer'] ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
<?php include "footer.php"; ?>
<script>
    // accordion question
        const ItemHeaders = document.querySelectorAll('div.question');
        
        ItemHeaders.forEach(ItemHeader => {
            ItemHeader.addEventListener('click', event => {
                ItemHeader.classList.toggle('active');
                
                const ItemBody = ItemHeader.nextElementSibling;
                
                if(ItemHeader.classList.contains('active')) {
                    ItemBody.style.maxHeight = ItemBody.scrollHeight + 'px';
                } else {
                    ItemBody.style.maxHeight = 0;
                }
            })
        })
</script>