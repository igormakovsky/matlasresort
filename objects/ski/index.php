<?php
$id = 'ski';
$parent = 'object';
$title_ru = 'Горнолыжный комплекс';
$title_en = 'Один из основных зимних центров притяжения';
$description_ru = '';
$description_en = '';
$keywords_ru = '';
$keywords_en = '';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1 lang="ru">Горнолыжный комплекс</h1>
            <h1 lang="en"></h1>
        </div>

        <div id="hero-image" class="hero-image__photo hero-image__hotel-four-stars darker">
            <img style="width:100%;" src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section class="hero-content">

        <div class="hero-content__matlas-logo_dark"></div>

        <div class="hero-content__title">
            <h2 lang="ru">Горнолыжный комплекс</h2>
            <h3 lang="ru">Один из основных зимних центров притяжения</h3>
            <h2 lang="en"></h2>
            <h3 lang="en"></h3>
        </div>

        <div class="hero-content__description">

            <p></p>

        </div>

        <!-- <div class="hero-content__list">
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div> -->

        <div class="hero-content__illustration">

            <div class="image" style="width:900px; margin-bottom:10rem;">
                <img src="img/slope.jpg" srcset="img/slope@2x.jpg 2x">
            </div>

            <div class="absolute" style="left:7rem; top:-3.5rem; width:10rem;">

                <p>Горнолыжные трассы расположены на северном склоне</p>

            </div>
                
            <div class="absolute" style="left:7rem; top:9.5rem; width:10rem;">

                <p><a href="#snow">Система искусственного снегообразования</a>&nbsp;— сезон до 6 месяцев</p>

            </div>

            <div id="top-gondola" class="pin" style="right:13.95rem; top:0rem;">
                <a href="#gondola"><img src="/img/pin-brown.svg"></a>
                <div class="pin__note" style="right:5.5rem; top:-1.7rem; text-align:right;">
                    <h5 class="brown"><a href="#gondola">Гондольная<br>канатная<br>дорога</a></h5>
                    <h5 class="brown meters align-right">+2750 м</h5>
                </div>
            </div>

            <div id="top-chair" class="pin" style="left:8.65rem; bottom:13.4rem;">
                <a href="#chair"><img src="/img/pin-blue.svg"></a>
                <div class="pin__note" style="left:-1rem; top:-10rem;">
                    <h5 class="light-blue"><a href="#chair">Кресельная канатная дорога</a></h5>
                    <h5 class="light-blue meters">+1900 м</h5>
                </div>
            </div>

            <div class="pin pin-start" style="left:7rem; bottom:1.5rem;">
                <img class="scale" src="/img/pin-start.svg">
                <div class="pin__note" style="left:1.4rem; top:6rem;">
                    <h5 class="light-blue">Зона выката</h5>
                    <h5 class="light-blue meters">+1800 м</h5>
                </div>
            </div>

        </div>

        <div id="chair" class="hero-content__title">
            <div style="width:3rem; height:auto; margin:0 auto;">
                <a href="#top-chair"><img class="scale__bottom" src="/img/pin-blue.svg"></a>
            </div>
            <h3 lang="ru" class="light-blue">Кресельная канатная дорога, 1-я очередь</h3>
            <h3 lang="en"></h3>
        </div>

        <div class="hero-content__table">

            <table class="mini">
                <tr>
                    <th>Протяженность</th>
                    <th>Горнолыжные трассы</th>
                    <th>Число одновременно катающихся</th>
                </tr>
                <tr>
                    <td>0,9 км</td>
                    <td>1,9 км</td>
                    <td>300 человек</td>
                </tr>
            </table>

        </div>

        <div id="gondola" class="hero-content__title">
            <div style="width:3rem; height:auto; margin:0 auto;">
                <a href="#top-gondola"><img class="scale__bottom" src="/img/pin-brown.svg"></a>
            </div>
            <h3 lang="ru">Гондольная канатная дорога, 2-я очередь</h3>
            <h3 lang="en"></h3>
        </div>

        <div class="hero-content__table">

            <table class="mini">
                <tr>
                    <th>Протяженность</th>
                    <th>Горнолыжные трассы</th>
                    <th>Число одновременно катающихся</th>
                </tr>
                <tr>
                    <td>6,8 км</td>
                    <td>16,3 км</td>
                    <td>2000 человек</td>
                </tr>
            </table>

        </div>

        <!-- <div class="hero-content__description">
        
            <p>Система искусственного снегообразования&nbsp;(СИС)&nbsp;— сезон до&nbsp;6&nbsp;месяцев</p>
        
        </div> -->

        <div id="snow" class="hero-content__illustration">

            <div class="image" style="width:900px; margin:10rem auto;">
                <img src="img/temperature-ru.png">
            </div>

        </div>

        <div class="hero-content__carousel">

            <div class="photos" id="carousel">

                <div class="photo"><img src="/img/nature/nature-15.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-14.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-4.jpg"></div>

            </div>

            <nav class="carousel-btns">
                <div id="btn-left" class="btn-left"></div>
                <div id="btn-right" class="btn-right"></div>
            </nav>

        </div>

        <!-- <div class="hero-content__poetic">
        
            <div class="hero-content__poetic_poem">
                <p></p>
        
                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов
                        <br><span class="title">Вершина далекая кажется близкою</span>
                        <br>(отрывок)
                        <br>1900</p>
                </div>
        
            </div>
        
        </div> -->

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>