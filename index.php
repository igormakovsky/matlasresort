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

        <div id="logo" class="hero-image__matlas-logo_light exited index">
        </div>

        <div id="title" class="hero-image__title exited index">
            <h1 lang="ru">Всесезонный<br>туристско-рекреационный<br>комплекс</h1>
            <h1 lang="en"></h1>
        </div>

        <div id="hero-image" class="hero-image__photo hero-image__matlasresort darker">
            <img style="width:100%;" src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

        <div class="hero-content__poetic" style="margin-top:0rem;">

            <div class="hero-content__poetic_poem">
                <p>О, родина,
                    <br>Под гром твоих колоколов
                    <br>Твое я славлю имя.
                    <br>И нет на свете слаще слов,
                    <br>И звука нет любимей</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов
                        <br><span class="title">О родине</span>
                        <br>(отрывок)
                        <br>1979</p>
                </div>

            </div>

        </div>

        <!-- -->

        <div class="hero-content__intermediate" style="margin:0 auto;">

            <div class="hero-content__intermediate_map-main">
                <img src="img/wireframe-map.jpg" srcset="img/wireframe-map@2x.jpg 2x">

                <div class="dot align-left" data-tooltip="Гостиничный комплекс 5*" style="left:23.5%; top:31%;">
                    <a href="#li-1"><span class="dot__number">1</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Гостиничный комплекс 4*" style="left:45.9%; top:49%;">
                    <a href="#li-2"><span class="dot__number">2</span></a>
                </div>

                <div class="dot align-left" data-tooltip="Апартотель" style="right:28%; top:55%;">
                    <a href="#li-3"><span class="dot__number">3</span></a>
                </div>

                <div class="dot align-left" data-tooltip="Виллы" style="left:7%; top:50%;">
                    <a href="#li-4"><span class="dot__number">4</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Коттеджи" style="left:36%; top:17%;">
                    <a href="#li-4"><span class="dot__number">4</span></a>
                </div>

                <div class="dot align-left" data-tooltip="Бальнеология" style="right:36%; top:43%;">
                    <a href="#li-5"><span class="dot__number">5</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Гольф клуб" style="right:4%; top:71%;">
                    <a href="#li-6"><span class="dot__number">6</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Конно-спортивный комплекс" style="right:10%; top:84%;">
                    <a href="#li-7"><span class="dot__number">7</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Детский инновационный центр" style="right:38%; top:54%; z-index:101;">
                    <a href="#li-8"><span class="dot__number">8</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Спортивный комплекс" style="right:40%; top:60%; z-index:100;">
                    <a href="#li-9"><span class="dot__number">9</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Горнолыжный комплекс" style="right:45%; top:71%;">
                    <a href="#li-10"><span class="dot__number">10</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Ресторан" style="left:34.5%; top:5.5%;">
                    <a href="#li-11"><span class="dot__number">11</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Мечеть" style="left:28.5%; top:44.5%;">
                    <a href="#li-12"><span class="dot__number">12</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Православная часовня" style="right:39%; top:30%;">
                    <a href="#li-13"><span class="dot__number">13</span></a>
                </div>

                <div class="dot align-left" data-tooltip="Вертолетная площадка" style="left:8.5%; top:83%;">
                    <a href="#li-14"><span class="dot__number">14</span></a>
                </div>

                <div class="dot align-left" data-tooltip="Парковки" style="right:32%; top:63%;">
                    <a href="#li-15"><span class="dot__number">15</span></a>
                </div>

            </div>

        </div>

        <div class="hero-content__title" style="margin:7rem auto 4rem;">
            <h2 lang="ru">Всесезонный курорт «Матлас»</h2>
            <h3 lang="ru">Основные характеристики объектов курорта</h3>
            <h2 lang="en"></h2>
            <h3 lang="en"></h3>
        </div>

        <div class="hero-content__table">

            <table class="hero-content__table main">
                <tr>
                    <th></th>
                    <th>Наименование</th>
                    <th>Количество, шт.</th>
                    <th>Полезная площадь,&nbsp;м<sup>2</sup></th>
                    <th>Строительная площадь,&nbsp;м<sup>2</sup></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td colspan="4"><a id="li-1" href="/objects/hotel-five-stars/">Гостиничный комплекс 5*</a></td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="regular">— Номерной фонд</span></td>
                    <td>60</td>
                    <td>2 400</td>
                    <td>4 000</td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="regular">— СПА и Детокс центр</span></td>
                    <td></td>
                    <td>1 600</td>
                    <td>2 000</td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="regular">— Конференц-зал</span></td>
                    <td></td>
                    <td>1 200</td>
                    <td>1 200</td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="regular">— Коммерческие площади</span></td>
                    <td></td>
                    <td>960</td>
                    <td>1 200</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td colspan="4"><a id="li-2" href="/objects/hotel-four-stars/">Гостиничный комплекс 4*</a></td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="regular">— Номерной фонд</span></td>
                    <td>260</td>
                    <td>7 280</td>
                    <td>10 400</td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="regular">— Коммерческие площади</span></td>
                    <td></td>
                    <td>3 680</td>
                    <td>4 600</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><span id="li-3" class="regular">Апартотель, номерной фонд</span></td>
                    <td>250</td>
                    <td>7 000</td>
                    <td>8 750</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><a id="li-4" href="/objects/villas-and-cottages/">Виллы и коттеджи</a></td>
                    <td>10</td>
                    <td>3 250</td>
                    <td>3 250</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><a id="li-5" href="/objects/balneology/">Бальнеологический (водный) комплекс</a></td>
                    <td></td>
                    <td>2 800</td>
                    <td>3 500</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><a id="li-6" href="/objects/golf/">Гольф-клуб с полем для гольфа на&nbsp;18&nbsp;лунок (100&nbsp;га)</a></td>
                    <td></td>
                    <td>1 600</td>
                    <td>2 000</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><a id="li-7" href="/objects/horse-club/">Конно-спортивный комплекс</a></td>
                    <td></td>
                    <td>640</td>
                    <td>800</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><span id="li-8" class="regular">Детский инновационный центр</span></td>
                    <td></td>
                    <td>600</td>
                    <td>750</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><a id="li-9" href="/objects/sport/">Спортивный комплекс</a></td>
                    <td></td>
                    <td>640</td>
                    <td>800</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td colspan="4"><a id="li-10" href="/objects/ski/">Горнолыжный комплекс</a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td><a id="li-11" href="/objects/commercial/">Ресторан с панорамным видом</a></td>
                    <td></td>
                    <td>800</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td><span id="li-12" class="regular">Мечеть</span></td>
                    <td></td>
                    <td>450</td>
                    <td>450</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td><span id="li-13" class="regular">Православная часовня</span></td>
                    <td></td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td colspan="4"><span id="li-14" class="regular">Православная часовня</span></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td><span id="li-15" class="regular">Парковки</span></td>
                    <td>500</td>
                    <td>12 500</td>
                    <td>12 500</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Итого</td>
                    <td></td>
                    <td>47 500</td>
                    <td>57 300</td>
                </tr>

            </table>

        </div>

        <div class="hero-content__title" style="margin:7rem auto 4rem;">
            <h2 lang="ru"></h2>
            <h3 lang="ru">Главным преимуществом курорта Матлас является
