<?php
$id = 'balneology';
$parent = 'object';
$title_ru = 'Всесезонный бальнеологический термальный комплекс';
$title_en = '';
$description_ru = 'Лечение и реабилитация';
$description_en = '';
$keywords_ru = '';
$keywords_en = '';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1 lang="ru">Всесезонный бальнеологический<br>термальный комплекс</h1>
            <h1 lang="en"></h1>
        </div>

        <div id="hero-image" class="hero-image__photo hero-image__hotel-four-stars darker">
            <img style="width:100%;" src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section class="hero-content">

        <div class="hero-content__matlas-logo_link"><a href="/"><img src="/img/matlas-logo-dark.png"></a></div>

        <div class="hero-content__title">
            <h2 lang="ru">Всесезонный бальнеологический<br>термальный комплекс</h2>
            <h3 lang="ru">Лечение и реабилитация</h3>
            <h2 lang="en"></h2>
            <h3 lang="en"></h3>
        </div>

        <div class="hero-content__description">

            <p></p>

        </div>

        <div class="hero-content__list">
            <ul>
                <li>Комплексная диагностика</li>
                <li>Превентивная и эстетическая медицина</li>
                <li>Лечебные водные процедуры с использованием природных минеральных вод</li>
                <li>Лечебные и расслабляющие массажи</li>
                <li>Реабилитационные курсы после травм</li>
                <li>Грязевые процедуры</li>
                <li>Термы, бани, ванны, cолярий</li>
                <li>Ароматерапия, талассотерапия</li>
            </ul>
        </div>

        <div class="hero-content__table">

            <table>
                <tr>
                    <th>Общая площадь</th>
                    <th>Вместимость</th>
                    <th>Стоимость курса</th>
                    <th>Количество реализованных курсов в год</th>
                </tr>
                <tr>
                    <td>3 500 м<sup>2</sup></td>
                    <td>120 человек</td>
                    <td>
                        <nobr><span class="regular">7 дней</span> — 100 000 ₽</nobr>
                        <br>
                        <nobr><span class="regular">10 дней</span> — 125 000 ₽</nobr>
                        <br>
                        <nobr><span class="regular">14 дней</span> — 150 000 ₽</nobr>
                    </td>
                    <td>2 830</td>
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
                <p>В краю вершин крутых и гордых,
                    <br>Где у сердец особый пыл,
                    <br>Я звезды пил из речек горных,
                    <br>Из родников студеных пил</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов
                        <br><span class="title">Покуда вертится Земля</span>
                        <br>(отрывок)
                        <br>1976</p>
                </div>

            </div>

        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>