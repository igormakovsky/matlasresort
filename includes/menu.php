<div class="langchanger">
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