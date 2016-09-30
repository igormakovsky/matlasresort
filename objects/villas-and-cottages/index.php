<?php
$id = 'villas-and-cottages';
$parent = 'object';
$title_ru = 'Виллы и коттеджи';
$title_en = 'Villas and cottages';
$description_ru = 'Виллы и коттеджи';
$description_en = 'Villas and cottages';
$keywords_ru = '';
$keywords_en = '';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1 lang="ru">Виллы и коттеджи</h1>
            <h1 lang="en">Villas and cottages</h1>
        </div>

        <div id="hero-image" class="hero-image__photo hero-image__hotel-four-stars darker">
            <img style="width:100%;" src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section class="hero-content">

        <div class="hero-content__matlas-logo_link"><a href="/"><img src="/img/matlas-logo-dark.png"></a></div>

        <div class="hero-content__title">
            <h2 lang="ru">Виллы и коттеджи</h2>
            <h3 lang="ru">Обособленная резиденция в горах</h3>
            <h2 lang="en">Villas and cottages</h2>
            <h3 lang="en"></h3>
        </div>

        <div class="hero-content__list">
            <ul>
                <li>Близость туристско-рекреационной зоны</li>
                <li>3 виллы площадью 500 м<sup>2</sup></li>
                <li>7 коттеджей площадью 250 м<sup>2</sup></li>
                <li>Современный интерьер и оборудование</li>
                <li>Обособленность относительно соседей</li>
                <li>Транспортная доступность</li>
                <li>Мягкий окружающий климат</li>
            </ul>
        </div>

        <div class="hero-content__table">

            <table>
                <tr>
                    <th>Общая площадь</th>
                    <th>Количество</th>
                    <th>Средняя стоимость аренды</th>
                    <th>Среднегодовая загрузка</th>
                </tr>
                <tr>
                    <td>
                        <nobr>3 250 м<sup>2</sup></nobr>
                    </td>
                    <td>10</td>
                    <td>20 000 ₽ / сутки</td>
                    <td>56,6%</td>
                </tr>
            </table>

        </div>

        <div class="hero-content__carousel">

            <div class="photos" id="carousel">

                <div class="photo"><img src="/img/nature/nature-1.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-2.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-3.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-4.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-5.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-6.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-7.jpg"></div>

            </div>

            <nav class="carousel-btns">
                <div id="btn-left" class="btn-left"></div>
                <div id="btn-right" class="btn-right"></div>
            </nav>

        </div>

        <div class="hero-content__poetic">

            <div class="hero-content__poetic_poem">
                <p>И глянь в окно: какая там погода,
                    <br>Туманна ли округа иль светла?
                    <br>Метет ли снег до края небосвода
                    <br>Иль катятся дождинки вдоль стекла?</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов
                        <br><span class="title">Не торопись</span>
                        <br>(отрывок)
                        <br>1976</p>
                </div>

            </div>

        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>