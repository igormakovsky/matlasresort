<?php

function ru()
{
    if ($_COOKIE['langs'] == 'en') {
        return false;
    } else {
        return true;
    }
}

?>