<?php
    session_start();
    if(isset($_SESSION['login'])) {
        $id = $_SESSION['id'];
    }
    include "koneksi.php"; global $conn;
    include "head.php";
    
    $editorPages;
    $jmlh_total = strlen($editorPages);
    $jmlh_teks = ceil($jmlh_total / 2);
    $teks_1 = substr($editorPages, 0, $jmlh_teks);
    $jmlh_teks_1 = strlen($teks_1);
    $teks_2 = substr($editorPages, $jmlh_teks_1, $jmlh_total);

    $queryBanner = mysqli_query($conn, "SELECT * FROM daftar_halaman WHERE titlePage = '$titlePages'");
?>
<title>NJOTRAVEL - <?= ucwords($titlePages); ?></title>
<?php include "header.php"; ?>
<?php include "feature.php"; ?>
<div class="w-100 container p-5 text-center text-break">
    <div class="w-100 px-5 py-4">
        <?= $teks_1; ?>
        <?php if(!($databanner = mysqli_fetch_assoc($queryBanner)['bannerImage']) == NULL) : ?>
        <?php include "banner.php"; ?>
        <?php else : ?>
    <span></span>
    <?php endif; ?>
    <?= $teks_2; ?>
</div>
</div>
<?php include "footer.php"; ?>