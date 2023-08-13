<?php $bannerImages_name; $bannerDescs; ?>
<div class="w-100 column-center py-5" style="padding: 8rem;">
    <div class="w-100 rounded-4 overflow-hidden column-center" 
    style="height: 18rem; width: 18rem; background-color: #D9D9D9;
    background-image: url('./assets/library_image/<?= $bannerImages_name; ?>');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    ">
        <p class="text-center w-50 text-white m-0 fw-light lh-sm" style="font-size: 17px;">
            <?= $bannerDescs; ?>
        </p>
    </div>
</div>