его всесезонность и высочайшие стандарты сервиса</h3>
            <h2 lang="en"></h2>
            <h3 lang="en"></h3>
        </div>

        <!-- <div class="hero-content__description">
        
            <p>Главным преимуществом курорта Матлас является его всесезонность и высочайшие стандарты сервиса.</p>
        
        </div> -->

        <!-- <div class="hero-content__list">
            <ul>
                <li>
                    <h4>Основные центры притяжения:</h4>
                </li>
                <li>Всесезонный бальнеологический термальный комплекс</li>
                <li>SPA и Detox центр</li>
                <li>Гольф-клуб и поле для гольфа на 18 лунок</li>
                <li>Конно-спортивный клуб</li>
                <li>Горнолыжный курорт</li>
                <li>Зимние и летние виды отдыха</li>
        
            </ul>
        </div> -->

        <!-- caucasus-map -->

        <div class="hero-content__intermediate">

            <div class="hero-content__intermediate_caucasus-map">
                <img src="img/caucasus-map.jpg" srcset="img/caucasus-map@2x.jpg 2x">
            </div>

        </div>

        <div class="hero-content__description">

            <p>В окрестностях курорта находится <strong>более 150 памятников</strong> истории и культуры, а также большое количество уникальных природных достопримечательностей
            </p>
            <p>
                Хунзахский район — один из древнейших центров Дагестана. Хунзаху <strong>— более 2400 лет</strong>
            </p>

        </div>

        <div class="hero-content__list">
            <ul>

                <li>Курорт «Матлас» располагается на&nbsp;высокогорном Хунзахского плато на высоте <strong>1&nbsp;800&nbsp;метров</strong> над уровнем моря, <strong>в&nbsp;140&nbsp;километрах</strong> от Махачкалы.</li>
                <li>На сравнительно небольшой территории района есть самые разнообразные и неповторимые уголки природы. Глубочайшие каньоны, изумительные по красоте высокогорные озера и&nbsp;водопады, сложные по строению горные массивы.</li>
                <li>Такие факторы как наличие территорий для&nbsp;развития, идеальный горный рельеф, мягкие климатические условия, расположение в&nbsp;регионе, хорошо обеспеченном трудовыми ресурсами, будут способствовать успешному развитию комплекса.</li>

            </ul>
        </div>

        <div class="hero-content__poetic" style="margin-top:0rem;">

            <div class="hero-content__poetic_poem">
                <p>Дагестан, все, что люди мне дали,
                    <br>Я по чести с тобой разделю,
                    <br>Я свои ордена и медали
                    <br>На вершины твои приколю</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов
                        <br><span class="title">Мне ль тебе, Дагестан мой былинный&hellip;</span>
                        <br>(отрывок)
                        <br>1976</p>
                </div>

            </div>

        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>