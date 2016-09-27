<header class="header">

        <div id="header__opener" class="header__opener">
        </div>

        <nav id="header__nav" class="header__nav">

            <ul>
                <li><a href="#">item1</a></li>
                <li>item2</li>
                <li>item3</li>
                <li>item4</li>
                <li>item5</li>
                <li>item6</li>
                <li>item7</li>
                <li>item8</li>
                <li>item9</li>
                <li>item10</li>
            </ul>

        </nav>

</header>

   <div class="language">
    <p>
       <form action="/includes/switch_languages.php" method="post" id="switch-lang-form">
           <input type="hidden" name="lang" value="<?=!ru()?'ru':'en'?>">
           <input type="hidden" name="referer" value="<?=$_SERVER['SCRIPT_NAME']?>">
            <a href="#" id="switch-lang">
                <?=$settolang;?>
            </a>
       </form>
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