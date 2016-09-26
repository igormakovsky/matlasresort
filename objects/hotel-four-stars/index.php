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

        <div id="logo" class="hero-image__matlas-logo_light">
        </div>

        <div id="title" class="hero-image__title">
            <h1>Гостиничный&nbsp;комплекс</h1>
        </div>

        <div class="hero-image_hotel-four-stars">
            <img style="width:100%;" src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section class="hero-content">

        <div class="hero-content__matlas-logo_dark">
        </div>

        <div class="hero-content__title">
            <h2 lang="ru">Гостиничный комплекс 4*</h2>
            <h2 lang="en">Hotel complex 4*</h2>
        </div>

        <div class="hero-content__description">
            <p>Элегантная и утонченная, гостиница 4 звезды представляет собой идеальное место для расслабляющего и оздоровительного отдыха в&nbsp;обстановке домашнего уюта и комфорта, вдали от суматошного ритма повседневной жизни</p>
        </div>

        <div class="hero-content__list">
            <ul>
                <li>Номерной фонд — <strong>260</strong></li>
                <li>Рестораны и банкетные залы</li>
                <li>Коммерческие площади</li>
            </ul>
        </div>

        <div class="hero-content__carousel">

            <div class="relate" style="margin:6em auto; width:1000px;">
                <div id="carousel" class="absolute carousel" style="left:0em; top:0em; height:600px; width:1000px;">

                    <div class="photo">
                        <img src="img/carousel-image-1.jpg" srcset="img/carousel-image-1@2x.jpg 2x">
                    </div>
                       
                    <div class="photo">
                        <img src="img/carousel-image-2.jpg" srcset="img/carousel-image-2@2x.jpg 2x">
                    </div>
                       
                    <div class="photo">
                        <img src="img/carousel-image-3.jpg" srcset="img/carousel-image-3@2x.jpg 2x">
                    </div>
                       
                    <div class="photo">
                        <img src="img/carousel-image-4.jpg" srcset="img/carousel-image-4@2x.jpg 2x">
                    </div>

                </div>
                
                <nav class="carousel-btns">
                    <div id="btn-left" class="btn-right"></div>
                    <div id="btn-right" class="btn-left"></div>
                </nav>
                
            </div>

        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>