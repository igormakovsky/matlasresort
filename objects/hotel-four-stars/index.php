<?php
$id = 'hotel-four-stars';
$parent = 'object';
$title_ru = 'Гостиничный комплекс 4 *';
$title_en = 'Hotel complex 4 *';
$description_ru = 'Описание на русском»';
$description_en = 'Description on english';
$keywords_ru = 'кейвордс на русском';
$keywords_en = 'keywords on english';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';
?>

    <section class="hero-image">
        
        <div id="logo" class="hero-image__matlas-logo_light"></div>

        <div class="hero-image_hotel-four-stars">
            <img style="width:100%;" src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section>

        <h1 lang="ru">Гостиничный комплекс 4 *</h1>
        <h1 lang="en">Hotel complex 4 *</h1>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>