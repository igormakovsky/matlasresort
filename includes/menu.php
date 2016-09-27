<header class="header">

        <div id="header__opener" class="header__opener">
        </div>

        <nav id="header__nav" class="header__nav">

            <ul>
                <li><a href="#">Отель 5<span class="asterisk">*</span></a></li>
                <li><a href="/objects/hotel-four-stars/">Отель 4<span class="asterisk">*</span></a></li>
                <li><a href="#">Виллы и коттеджи</a></li>
                <li><a href="#">Бельнеология</a></li>
                <li><a href="#">СПА и Детокс</a></li>
                <li><a href="#">Спорт</a></li>
                <li><a href="#">Гольф</a></li>
                <li id="f-horse-club"><a href="/objects/horse-club/">Конно-
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