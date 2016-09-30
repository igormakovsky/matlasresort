<?php
$id = 'hotel-four-stars';
$parent = 'object';
$title_ru = 'Гостиничный комплекс 4*';
$title_en = 'Hotel complex 4*';
$description_ru = 'Гостиничный комплекс 4*';
$description_en = 'Hotel complex 4*';
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
            </div>

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

        <div class="hero-content__table">

            <table>
                <tr>
                    <th>Наименования</th>
                    <th>Гостиничный комплекс, итого</th>
                    <th>Номерной фонд</th>
                    <th>Коммерческие площади</th>
                </tr>
                <tr>
                    <th>Общая площадь</th>
                    <td>
                        <nobr>
                            15 000 м<sup>2</sup>
                        </nobr>
                    </td>
                    <td>
                        <nobr>
                            10 400 м<sup>2</sup>
                        </nobr>
                    </td>
                    <td>
                        <nobr>
                            4 600 м<sup>2</sup>
                        </nobr>
                    </td>
                </tr>
                <tr>
                    <th>Стоимость</th>
                    <td></td>
                    <td>
                        <nobr>5 000 ₽</nobr>&nbsp;/ номер
                        <br>
                        <span class="regular">в сутки</span>
                    </td>
                    <td>
                        <nobr>15 000 ₽</nobr>&nbsp;/ м<sup>2</sup>
                        <br>
                        <span class="regular">в год</span>
                    </td>
                </tr>
                <tr>
                    <th>Загрузка</th>
                    <td></td>
                    <td>56,13%</td>
                    <td>90%</td>
                </tr>
            </table>

        </div>

        <div class="hero-content__carousel">

            <div class="photos" id="carousel">
                
                <div class="photo">
                    <img src="img/hotel-four-1.jpg">
                </div>

                <div class="photo">
                    <img src="img/hotel-four-2.jpg">
                </div>

                <div class="photo">
                    <img src="img/hotel-four-3.jpg">
                </div>

                <div class="photo">
                    <img src="img/hotel-four-4.jpg">
                </div>

                <div class="photo">
                    <img src="img/hotel-four-5.jpg">
                </div>

                <div class="photo">
                    <img src="img/hotel-four-6.jpg">
                </div>

                <div class="photo">
                    <img src="img/hotel-four-7.jpg">
                </div>

            </div>

            <nav class="carousel-btns">
                <div id="btn-left" class="btn-left"></div>
                <div id="btn-right" class="btn-right"></div>
            </nav>

        </div>

        <div class="hero-content__poetic">

            <div class="hero-content__poetic_poem">
                <p>И люблю не дома, а на воле,
                    <br>В чистом поле, на хмельной траве,
                    <br>Задремать и пролежать, доколе
                    <br>Не склонится месяц к голове</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов
                        <br><span class="title">О родине</span>
                        <br>(отрывок)
                        <br>1979</p>
                </div>

            </div>

        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>