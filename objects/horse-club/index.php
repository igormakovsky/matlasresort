<?php
$id = 'horse-club';
$parent = 'object';
$title_ru = 'Конно-спортивный клуб';
$title_en = '';
$description_ru = 'Описание на русском»';
$description_en = 'Description on english';
$keywords_ru = 'кейвордс на русском';
$keywords_en = 'keywords on english';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1 lang="ru">Конно-спортивный клуб</h1>
            <h1 lang="en"></h1>
        </div>

        <div id="hero-image" class="hero-image__photo hero-image__hotel-four-stars darker">
            <img style="width:100%;" src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section class="hero-content">

        <div class="hero-content__matlas-logo_link"><a href="/"><img src="/img/matlas-logo-dark.png"></a></div>

        <div class="hero-content__title">
            <h2 lang="ru">Конно-спортивный клуб</h2>
            <h2 lang="en"></h2>
        </div>

        <div class="hero-content__description">
            <p>Учитывая потенциально высокий интерес жителей региона к лошадям и скачкам, в дальнейшем предполагается рассмотреть возможность строительства ипподрома
            </p>
        </div>

        <div class="hero-content__list">
            <ul>
                <li>Конюшня</li>
                <li>Открытый манеж для тренинга</li>
                <li>Основное поле с травяным покрытием</li>
                <li>Постой лошадей полный пансион</li>
                <li>Аренда денников</li>
                <li>Тренинг лошадей (конкур, выездка)</li>
                <li>Обучения верховой езде</li>
                <li>Услуги по аренде и прокату лошадей</li>
                <li>Горные прогулки</li>
                <li>Индивидуальные занятия</li>
            </ul>
        </div>

        <div class="hero-content__table">

            <table>
                <tr>
                    <th>Общая площадь</th>
                    <th>Вместимость клуба</th>
                    <th>Стоимость прогулки</th>
                    <th>Среднее количество прогулок в день</th>
                </tr>
                <tr>
                    <td>800 м<sup>2</sup></td>
                    <td>50 лошадей</td>
                    <td>1 600 ₽</td>
                    <td>16</td>
                </tr>
            </table>

        </div>

        <div class="hero-content__carousel">

            <div class="photos" id="carousel">

                <div class="photo">
                    <img src="img/horse-club-1.jpg">
                </div>

                <div class="photo">
                    <img src="img/horse-club-2.jpg">
                </div>

                <div class="photo">
                    <img src="img/horse-club-3.jpg">
                </div>

            </div>

            <nav class="carousel-btns">
                <div id="btn-left" class="btn-left"></div>
                <div id="btn-right" class="btn-right"></div>
            </nav>

        </div>

        <div class="hero-content__poetic">

            <div class="hero-content__poetic_poem">
                <p>Если верный конь, поранив ногу,
                    <br>Вдруг споткнулся, а потом опять,
                    <br>Не вини его — вини дорогу
                    <br>И коня не торопись менять</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов
                        <br><span class="title">Берегите друзей</span>
                        <br>(отрывок)
                        <br>1977</p>
                </div>

            </div>

        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>