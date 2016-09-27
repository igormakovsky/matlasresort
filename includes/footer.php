<script>
        $(function () {
            $('#f-<?=$id;?>').addClass('active');
            <?php if ($id == 'index'): ?>
            $('#f-menu-primary').removeClass('hidden');
            $('#f-menu-secondary').addClass('hidden');
            <?php endif; ?>
        });
</script>

<footer class="footer">

        <div class="footer__menu">
            
            <div id="f-menu-primary" class="footer__menu_primary hidden">

                <ul class="row">

                    <li id="f-hotel-five-stars"><a href="#">Гостиничный<br>комплекс<br><span class="asterisk">*****</span></a></li>
                    <li id="f-hotel-four-stars"><a href="/objects/hotel-four-stars/">Гостиничный<br>комплекс<br><span class="asterisk">****</span></a></li>
                    
                </ul>
                   
                <ul class="row">
                   
                    <li><a href="#">Виллы<br>и коттеджи</a></li>
                    <li><a href="#">Бельнеологический<br>комплекс</a></li>
                    <li><a href="#">СПА<br>и Детокс</a></li>

                </ul>

                <ul class="row">

                    <li><a href="#">Спорт</a></li>
                    <li><a href="#">Гольф</a></li>
                    
                </ul>
                   
                <ul class="row">
                   
                    <li><a href="#">Конно-
                            <br>спортивный
                            <br>клуб</a></li>
                    <li><a href="#">Горнолыжный
                            <br>комплекс</a></li>
                    <li><a href="#">Коммерция</a></li>
                    
                </ul>
                   
                <ul class="row">
                   
                    <li><a href="#">Ферма</a></li>
                    <li><a href="#">Хунзахская
                            <br>крепость</a></li>
                    <li><a href="#">Аэропорт</a></li>

                </ul>

            </div>

            <div id="f-menu-secondary" class="footer__menu_secondary">

                <ul class="first-row">

                    <li id="f-hotel-five-stars"><a href="#">Отель 5<span class="asterisk">*</span></a></li>
                    <li id="f-hotel-four-stars"><a href="#">Отель 4<span class="asterisk">*</span></a></li>
                    <li><a href="#">Виллы и коттеджи</a></li>
                    <li><a href="#">Бельнеология</a></li>
                    <li><a href="#">СПА и Детокс</a></li>

                </ul>

                <ul class="second-row">

                    <li><a href="#">Спорт</a></li>
                    <li><a href="#">Гольф</a></li>
                    <li><a href="#">Конно-
                            <br>спортивный
                            <br>клуб</a></li>
                    <li><a href="#">Горнолыжный
                            <br>комплекс</a></li>
                    <li><a href="#">Коммерция</a></li>
                    <li><a href="#">Ферма</a></li>
                    <li><a href="#">Хунзахская
                            <br>крепость</a></li>
                    <li><a href="#">Аэропорт</a></li>

                </ul>

            </div>

        </div>

        <div class="footer__partners">

            <div class="footer__partners_row">
                <div class="partner">
                    <div class="logo">
                        <a href="https://www.summagroup.ru/" target="_blank"><img src="/img/partners/partner-1.png"></a>
                    </div>
                    <div class="title">Генеральный инвестор</div>
                </div>
                <div class="partner">
                    <div class="logo"><a href="#" target="_blank"><img src="/img/partners/partner-2.png"></a></div>
                    <div class="title">Консультант</div>
                </div>
                <div class="partner">
                    <div class="logo"><a href="#" target="_blank"><img src="/img/partners/partner-3.png"></a></div>
                    <div class="title">Архитектурное бюро</div>
                </div>
                <div class="partner">
                    <div class="logo"><a href="#" target="_blank"><img src="/img/partners/partner-4.png"></a></div>
                    <div class="title">Проектное бюро</div>
                </div>
                <!-- <div class="partner">
                    <div class="logo"><a href="#" target="_blank"><img src="/img/partners/partner-5.png"></a></div>
                    <div class="title">Девелопер проекта</div>
                </div> -->
                <div class="partner">
                    <div class="logo"><a href="#" target="_blank"><img src="/img/partners/partner-6.png"></a></div>
                    <div class="title">Правительство РФ</div>
                </div>
                <div class="partner">
                    <div class="logo"><a href="#" target="_blank"><img src="/img/partners/partner-7.png"></a></div>
                    <div class="title">Правительство
                        <br>республики
                        <br>Дагестан</div>
                </div>
                <div class="partner">
                    <div class="logo"><a href="#" target="_blank"><img src="/img/partners/partner-8.png"></a></div>
                    <div class="title">Администрация
                        <br>Хунзахского
                        <br>района</div>
                </div>
                <div class="partner">
                    <div class="logo"><a href="#" target="_blank"><img src="/img/partners/partner-9.png"></a></div>
                    <div class="title">Управляющая
                        <br>компания ОЭЗ</div>
                </div>
            </div>
        </div>
</footer>