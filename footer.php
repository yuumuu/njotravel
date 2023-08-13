<?php
$query_settings = mysqli_query($conn, "SELECT * FROM settings ORDER BY dateSet DESC LIMIT 1");
$result_settings = mysqli_fetch_assoc($query_settings);
?>
<div class="w-100 column-center p-5 text-center text-white" style="background: #222;">
    <a href="#top"><img src="./assets/image/<?= $result_settings['logo'] ?>" height="40" alt=""></a>
    <p class="fw-normal m-0 mt-3" style="width: 30rem;">
        <?= $result_settings['description'] ?>
    </p>
    <div class="medsos row-center w-50 mt-3 fs-7" style="letter-spacing: .03rem;">
        <a href="<?= $result_settings['youtube_url'] ?>" target="_blank" class="nav-link mx-2 row-center">
            <i class="fab fa-youtube fs-4 me-1" style="color: white;"></i>
            <?= $result_settings['youtube_name'] ?>
        </a>
        <a href="<?= $result_settings['facebook_url'] ?>" target="_blank" class="nav-link mx-2 row-center">
            <i class="fab fa-facebook-square fs-4 me-1" style="color: white;"></i>
            <?= $result_settings['facebook_name'] ?>
        </a>
        <a href="<?= $result_settings['instagram_url'] ?>" target="_blank" class="nav-link mx-2 row-center">
            <i class="fab fa-instagram fs-4 me-1" style="color: white;"></i>
            <?= $result_settings['instagram_name'] ?>
        </a>
    </div>
    <?php
        $wa_no = substr($result_settings['whatsapp_number'], 1, 20);
    ?>
    <a target="_blank" href="https://api.whatsapp.com/send/?phone=62<?= $wa_no ?>&text&type=phone_number&app_absent=0" class="nav-link m-0 mt-3" style="color: #989898; letter-spacing: 0.03rem;">
       <span class="fw-semibold"> telp: </span><?= $result_settings['whatsapp_number'] ?>
    </a>
    <h5 class="m-0 mt-4 fw-bold" style="color: #989898;">
        <?= $result_settings['company_name'] ?>
    </h5>
</div>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>