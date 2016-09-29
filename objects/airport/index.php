<?php
$id = 'airport';
$parent = 'object';
$title_ru = 'Аэропорт «Матлас»';
$title_en = '';
$description_ru = 'Концепция создания аэропорта';
$description_en = '';
$keywords_ru = '';
$keywords_en = '';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1 lang="ru">Аэропорт</h1>
            <h1 lang="en"></h1>
        </div>

        <div id="hero-image" class="hero-image__photo hero-image__hotel-four-stars darker">
            <img style="width:100%;" src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section class="hero-content">

        <div class="hero-content__matlas-logo_dark"></div>

        <div class="hero-content__title">
            <h2 lang="ru">Аэропорт</h2>
            <h3 lang="ru">Концепция создания</h3>
            <h2 lang="en"></h2>
            <h3 lang="en"></h3>
        </div>

        <div class="hero-content__poetic">

            <div class="hero-content__poetic_poem">
                <p>Про солнце пела, и про звезды,
                    <br>И про того, кто сердцу мил.
                    <br>Пусть он спешит, пока не поздно,
                    <br>Пока другой не полюбил</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов
                        <br><span class="title">В Ахвахе</span>
                        <br>(отрывок)
                        <br>1964</p>
                </div>

            </div>

        </div>

        <!-- <div class="hero-content__table">
        
            <table>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>₽</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        
        </div> -->

        <!-- <div class="hero-content__carousel">
        
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
        
        </div> -->

        <!-- map-global -->

        <div class="hero-content__intermediate">

            <div class="hero-content__intermediate_map-global">
                <img src="img/map-global.jpg" srcset="img/map-global@2x.jpg 2x">
            </div>

        </div>

        <div class="hero-content__title">
            <h2 lang="ru">Концепция аэропорта</h2>
            <h3 lang="ru"></h3>
            <h2 lang="en"></h2>
            <h3 lang="en"></h3>
        </div>

        <div class="hero-content__description">

            <p>«Малую авиацию нужно развивать прежде всего в отдаленных регионах, где она просто незаменима. Это важнейшая социальная и&nbsp;экономическая задача»
                <br>— В.В. Путин</p>

        </div>

        <div class="hero-content__table">

            <table>
                <tr>
                    <th>Наименование</th>
                    <th>Описание аэродрома</th>
                    <th>Описание вертодрома</th>
                </tr>
                <tr>
                    <th>Класс Аэродрома</th>
                    <td colspan="2">III класса (совместного базирования)</td>
                </tr>
                <tr>
                    <th>Размеры ВПП</th>
                    <td>L = 1 800 м, S = 45 м</td>
                    <td>L = 110 – 190 м,
                        <br><span class="regular">дополнительно оборудуются<br>                        посадочные площадки</span> 50×50 м</td>
                </tr>
                <tr>
                    <th>Тип ВПП</th>
                    <td colspan="2">ИВПП <span class="regular">(искусственная взлетно-посадочная полоса)</span></td>
                </tr>
                <tr>
                    <th>Тип воздушного судна</th>
                    <td>Воздушное судно 3-го класса</td>
                    <td>Вертолеты всех типов</td>
                </tr>
                <tr>
                    <th>Возможные к&nbsp;приему воздушные суда</th>
                    <td>Bombardier Q400, Bombardier CRJ200, Saab 2000, ATR 72-600, Falcon 50EX, С-80, АН-26-100 и ВС классом ниже</td>
                    <td>Ми-6, Ми-10, Ми-26, Ми-8, Ми-4, Ка-32, Ми-2, Ка-26, Ансат, Ми-34С, Robinson, Bell, Agusta, MD, Eurocopter</td>
                </tr>
            </table>

        </div>

        <!-- map-local -->

        <div class="hero-content__intermediate">

            <div class="hero-content__intermediate_map-local">
                <img src="img/map-local.jpg" srcset="img/map-local@2x.jpg 2x">

                <div class="dot align-right" data-tooltip="Подъездная дорога" style="right:26.5%; top:75%;">
                    <a href="#li-1"><span class="dot__number">1</span></a>
                </div>

                <div class="dot align-left" data-tooltip="Главное здание аэропорта" style="right:27%; top:53%;">
                    <a href="#li-2"><span class="dot__number">2</span></a>
                </div>

                <div class="dot align-left" data-tooltip="Склад ГСМ" style="right:24%; top:42%;">
                    <a href="#li-3"><span class="dot__number">3</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Перрон" style="right:32%; bottom:30.5%;">
                    <a href="#li-4"><span class="dot__number">4</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Диспетчерская вышка" style="right:30%; top:43.5%; z-index:11;">
                    <a href="#li-5"><span class="dot__number">5</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Ремонтный цех" style="right:34%; top:43%; z-index:10;">
                    <a href="#li-6"><span class="dot__number">6</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Рулежная дорожка" style="right:40.3%; top:50%;">
                    <a href="#li-7"><span class="dot__number">7</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Взлетно- посадочная полоса" style="left:26%; top:35%;">
                    <a href="#li-8"><span class="dot__number">8</span></a>
                </div>

                <div class="dot align-left" data-tooltip="Вертодром" style="right:44.25%; top:37.5%;">
                    <a href="#li-9"><span class="dot__number">9</span></a>
                </div>

                <div class="dot align-left" data-tooltip="Стоянка судов" style="left:42%; top:29%;">
                    <a href="#li-10"><span class="dot__number">10</span></a>
                </div>

            </div>

        </div>

        <div class="hero-content__title">
            <h2 lang="ru"></h2>
            <h3 lang="ru">Схема аэродрома и аэропорта в случае совместного базирования</h3>
            <h2 lang="en"></h2>
            <h3 lang="en"></h3>
        </div>

        <div class="hero-content__list">
            <ol>
                <li id="li-1">Подъездная дорога</li>
                <li id="li-2">Здание аэропорта с торговым центром и&nbsp;техническими службами</li>
                <li id="li-3">Склад ГСМ</li>
                <li id="li-4">Перрон с местами стоянки воздушных судов</li>
                <li id="li-5">Диспетчерская вышка</li>
                <li id="li-6">Ремонтно-хозяйственная зона</li>
                <li id="li-7">Главная рулежная дорожка</li>
                <li id="li-8">ИВПП (искусственная взлетно-посадочная полоса)</li>
                <li id="li-9">Вертодром</li>
                <li id="li-10">Места стоянки воздушных судов</li>
            </ol>
        </div>

        <!-- coverage -->

        <div class="hero-content__intermediate">

            <div class="hero-content__intermediate_coverage">
                <img src="img/coverage.jpg" srcset="img/coverage@2x.jpg 2x">
            </div>

        </div>

        <div class="hero-content__title">
            <h2 lang="ru">Зона охвата</h2>
            <h3 lang="ru">Внутренние перевозки</h3>
            <h2 lang="en"></h2>
            <h3 lang="en"></h3>
        </div>

        <div class="hero-content__table">

            <table class="coverage">
                <tr>
                    <th>0 – 500 км</th>
                    <th>500 – 1000 км</th>
                    <th>1000 — 1600 км</th>
                </tr>
                <tr>
                    <td>Махачкала
                        <br>Грозный
                        <br>Владикавказ
                        <br>Ставрополь
                        <br>Астрахань</td>
                    <td>Волгоград
                        <br>Ростов на Дону
                        <br>Краснодар
                        <br>Саратов</td>
                    <td>Тула
                        <br>Самара
                        <br>Оренбург
                        <br>Симферополь
                        <br>Липецк
                        <br>Москва</td>
                </tr>
            </table>

        </div>

        <div class="hero-content__title">
            <h2 lang="ru"></h2>
            <h3 lang="ru">Внешние перевозки</h3>
            <h2 lang="en"></h2>
            <h3 lang="en"></h3>
        </div>

        <div class="hero-content__table">

            <table class="coverage">
                <tr>
                    <th>0 – 500 км</th>
                    <th>500 – 1000 км</th>
                    <th>1000 — 1600 км</th>
                </tr>
                <tr>
                    <td>Баку
                        <br>Ереван
                        <br>Тбилиси
                        <br>Актау</td>
                    <td>Атырау
                        <br>Багдад
                        <br>Тегеран</td>
                    <td>Дамаск
                        <br>Ашхабад
                        <br>Анкара
                        <br>Стамбул
                        <br>Кишинев
                        <br>Киев</td>
                </tr>
            </table>

        </div>

        <div class="hero-content__poetic">

            <div class="hero-content__poetic_poem">
                <p>Люди, я прошу вас, ради бога,
                    <br>Не стесняйтесь доброты своей.
                    <br>На земле друзей не так уж много:
                    <br>Опасайтесь потерять друзей</p>

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