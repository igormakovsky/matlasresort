<?php
$year = '1985';
$id = 'index';
$parent = 'object';
$title_ru = 'Матлас';
$title_en = 'Matlas';
$description_ru = 'Описание на русском';
$description_en = 'Description on english';
$keywords_ru = 'кейвордс на русском';
$keywords_en = 'keywords on english';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';
?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1>Всесезонный<br>туристическо-рекреационный<br>комплекс</h1>
        </div>

        <div id="hero-image" class="hero-image__photo hero-image__hotel-four-stars darker">
            <img style="width:100%;" src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>