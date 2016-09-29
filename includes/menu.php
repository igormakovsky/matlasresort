<header class="header">

    <div id="header__opener" class="header__opener">
    </div>

    <nav id="header__nav" class="header__nav">

        <ul>
            <li class="hotel-five-stars"><a href="/objects/hotel-five-stars/">Отель 5<span class="asterisk">*</span></a></li>
            <li class="hotel-four-stars"><a href="/objects/hotel-four-stars/">Отель 4<span class="asterisk">*</span></a></li>
            <li class="villas-and-cottages"><a href="/objects/villas-and-cottages/">Виллы и коттеджи</a></li>
            <li class="balneology"><a href="/objects/balneology/">Бельнеология</a></li>
            <li class="spa-and-detox"><a href="/objects/spa-and-detox/">СПА и Детокс</a></li>
            <li class="sport"><a href="/objects/sport/">Спорт</a></li>
            <li class="golf"><a href="/objects/golf/">Гольф</a></li>
            <li class="horse-club"><a href="/objects/horse-club/">Конно-
                            <br>спортивный
                            <br>клуб</a></li>
            <li class="ski"><a href="/objects/ski/">Горнолыжный
                            <br>комплекс</a></li>
            <li class="commercial"><a href="/objects/commercial/">Коммерция</a></li>
            <li class="farm"><a href="/objects/farm/">Ферма</a></li>
            <li><a href="#">Хунзахская
                            <br>крепость</a></li>
            <li><a href="#">Аэропорт</a></li>
        </ul>

    </nav>

</header>



<div class="language">
    <p>

        <a href="<?='http://'.$switch;?>">
            <?=$settolang;?>
        </a>

        <? if ($id == 'contents'){
    echo '<p><a href="#contactinfo">'.$contact.'</a></p>';} ?>

    </p>
</div>




<div class="backtomain">
    <p>
        <a>
            <? if ($id != 'contents'){echo '<p><a href="'.$siteroot.'#'.$id.'">'.$tomainpage.'</a></p>';} ?>
    </a>
    </p>
</div>