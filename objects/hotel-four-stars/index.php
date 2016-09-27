<?php
$id = 'hotel-four-stars';
$parent = 'object';
$title_ru = 'Гостиничный комплекс 4 *';
$title_en = 'Hotel complex 4 *';
$description_ru = 'Описание на русском»';
$description_en = 'Description on english';
$keywords_ru = 'кейвордс на русском';
$keywords_en = 'keywords on english';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1>Гостиничный&nbsp;комплекс</h1>
            <div class="hero-image__stars">
                <div id="star-1" class="hero-image__star light appear"></div>
                <div id="star-2" class="hero-image__star light appear"></div>
                <div id="star-3" class="hero-image__star light appear"></div>
                <div id="star-4" class="hero-image__star light appear"></div>
            </div>
        </div>

        <div class="hero-image_hotel-four-stars">
            <img style="width:100%;" src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section class="hero-content">

        <div class="hero-content__matlas-logo_dark"></div>

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
            <p>Элегантная и утонченная, <a href="#">гостиница 4 звезды</a> представляет собой идеальное место для расслабляющего и оздоровительного отдыха в&nbsp;обстановке домашнего уюта и комфорта, вдали от суматошного ритма повседневной жизни</p>
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
                    <td>15 000 м<sup>2</sup></td>
                    <td>10 400 м<sup>2</sup></td>
                    <td>4 600 м<sup>2</sup></td>
                </tr>
                <tr>
                    <th>Стоимость</th>
                    <td></td>
                    <td>5 000 ₽ / номер
                        <br>
                        <div class="regular">в сутки</div>
                    </td>
                    <td>15 000 ₽ / м<sup>2</sup>
                        <br>
                        <div class="regular">в год</div>
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
                <div id="btn-left" class="btn-left"></div>
                <div id="btn-right" class="btn-right"></div>
            </nav>

        </div>

        <div class="hero-content__poetic">

            <div class="hero-content__poetic_poem">
                <p>И люблю не дома, а на воле,
                    <br> В чистом поле, на хмельной траве,
                    <br> Задремать и пролежать, доколе
                    <br> Не склонится месяц к голове</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов
                        <br> «О родине»
                        <br> (отрывок)
                        <br> 1979</p>
                </div>

            </div>

        </div>

    </section>

<?php require $docroot.'includes/bottom.php'; ?>