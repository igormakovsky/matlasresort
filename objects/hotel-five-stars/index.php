<?php
$id = 'hotel-five-stars';
$parent = 'object';
$title_ru = 'Гостиничный комплекс 5*';
$title_en = 'Hotel complex 5*';
$description_ru = 'Гостиничный комплекс 5*';
$description_en = 'Hotel complex 5*';
$keywords_ru = '';
$keywords_en = '';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1 lang="ru">Гостиничный комплекс</h1>
            <h1 lang="en">Hotel complex</h1>
            <div class="hero-image__stars">
                <div class="hero-image__star light appear"></div>
                <div class="hero-image__star light appear"></div>
                <div class="hero-image__star light appear"></div>
                <div class="hero-image__star light appear"></div>
                <div class="hero-image__star light appear"></div>
            </div>
        </div>

        <div id="hero-image" class="hero-image__photo hero-image__hotel-four-stars darker">
            <img style="width:100%;" src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section class="hero-content">

        <div class="hero-content__matlas-logo_link"><a href="/"><img src="/img/matlas-logo-dark.png"></a></div>

        <div class="hero-content__title">
            <h2 lang="ru">Гостиничный комплекс</h2>
            <h2 lang="en">Hotel complex</h2>

            <div class="hero-content__stars">
                <div class="hero-content__star dark appear"></div>
                <div class="hero-content__star dark appear"></div>
                <div class="hero-content__star dark appear"></div>
                <div class="hero-content__star dark appear"></div>
                <div class="hero-content__star dark appear"></div>
            </div>

        </div>

        <div class="hero-content__description">
            <p>5 звезд — не дань слепящей роскоши, но отличительный знак гостеприимства, спокойствия, комфорта и эксклюзивности</p>
        </div>

        <div class="hero-content__list">
            <ul>
                <li>Номерной фонд — 60</li>
                <li>Рестораны и банкетные залы</li>
                <li>СПА и Детокс центр</li>
                <li>Конференц-зал</li>
                <li>Коммерческие площади</li>
            </ul>
        </div>

        <div class="hero-content__table">

            <table>
                <tr>
                    <th>Наименования</th>
                    <th>Гостиничный
                        <br>комплекс, итого</th>
                    <th>Номерной фонд</th>
                    <th>СПА и Детокс-центр</th>
                    <th>Конференц-зал</th>
                    <th>Коммерческие площади</th>
                </tr>
                <tr>
                    <th>Общая площадь</th>
                    <td>
                        <nobr>8 400 м<sup>2</sup></nobr>
                    </td>
                    <td>
                        <nobr>
                            4 000 м<sup>2</sup>
                        </nobr>
                    </td>
                    <td>
                        <nobr>
                            2 000 м<sup>2</sup>
                        </nobr>
                    </td>
                    <td>
                        <nobr>
                            1 200 м<sup>2</sup>
                        </nobr>
                    </td>
                    <td>
                        <nobr>
                            1 200 м<sup>2</sup>
                        </nobr>
                    </td>
                </tr>
                <tr>
                    <th>Стоимость</th>
                    <td></td>
                    <td><nobr>10 000 ₽</nobr>&nbsp;/ номер
                        <br>
                        <span class="regular">в&nbsp;сутки</span>
                    </td>
                    <td><nobr>6 000 ₽</nobr>
                        <span class="regular">посещение</span>
                    </td>
                    <td><nobr>250 000 ₽</nobr><br>
                        <span class="regular">аренда, 3&nbsp;дня</span>
                    </td>
                    <td><nobr>15 000 ₽</nobr>&nbsp;/ м<sup>2</sup> <span class="regular">в&nbsp;год</span>
                    </td>
                </tr>
                <tr>
                    <th>Загрузка</th>
                    <td></td>
                    <td>56,57%</td>
                    <td>56,25%</td>
                    <td>2 аренды&nbsp;/ месяц</td>
                    <td>90%</td>
                </tr>
            </table>

        </div>

        <div class="hero-content__carousel">

            <div class="photos" id="carousel">

                <div class="photo">
                    <img src="/img/interiors/01-lobby-1.jpg">
                </div>
                   
                <div class="photo">
                    <img src="/img/interiors/02-reception-1.jpg">
                </div>
                   
                <div class="photo">
                    <img src="/img/interiors/10-living.jpg">
                </div>
                   
                <div class="photo">
                    <img src="/img/interiors/07-luxe-2.jpg">
                </div>
                   
                <div class="photo">
                    <img src="/img/interiors/08-deluxe-1.jpg">
                </div>
                   
                <div class="photo">
                    <img src="/img/interiors/12-master-bedroom.jpg">
                </div>

            </div>

            <nav class="carousel-btns">
                <div id="btn-left" class="btn-left"></div>
                <div id="btn-right" class="btn-right"></div>
            </nav>

        </div>

        <div class="hero-content__poetic">

            <div class="hero-content__poetic_poem">
                <p>Ты, на заре проснувшись, сделай милость,
                    <br>Еще хоть миг с собой наедине
                    <br>Побудь и вспомни все, что ночью снилось:
                    <br>Смеялся или плакал ты во сне</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов
                        <br><span class="title">Не торопись</span>
                        <br>(отрывок)
                        <br>1978</p>
                </div>

            </div>

        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>