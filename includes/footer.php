<script>
    $(function () {
        $('.<?=$id;?>').addClass('active');
        <?php if ($id == 'index'): ?>
        $('#f-menu-primary').removeClass('hidden');
        $('#f-menu-secondary').addClass('hidden');
        $('#f-partners-primary').removeClass('hidden');
        $('#f-partners-secondary').addClass('hidden');
        $('#f-contactinfo-secondary').addClass('hidden');
        <?php endif; ?>
    });
</script>

<footer class="footer">

    <div class="footer__menu">

        <div id="f-menu-primary" class="footer__menu_primary hidden">

            <ul class="row">

                <li><a href="/objects/hotel-five-stars/">Гостиничный<br>комплекс<br><span class="asterisk">*****</span></a></li>
                <li><a href="/objects/hotel-four-stars/">Гостиничный<br>комплекс<br><span class="asterisk">****</span></a></li>

            </ul>

            <ul class="row">

                <li><a href="/objects/villas-and-cottages/">Виллы<br>и коттеджи</a></li>
                <li><a href="/objects/balneology/">Бальнеологический<br>комплекс</a></li>
                <li><a href="/objects/spa-and-detox/">СПА<br>и Детокс</a></li>

            </ul>

            <ul class="row">

                <li><a href="/objects/sport/">Спорт</a></li>
                <li><a href="/objects/golf/">Гольф</a></li>

            </ul>

            <ul class="row">

                <li><a href="/objects/horse-club/">Конно-
                            <br>спортивный
                            <br>клуб</a></li>
                <li><a href="/objects/ski/">Горнолыжный
                            <br>комплекс</a></li>
                <li><a href="/objects/commercial/">Коммерция</a></li>

            </ul>

            <ul class="row">

                <li><a href="/objects/farm/">Ферма</a></li>
                <li><a href="/objects/stronghold/">Хунзахская
                            <br>крепость</a></li>
                <li><a href="#">Аэропорт</a></li>

            </ul>

        </div>

        <div id="f-menu-secondary" class="footer__menu_secondary">

            <div class="logo-row">
                <a href="/"><img src="/img/matlas-logo-dark.png"></a>
            </div>

            <ul class="first-row">

                <li class="hotel-five-stars"><a href="/objects/hotel-five-stars/">Отель 5<span class="asterisk">*</span></a></li>
                <li class="hotel-four-stars"><a href="/objects/hotel-four-stars/">Отель 4<span class="asterisk">*</span></a></li>
                <li class="villas-and-cottages"><a href="/objects/villas-and-cottages/">Виллы и коттеджи</a></li>
                <li class="balneology"><a href="/objects/balneology/">Бальнеология</a></li>
                <li class="spa-and-detox"><a href="/objects/spa-and-detox/">СПА и Детокс</a></li>

            </ul>

            <ul class="second-row">

                <li class="sport"><a href="/objects/sport/">Спорт</a></li>
                <li class="golf"><a href="/objects/golf/">Гольф</a></li>
                <li class="horse-club"><a href="/objects/horse-club/">Конно-
                            <br>спортивный
                            <br>клуб</a></li>
                <li class="ski"><a href="/objects/ski/">Горнолыжный
                            <br>комплекс</a></li>
                <li class="commercial"><a href="/objects/commercial/">Коммерция</a></li>
                <li class="farm"><a href="/objects/farm/">Ферма</a></li>
                <li class="stronghold"><a href="/objects/stronghold/">Хунзахская
                            <br>крепость</a></li>
                <li><a href="#">Аэропорт</a></li>

            </ul>

        </div>

    </div>
    
    <div id="map" class="footer__map">
        
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2918.873040777713!2d47.4838979509875!3d42.980947979047734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404ea04f57b06f11%3A0xdfe56dba132d64ca!2z0YPQuy4g0KLQsNC90LrQsNC10LLQsCwgNTQsINCc0LDRhdCw0YfQutCw0LvQsCwg0KDQtdGB0L8uINCU0LDQs9C10YHRgtCw0L0sIDM2NzAwOA!5e0!3m2!1sru!2sru!4v1475001161913" width="900" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        
        <div class="close">
            <a href="#closemap">X</a>
        </div>
        
    </div>

    <div class="footer__partners">

        <div id="f-partners-primary" class="footer__partners_primary hidden">

            <div class="first-column">
                <div class="partner">
                    <div class="logo">
                        <a href="https://www.summagroup.ru/" target="_blank"><img src="/img/partners/partner-1.png"></a>
                    </div>
                    <div class="title"><a href="https://www.summagroup.ru/" target="_blank">Генеральный инвестор</a></div>
                </div>
                <div class="partner">
                    <div class="logo">
                        <a href="http://www.cushmanwakefield.ru/" target="_blank"><img src="/img/partners/partner-2.png"></a>
                    </div>
                    <div class="title"><a href="http://www.cushmanwakefield.ru/" target="_blank">Стратегический консалтинг</a></div>
                </div>
                <div class="partner">
                    <div class="logo">
                        <a href="http://www.exclusivadesign.com/" target="_blank"><img src="/img/partners/partner-3.png"></a>
                    </div>
                    <div class="title"><a href="http://www.exclusivadesign.com/" target="_blank">Архитектурное бюро</a></div>
                </div>
                <div class="partner">
                    <div class="logo">
                        <a href="http://www.cniipz.ru/" target="_blank"><img src="/img/partners/partner-4.png"></a>
                    </div>
                    <div class="title"><a href="http://www.cniipz.ru/" target="_blank">Проектное бюро</a></div>
                </div>
                <div class="partner">
                    <div class="logo">
                        <a href="#" target="_blank"><img src="/img/partners/partner-5.png"></a>
                    </div>
                    <div class="title">Девелопер проекта</div>
                </div>
            </div>

            <div class="second-column">
                <div class="partner">
                    <div class="logo">
                        <a href="http://government.ru/" target="_blank"><img src="/img/partners/partner-6.png"></a>
                    </div>
                    <div class="title"><a href="http://government.ru/" target="_blank">Правительство РФ</a></div>
                </div>
                <div class="partner">
                    <div class="logo">
                        <a href="http://www.e-dag.ru/" target="_blank"><img src="/img/partners/partner-7.png"></a>
                    </div>
                    <div class="title"><a href="http://www.e-dag.ru/" target="_blank">Правительство
                            <br>республики
                            <br>Дагестан</a></div>
                </div>
                <div class="partner">
                    <div class="logo">
                        <a href="http://khunzakh.ru/" target="_blank"><img src="/img/partners/partner-8.png"></a>
                    </div>
                    <div class="title"><a href="http://khunzakh.ru/" target="_blank">Администрация
                            <br>Хунзахского
                            <br>района</a></div>
                </div>
                <div class="partner">
                    <div class="logo">
                        <a href="http://www.ncrc.ru/" target="_blank"><img src="/img/partners/partner-9.png"></a>
                    </div>
                    <div class="title"><a href="http://www.ncrc.ru/" target="_blank">Управляющая
                            <br>компания ОЭЗ</a></div>
                </div>
            </div>

            <div class="third-column">

                <p>

                    <strong>Матлас</strong>
                    <br> г. Махачкала,
                    <br> ул. Танкаева, 54
                    <br> <a id="showmap" href="#showmap">показать карту</a><a id="closemap" class="hidden" href="#closemap">скрыть карту</a>
                    <br><a href="mailto:info@matlasresort.com">info<span class="beige">@</span>matlasresort.com</a>
                    <br>matlasresort.com<br>
                    <?=date("Y")?>

                </p>

            </div>
                
            <div class="third-column design">

                <p>

                    Дизайнер<br>и разработчик сайта —<br><a href="http://www.igormakovsky.ru" target="_blank">Игорь Маковский</a>

                </p>

            </div>

        </div>

        <div id="f-partners-secondary" class="footer__partners_secondary">
            <div class="partner">
                <div class="logo">
                    <a href="https://www.summagroup.ru/" target="_blank"><img src="/img/partners/partner-1.png"></a>
                </div>
            </div>
            <div class="partner">
                <div class="logo">
                    <a href="http://www.cushmanwakefield.ru/" target="_blank"><img src="/img/partners/partner-2.png"></a>
                </div>
            </div>
            <div class="partner">
                <div class="logo">
                    <a href="http://www.exclusivadesign.com/" target="_blank"><img src="/img/partners/partner-3.png"></a>
                </div>
            </div>
            <div class="partner">
                <div class="logo">
                    <a href="http://www.cniipz.ru/" target="_blank"><img src="/img/partners/partner-4.png"></a>
                </div>
            </div>
            <div class="partner">
                <div class="logo">
                    <a href="http://government.ru/" target="_blank"><img src="/img/partners/partner-6.png"></a>
                </div>
            </div>
            <div class="partner">
                <div class="logo">
                    <a href="http://www.e-dag.ru/" target="_blank"><img src="/img/partners/partner-7.png"></a>
                </div>
            </div>
            <div class="partner">
                <div class="logo">
                    <a href="http://khunzakh.ru/" target="_blank"><img src="/img/partners/partner-8.png"></a>
                </div>
            </div>
            <div class="partner">
                <div class="logo">
                    <a href="http://www.ncrc.ru/" target="_blank"><img src="/img/partners/partner-9.png"></a>
                </div>
            </div>
        </div>

    </div>

    <div id="f-contactinfo-secondary" class="footer__contactinfo">

        <p>

            <strong>Матлас</strong>
            <br> г. Махачкала, ул. Танкаева, 54
            <br><a href="mailto:info@matlasresort.com">info<span class="beige">@</span>matlasresort.com</a>
            <br>matlasresort.com
            <br>
            <?=date("Y")?>

        </p>

    </div>

</footer>