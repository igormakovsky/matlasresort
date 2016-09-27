<?php

function ru()
{
    if (isset($_COOKIE)) {
        if ($_COOKIE['langs'] == 'en') {
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }
}

?>